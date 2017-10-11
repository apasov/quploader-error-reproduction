import Quasar from 'quasar-framework'

console.clear()

require('quasar-framework/dist/quasar.mat.css')
require('quasar-framework/dist/quasar.ie.mat.css')
require('quasar-framework/dist/quasar.ie')

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

window.token = document.head.querySelector('meta[name="csrf-token"]')

if (window.token) {
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.token.content
} else {
  console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token')
}

window.Vue = require('vue')

Vue.use(Quasar)
