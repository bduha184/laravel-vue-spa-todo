<script setup>
import { RouterLink,RouterView } from 'vue-router';
</script>

<template>
  <div>
    <router-link to="/tasks" >タスク一覧</router-link>
    <router-link to="/tasks/create">タスク追加</router-link>
    <RouterView/>
  </div>
</template>
