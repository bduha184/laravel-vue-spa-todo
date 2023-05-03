import { createRouter, createWebHistory } from 'vue-router'
import TaskList from '../components/TaskList.vue'
import TaskShow from '../components/TaskShow.vue'
import TaskCreate from '../components/TaskCreate.vue'
import TaskEdit from '../components/TaskEdit.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/tasks',
      component: TaskList
    },
    {
      path: '/tasks/:taskId',
      component: TaskShow,
      props:true
    },
    {
      path: '/tasks/create',
      component: TaskCreate,
    },
    {
      path: '/tasks/:TaskId/edit',
      component: TaskEdit,
      props:true
    },
  ]
})

export default router
