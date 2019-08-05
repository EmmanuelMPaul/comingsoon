<template>
  <section class="hero if-fullheight">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-6 is-offset-3">
          <div class="center-text">
            <p class="title is-1">{{title}}</p>
            <a v-bind:href="links.facebook" target="_blank">
              <button>
                <i class="fab fa-facebook-f"></i>
              </button>
            </a>
            <a v-bind:href="links.twitter" target="_blank">
              <button>
                <i class="fab fa-twitter"></i>
              </button>
            </a>
            <a v-bind:href="links.instagram" target="_blank">
              <button>
                <i class="fab fa-instagram"></i>
              </button>
            </a>
            <a v-bind:href="links.linkedin" target="_blank">
              <button>
                <i class="fab fa-linkedin-in"></i>
              </button>
            </a>
            <a v-bind:href="links.twitch" target="_blank">
              <button>
                <i class="fab fa-twitch"></i>
              </button>
            </a>
            <p class="subtitle is-5">Website Under Construction</p>
            <br />
            <p class="subtitle is-6">get notified when I'm Back</p>
            <form
              @submit.prevent="onSend"
              action="mail.php"
              id="mailform"
              method="POST"
              autocomplete="off"
            >
              <div class="field">
                <p class="control has-icons-left has-icos-right">
                  <input
                    type="email"
                    class="input is-medium"
                    id="email"
                    v-model="email"
                    placeholder="enter email"
                  />
                </p>
                <span class="icon is-medium is-left">
                  <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-medium is-right">
                  <i class="fas fa-check"></i>
                </span>
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
            <li class="footer">
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
export default {
  name: "Main",
  props: {
    title: String,
    links: Object
  }
};
</script>


<style scoped>
p {
  font-weight: 800;
}
p.subtitle {
  padding-top: 1.5rem;
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
  color: #fff;
}
a:hover {
  color: #d3d6df;
}
</style>
