<template>
    <div class="container">
        <q-uploader url="http://localhost:8000/" :headers="token" @uploaded="onUpload"/>
    </div>
</template>

<script>
    import { QSpinner, QSpinnerHourglass, QUploader, Ripple } from 'quasar-framework'
    export default {
      name: 'example-component',
      data: () => ({
        token: {'X-CSRF-TOKEN': window.token.content}
      }),
      components: {
        QSpinner, QSpinnerHourglass, QUploader
      },
      directives: {
        Ripple
      },
      methods: {
        onUpload: function (file, xhr) {
          console.log(file)
          console.log(xhr)
        }
      },
      mounted() {
        console.log('Component mounted.')
      }
    }
</script>
