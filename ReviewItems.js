export default {
  props: {
    reviews: Object
  },
  
  template: `
  <h1 class="title is-3"> Review Items </h1>
  <ol>
   <li v-for="review in reviews">{{review.text}}</li>
  </ol>
  `
}

