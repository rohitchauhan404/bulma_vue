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
Hello Bulma and Vue!
-->

<script type="module">
import { createApp, ref } from './vue.js'
import GroceryItem from './GroceryItem.js'

createApp({
  components: {
    GroceryItem
  },
  setup() {
    const groceryList = ref([
      { id: 0, text: 'Vegetables' },
      { id: 1, text: 'Cheese' },
      { id: 2, text: 'Milk' },
      { id: 3, text: 'Bread' },
      { id: 4, text: 'Whatever else humans are supposed to eat' }
    ])

    return {
      groceryList
    }
  }
}).mount('#app')
</script>

<div id="app">
<h1 class="title is-1"> Hello Bulma and Vue! </h1>
<h1 class="title is-3"> Grocery Items </h1>
  <ol>
    <!--
      We are providing each grocery-item with the grocery object
      it's representing, so that its content can be dynamic.
      We also need to provide each component with a "key",
    -->
    <grocery-item
      v-for="item in groceryList"
      :grocery="item"
      :key="item.id"
    >
    </grocery-item>
  </ol>
</div>

</body>
</html>
