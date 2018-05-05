<template>
<div id="app">
  <router-view @authenticated="setAuthenticated" />
</div>
</template>

<script>
export default {
  name: 'App',
        data() {
            return {
                authenticated: false,
                mockAccount: {
                    user_id : "",
                    user_name: "",
                    user_password: ""
                } 
            }
        },
        methods: {
            setAuthenticated(status) {
                this.authenticated = status;
            },
            logout() {
                this.authenticated = false;
            }
        }
}
</script>

<style >
body {
  height: 100%;
  background: #212121;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
