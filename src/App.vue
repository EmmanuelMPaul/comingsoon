<template>
  <div id="app">
    <Main v-bind:title="title" v-bind:links="social" />
  </div>
</template>

<script>
import Main from "./components/Main.vue";

export default {
  data() {
    return {
      title: "COMMING SOON.",
      social: {
        facebook: "https://www.facebook.com/Mr.Emmanuel.Paul",
        twitter: "https://twitter.com/_EmmanuelPaul",
        instagram: "https://www.instagram.com/emmanuel.paul_/",
        linkedin: "https://www.linkedin.com/in/emmanuelmpaul/",
        twitch: "https://www.twitch.tv/emmanuelpaul"
      }
    };
  },
  name: "app",
  components: {
    Main
  }
};
</script>

<style>
html,
body {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-weight: 300;
}
html {
  overflow: hidden !important;
  /* background-image: url("./assets/background.jpg") !important; */
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>
