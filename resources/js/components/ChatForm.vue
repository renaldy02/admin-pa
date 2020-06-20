<template>
    <div class="input-group">
        <input id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage">

        <span class="input-group-btn">
            <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">
                Send
            </button>
        </span>
    </div>
</template>

<script>
    export default {
        props: ['user'],
        data() {
            return {
                newMessage: ''
            }
        },
        created() {
            this.listenForChanges();
        },
        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    user: this.user,
                    message: this.newMessage
                });
                this.newMessage = ''
            },
            listenForChanges() {
                Echo.channel('chat')
                    .listen('MessageSent', post => {
                        if (! ('Notification' in window)) {
                            alert('Web Notification is not supported');
                            return;
                        }

                        if (window.Notification) {
                            console.log('Notifications are supported!');
                        } else {
                            alert('Notifications aren\'t supported on your browser! :(');
                        }

                        Notification.requestPermission( permission => {
                            let notification = new Notification('New post alert!', {
                                body: post.title, // content for the alert
                                icon: "https://pusher.com/static_logos/320x320.png" // optional image url
                            });

                            // link to page on clicking the notification
                            notification.onclick = () => {
                                window.open(window.location.href);
                            };
                        });
                    })
            }
        }
    }
</script>