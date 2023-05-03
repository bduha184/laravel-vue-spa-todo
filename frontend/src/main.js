import { createApp } from 'vue'
import App from './App.vue'
import router from './router/router'
import vuetify from './vuetify/vuetify'

const app = createApp(App)

app.use(router)
app.use(vuetify)

app.mount('#app')
