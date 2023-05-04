<script setup>
import TaskButton from './TaskButton.vue'
import {ref } from 'vue'
import router from '../router/router'

const task = ref({})

function submit(title, content, person_in_charge) {
  fetch('http://localhost:8000/api/tasks', {
    method: 'POST',
    headers: {
      'Content-type': 'application/json'
    },
    body: JSON.stringify({
      title: title,
      content: content,
      person_in_charge: person_in_charge
    })
  }).then((res) => router.push('./tasks'))
}
</script>

<template>
  <v-sheet width="300" class="mx-auto">
    <v-form>
      <v-text-field
      label="タイトル"
      v-model="task.title"
      >
    </v-text-field>
      <v-text-field
      label="内容"
      v-model="task.content"
      >
      </v-text-field>
      <v-text-field
      label="担当者"
      v-model="task.person_in_charge"
      >
      </v-text-field>
      <TaskButton
      name="追加"
      block
      class="mt-2"
      @click="submit(task.title,task.content,task.person_in_charge)"
      />
    </v-form>
  </v-sheet>
</template>
