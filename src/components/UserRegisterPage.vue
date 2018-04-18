<template>
  <div class="ui middle aligned center aligned grid login_container">
    <div class="column">
      <h2 class="ui orange  header">
        <div class="content">
          Kullanıcı Kayıt
        </div>
      </h2>
      <form class="ui large form" :class="{'error': hasErrors}">
        <div class="ui stacked segment">

          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="name" placeholder="Kullanıcı adınızı giriniz" v-model.trim="name" required>
            </div>
          </div>

          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="email" placeholder="E-mail adresinizi giriniz" v-model.trim="email" required>
            </div>
          </div>

          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input type="password" name="password" placeholder="Parolanızı giriniz" v-model.trim="password" required>
            </div>
          </div>

          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input type="password" name="password_confirmantion" placeholder="Parolanızı tekrar giriniz" v-model.trim="password_confirmation" required>
            </div>
          </div>


          <div class="ui fluid large orange  button" @click.prevent="register" :class="{'loading': isLoading}">Kayıt Ol</div>
        </div>

        <div class="ui error message" v-if="hasErrors">
          <p v-for="error in errors"> {{error}}</p>
        </div>

      </form>

      <div class="ui message">
        Zaten bir hesabınız var mı? <router-link to="/giris">Giriş Yap</router-link>

      </div>
    </div>
  </div>
</template>
<script>
import md5 from "js-md5";
export default {
  name: "register",
  data() {
    return {
      name: "",
      email: "",
      password: "",
      password_confirmation: "",
      errors: [],

      isLoading: false
    };
  },
  computed: {
    hasErrors() {
      return this.errors.length > 0;
    }
  },
  methods: {
    register() {
      this.errors = [];
      if (this.isFormValid()) {
      }
    },
    saveUserTOUsersRef(user) {
      return this.usersRef.child(user.uid).set({
        name: user.displayName,
        avatar: user.photoURL
      });
    },
    isEmpty() {
      return (
        this.name.length === 0 ||
        this.email.length === 0 ||
        this.password.length === 0 ||
        this.password_confirmation.length === 0
      );
    },
    passwordValid() {
      if (this.password !== this.password_confirmation) return false;
      if (this.password.length < 6 || this.password_confirmation.length < 6)
        return false;
      return true;
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
