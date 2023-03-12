import { ref } from '../js/vue.js'

export default {

  setup() {

    const stationeryList = ref([
      { id: 0, text: 'Pen' },
      { id: 1, text: 'Pencil' },
      { id: 2, text: 'Sharpener' },
      { id: 3, text: 'Eraser' },
      { id: 4, text: 'Whatever else humans are supposed to write with' }
    ])

    return {
      stationeryList
    }
  },

  template: `
    <h1 class="title is-3"> Stationery Items </h1>
    <ol>
     <li v-for="stationery in stationeryList">{{stationery.text}}</li>
    </ol>
    `
}

