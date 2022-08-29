<template>
  <section class="section-container">
    <v-row class="signin">
      <v-col cols="8" class="left">
        <h1>Welcome to my site</h1>
      </v-col>
      <v-col cols="4" class="right">
        <h2>Имя</h2>
        <input v-model="firstname" placeholder="Имя:" />
      </v-col>
      <v-col cols="4" class="right">
        <h2>Фамилия</h2>
        <input v-model="Surname" placeholder="Имя:" />
      </v-col>
    </v-row>
  </section>
</template>
