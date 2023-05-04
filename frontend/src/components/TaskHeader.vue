<script setup>
import { RouterView } from 'vue-router';
import TaskButton from './TaskButton.vue'
</script>

<template>
  <div>
    <TaskButton link="/tasks" name="タスク一覧" class="mr-5"/>
    <TaskButton link="/tasks/create" name="タスク追加"/>
    <RouterView/>
  </div>
</template>
