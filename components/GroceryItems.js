import { ref } from '../js/vue.js'

export default {

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
  },

  template: `
    <h1 class="title is-3"> Grocery Items </h1>
    <ol>
     <li v-for="grocery in groceryList">{{grocery.text}}</li>
    </ol>
    `
}

