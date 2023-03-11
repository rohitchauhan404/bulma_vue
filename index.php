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
import StationeryItem from './StationeryItem.js'
import ReviewItems from './ReviewItems.js';

createApp({
  components: {
    GroceryItem,
    StationeryItem,
    ReviewItems
  },
  
  setup() {
  
    const groceryList = ref([
      { id: 0, text: 'Vegetables' },
      { id: 1, text: 'Cheese' },
      { id: 2, text: 'Milk' },
      { id: 3, text: 'Bread' },
      { id: 4, text: 'Whatever else humans are supposed to eat' }
    ])
      
    const stationeryList = ref([
      { id: 0, text: 'Pen' },
      { id: 1, text: 'Pencil' },
      { id: 2, text: 'Sharpener' },
      { id: 3, text: 'Eraser' },
      { id: 4, text: 'Whatever else humans are supposed to write with' }
    ])
    
    const reviewsList = ref([
      { id: 0, text: 'Review 1' },
      { id: 1, text: 'Review 2' },
      { id: 2, text: 'Review 3' },
      { id: 3, text: 'Review 4' },
      { id: 4, text: 'Review 5' }
    ])

    return {
      groceryList, stationeryList, reviewsList
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
  
  <br />
  
  <h1 class="title is-3"> Stationery Items </h1>
  <ol>
    <!--
      We are providing each stationery-item with the stationery object
      it's representing, so that its content can be dynamic.
      We also need to provide each component with a "key",
    -->
    <stationery-item
      v-for="item in stationeryList"
      :stationery="item"
      :key="item.id"
    >
    </stationery-item>
    
  </ol>
  
  <br />
  
  <review-items :reviews="reviewsList"></review-items>
  
</div>

</body>
</html>
