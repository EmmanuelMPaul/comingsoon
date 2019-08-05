<template>
  <section class="hero if-fullheight">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-6 is-offset-3">
          <div class="center-text">
            <p class="title is-1">{{title}}</p>
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
    title: String
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.qoute {
  color: #000;
}
.heart-icon {
  font-size: 14px;
  color: red;
  margin: 1 5px;
}
</style>
