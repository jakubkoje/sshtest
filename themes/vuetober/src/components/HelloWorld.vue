<template>
  <b-container>
    <ValidationObserver v-slot="{ passes }">
      <b-form @submit.prevent="passes(posli)">
        <!-- <b-form-group label="Name:" label-for="input-1">
        <b-form-input
          id="input-1"
          type="text"
          required
          v-model="user.name"
          placeholder="Enter name"
        >
        </b-form-input>
      </b-form-group> -->

        <BTextInputWithValidation
          rules="required|min:3|alpha"
          type="text"
          label="Name"
          name="Name"
          v-model="user.name"
          placeholder="Enter name"
        />

        <BTextInputWithValidation
          rules="required|min:3|alpha"
          type="text"
          label="Surname"
          name="Surname"
          v-model="user.surname"
          placeholder="Enter surname"
        />

        <BTextInputWithValidation
          rules="required|email"
          type="text"
          label="Email"
          name="Email"
          v-model="user.email"
          placeholder="Enter email"
        />

        <BTextInputWithValidation
          rules="required|min:4"
          type="password"
          label="Password"
          name="Password"
          v-model="user.password"
          placeholder="Enter password"
          vid="user.password"
        />

        <BTextInputWithValidation
          rules="required|min:4|confirmed:user.password"
          type="password"
          label="Password confirmation"
          name="Password confirmation"
          v-model="user.password_confirmation"
          placeholder="Confirm password"
        />

        <b-button type="submit" variant="primary">
          Submit
        </b-button>
      </b-form>
    </ValidationObserver>
  </b-container>
</template>

<script>
import Axios from 'axios';

import { ValidationObserver } from 'vee-validate';
import BTextInputWithValidation from './BTextInputWithValidation.vue';

export default {
  name: 'HelloWorld',
  components: {
    BTextInputWithValidation,
    ValidationObserver,
  },
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
      Axios.post('https://teachplusplus.hybridlab.dev/api/auth/register', {
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
