<template>
<div id="app">
  <div class="ui middle aligned center aligned grid login_container">
      <div class="column">
        <h2 class="ui orange  header">
          <div class="content">
            Kullanıcı Girişi
          </div>
        </h2>
        <form class="ui large form" :class="{'error': hasErrors}">
          <div class="ui stacked segment">

            <div class="field">
              <div class="ui left icon input">
                <i class="user icon"></i>
                <input type="text" name="email" placeholder="Kullanıcı adınızı giriniz" v-model="input.user_name" required>
              </div>
            </div>

            <div class="field">
              <div class="ui left icon input">
                <i class="lock icon"></i>
                <input type="password" name="password" placeholder="Parolanızı giriniz" v-model="input.user_password" required>
              </div>
            </div>

            <div class="ui fluid large orange  button" @click="login">Giriş</div>
          </div>

          <div class="ui error message" v-if="hasErrors">
            <p v-for="error in errors"> {{error}}</p>
          </div>

        </form>

        <div class="ui message">
          Hesabınız yok mu? <router-link to="/kayitol">Hemen kayıt ol!</router-link>
        </div>
      </div>
    </div>

</div>
</template>
<script>
export default {
  data() {
    return {
      errors: [],
      isLoading: false,
      input: {
                    user_name: "",
                    user_password: ""
                } 
    };
  },
  computed: {
    hasErrors() {
      return this.errors.length > 0;
    }
  },
  methods: {
    login() {
        if(this.input.username != "" && this.input.password != "") {
                this.$http
                .get("http://localhost:8888/api/api.php?checkUser&user_name="+this.input.user_name)
                .then(function(data) {
                  console.log(data);
                  this.$parent.mockAccount = data.body;
                });

                this.$emit("authenticated", true);
                this.$router.replace({ name: "home" });

              }
    },
    isEmpty() {
      return this.email.length === 0 || this.password.length === 0;
    },
    passwordValid() {
      return this.password.length < 6;
    },
    isFormValid() {
      if (this.isEmpty()) {
        this.errors.push("one of the fields is empty");
        return false;
      }
      if (!this.passwordValid()) {
        this.erros.push("Passwords mismatch or something");
        return false;
      }
      return true;
    }
  }
};
</script>
<style scoped>
.login_container {
  margin-top: 40px;
}
.column {
  max-width: 450px;
}
</style>
