<script>
import axios from "axios";

export default {
  data() {
    return {
      razze: [],
    };
  },
  mounted() {
    axios.get("http://localhost:8888/todo-json-php/back/").then((res) => {
      this.razze = res.data;
    });
  },
};
</script>

<template>
  <h1>Le razze di caniii :D</h1>
  <ul>
    <li v-for="razza in razze">{{ razza }}</li>
  </ul>
</template>

<style scoped></style>
