import { ref } from './../vue.dev.js'

export default {

  setup() {
  
      const reviewsList = ref([
      { id: 0, text: 'Review 1' },
      { id: 1, text: 'Review 2' },
      { id: 2, text: 'Review 3' },
      { id: 3, text: 'Review 4' },
      { id: 4, text: 'Review 5' }
    ])
    
    return {
    reviewsList
    }
    },
  
  template: `
  <h1 class="title is-3"> Review Items </h1>
  <ol>
   <li v-for="review in reviewsList">{{review.text}}</li>
  </ol>
  `
}

