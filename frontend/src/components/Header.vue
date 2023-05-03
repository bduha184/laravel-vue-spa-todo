<script setup>
import { RouterView } from 'vue-router';
import Button from './Button.vue'
</script>

<template>
  <div>
    <Button link="/tasks" name="タスク一覧" class="mr-5"/>
    <Button link="/tasks/create" name="タスク追加"/>
    <RouterView/>
  </div>
</template>
