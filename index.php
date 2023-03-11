<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma and Vue!</title>
    <link rel="stylesheet" href="./bulma.css">  
  </head>
  <body>
  
<!--
Hello Bulma and Vue!!
-->

<script type="module">
import { createApp, ref } from './vue.js'

createApp({
  setup() {
    // A "ref" is a reactive data source that stores a value.
    // Technically, we don't need to wrap the string with ref()
    // in order to display it, but we will see in the next
    // example why it is needed if we ever intend to change
    // the value.
    const message = ref('Hello Bulma and Vue!')

    return {
      message
    }
  }
}).mount('#app')
</script>

<div id="app">
  <h1>{{ message }}</h1>
</div>

</body>
</html>
