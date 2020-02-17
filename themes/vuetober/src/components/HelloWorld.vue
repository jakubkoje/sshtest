<template>
  <b-container>
    <b-form @submit.prevent="posli()">
      <b-form-group label="Name:" label-for="input-1">
        <b-form-input
          id="input-1"
          type="text"
          required
          v-model="user.name"
          placeholder="Enter name"
        >
        </b-form-input>
      </b-form-group>

      <b-form-group label="Surname:" label-for="input-2">
        <b-form-input
          id="input-2"
          type="text"
          required
          v-model="user.surname"
          placeholder="Enter surname"
        >
        </b-form-input>
      </b-form-group>

      <b-form-group label="Email adress:" label-for="input-3">
        <b-form-input
          id="input-3"
          type="text"
          required
          v-model="user.email"
          placeholder="Enter email"
        >
        </b-form-input>
      </b-form-group>
      <b-form-group label="Password:" label-for="input-4">
        <b-form-input
          id="input-4"
          type="password"
          required
          v-model="user.password"
          placeholder="Enter password"
        >
        </b-form-input>
      </b-form-group>
      <b-form-group label="Password again:" label-for="input-5">
        <b-form-input
          id="input-5"
          type="password"
          required
          v-model="user.password_confirmation"
          placeholder="Enter password again"
        >
        </b-form-input>
      </b-form-group>

      <b-button type="submit" variant="primary">
        Submit
      </b-button>
    </b-form>
  </b-container>
</template>

<script>
import Axios from 'axios';

export default {
  name: 'HelloWorld',
  data() {
    return {
      user: {
        name: '',
        surname: '',
        email: '',
        password: '',
        password_confirmation: '',
      },
    };
  },
  methods: {
    posli() {
      Axios.post('https://test.test/api/auth/register', {
        name: this.user.name,
        surname: this.user.surname,
        email: this.user.email,
        password: this.user.password,
        password_confirmation: this.user.password_confirmation,
      })
        .then((res) => {
          console.log(res);
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
};
</script>

<style lang="scss" scoped></style>
