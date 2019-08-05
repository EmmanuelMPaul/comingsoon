<template>
  <section class="hero if-fullheight">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-6 is-offset-3">
          <div class="center-text">
            <p class="title is-1">{{title}}</p>
            <a v-bind:href="links.facebook" target="_blank">
              <button class="button-facebook button is-medium">
                <i class="fab fa-facebook-f"></i>
              </button>
            </a>
            <a v-bind:href="links.twitter" target="_blank">
              <button class="button-twitter button is-medium">
                <i class="fab fa-twitter"></i>
              </button>
            </a>
            <a v-bind:href="links.instagram" target="_blank">
              <button class="button-instagram button is-medium">
                <i class="fab fa-instagram"></i>
              </button>
            </a>
            <a v-bind:href="links.linkedin" target="_blank">
              <button class="button-linkedin button is-medium">
                <i class="fab fa-linkedin-in"></i>
              </button>
            </a>
            <a v-bind:href="links.twitch" target="_blank">
              <button class="button-twitch button is-medium">
                <i class="fab fa-twitch"></i>
              </button>
            </a>
            <p class="subtitle is-5">Website Under Construction</p>
            <br />
            <p class="subtitle is-6">get notified when I'm Back</p>
            <form @submit.prevent="onSend" id="mailform" method="POST" autocomplete="off">
              <div class="field">
                <p class="control has-icons-left has-icos-right">
                  <input
                    type="email"
                    class="input is-medium"
                    id="email"
                    v-model="email"
                    placeholder="enter email"
                  />
                  <span class="icon is-medium is-left">
                    <i class="fas fa-envelope"></i>
                  </span>
                </p>
              </div>
              <button class="button is-info is-large is-fullwidth" type="submit">
                <span class="icon is-medium">
                  <i class="far fa-bell"></i>
                </span>
                <span>NOTIFY ME</span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="hero-foot">
      <div class="container">
        <div class="tabs is-centered">
          <ul>
            <li class="footer-text">
              <a href="www.emmanuelpaul.com" class="qoute">
                Keep Calm And
                <i class="fa fa-heart fa-fw heart-icon"></i> Coding
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import Swal from "sweetalert2";
import axios from "axios";
export default {
  name: "Main",
  props: {
    title: String,
    links: Object
  },
  data() {
    return {
      email: "",
      error: null
    };
  },
  methods: {
    onSend: function(e) {
      this.error = null;

      if (!this.email) {
        this.error = "email required!";
        this.formError();
      } else if (!this.validEMail(this.email)) {
        this.error = "Valid email required! ";
        this.formError();
      }

      if (this.error === null) {
        this.sendData();
        return true;
      }

      e.preventDefault();
    },
    validEmail: function(email) {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    },
    formError: function(e) {
      Swal.fire({
        type: "error",
        title: "Oops...",
        text: "Something went wrong!",
        footer: this.error + " check you email" + this.email
      });
      e.preventDefault();
    },
    sendData: function() {
      const guestEmail = new FormData();

      guestEmail.append("email", this.email);
      axios
        .post("/Mailer/mail.php", { guestEmail })
        .then(function(response) {
          Swal.fire({
            position: "top-end",
            type: "success",
            title: "All set, happy coding",
            showConfirmButton: false,
            timer: 1500
          });
          console.log(response);
        })
        .catch(function(error) {
          Swal.fire({
            position: "top-end",
            type: "error",
            title: "sorry! try again later ",
            showConfirmButton: false,
            timer: 1500
          });
          console.log(error);
        });
    }
  }
};
</script>


<style scoped>
.hero.is-success {
  background: #f2f6fa;
}
.hero .nav,
.hero.is-success .nav {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.box {
  margin-top: 5rem;
  background-color: rgba(255, 255, 255, 0.1);
}
input {
  font-weight: 300;
  margin-bottom: 10px;
}
.title.is-1 {
  font-size: 7rem;
}
p {
  font-weight: 700;
  color: #fff;
}
p.subtitle {
  padding-top: 1.5rem;
}
.button {
  margin: 3px;
  border-radius: 5px;
}
.button-facebook {
  color: #fff;
  background-color: #3a589a;
  width: 50px;
}
.button-facebook:hover {
  border-color: #bdbdbd;
  color: ffffff;
}
.button-twitter {
  color: #fff;
  background-color: #4099ff;
  width: 50px;
}
.button-twitter:hover {
  border-color: #bdbdbd;
  color: ffffff;
}
.button-instagram {
  color: #fff;
  background-color: #c13584;
  width: 50px;
}
.button-instagram:hover {
  border-color: #bdbdbd;
  color: ffffff;
}
.button-linkedin {
  color: #fff;
  background-color: #0077b5;
  width: 50px;
}
.button-linkedin:hover {
  border-color: #bdbdbd;
  color: ffffff;
}
.button-twitch {
  color: #fff;
  background-color: #6441a5;
  width: 50px;
}
.button-twitch:hover {
  border-color: #bdbdbd;
  color: #ffffff;
}
.qoute {
  color: #000;
}
.heart-icon {
  font-size: 14px;
  color: red;
  margin: 1 5px;
}
a {
  color: transparent;
}
a:hover {
  color: #d3d6df;
}
</style>
