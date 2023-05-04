<script setup>
import { onMounted, ref } from 'vue'
import TaskButton from './TaskButton.vue'
import router from '../router/router'

const task = ref({})
const props = defineProps({
   taskId: String
})

function getTask(){
  fetch(`http://localhost:8000/api/tasks/${props.taskId}`)
  .then(res=>res.json())
  .then(data=>task.value = data)
}

function submit(title,content,person_in_charge){
  fetch(`http://localhost:8000/api/tasks/${props.taskId}`,{
    method:'PUT',
    headers:{
      "Content-type":"application/json"
    },
    body:JSON.stringify({
      title:title,
      content:content,
      person_in_charge:person_in_charge
    })
  })
  .then(res => router.push('/tasks'))
}

onMounted(()=>{
  getTask();
})
</script>

<template>
  <v-sheet width="300" class="mx-auto">
    <v-form>
      <v-text-field label="番号" v-model="task.id" readonly> </v-text-field>
      <v-text-field label="タイトル" v-model="task.title"></v-text-field>
      <v-text-field label="内容" v-model="task.content"></v-text-field>
      <v-text-field label="担当者" v-model="task.person_in_charge"></v-text-field>
      <TaskButton block name="保存" @click="submit(task.title, task.content, task.person_in_charge)" />
    </v-form>
  </v-sheet>
</template>
