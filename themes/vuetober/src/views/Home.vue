<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo-openlab.png" />
    <HelloWorld />
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue';

export default {
  name: 'Home',
  components: {
    HelloWorld,
  },
};
</script>

<style lang="scss" scoped>
img {
  display: block;
  margin: 0 auto;
}
</style>
