PHP_BULMA_VUE

PHP, Bulma, Vue setup to serve your Vue application directly through a PHP enabled Apache Web Server without any build and bundle process.

The ESM production version of vue.js and minified bulma.css are included.

In https://vuejs.org/examples/ select 'Compostion API' and 'HTML' to run the code.

In your code use the statement,
import { createApp, ref } from './vue.js'

If your Component is named GroceryItem in GroceryItem.js then it should be named grocery-item in the HTML DOM template.

For you data-array, don't use _ or - like grocery_items or grocery-items, but use groceryList because JavaScript confuses them with an expression.
