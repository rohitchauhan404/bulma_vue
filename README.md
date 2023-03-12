PHP_BULMA_VUE
****************************************
PHP, Bulma, Vue setup to serve your Vue application directly through a PHP enabled Apache Web Server without any build and bundle process.

Put the folder in your Apache Web root and open http://localhost/php_bulma_vue

The ESM development version vue.js and and unminified bulma.css are included.

In https://vuejs.org/examples/ select 'Composition API' and 'HTML' to run the code.

In your code use the statement,
import { createApp, ref } from './vue.js' or whatever the relative path for vue.js is.

If your Component is named GroceryItem in GroceryItem.js then it should be named grocery-item in the HTML DOM template.

For you data-array, don't use _ or - like grocery_items or grocery-items, but use groceryList because JavaScript confuses them with an expression.

FOR DEVELOPMENT AND PRODUCTION USE VITE
****************************************
Install Vite with npm install

To run Vite development-server with Hot Module Replacement, this will update the browser on each code change.
npm run dev

To build your project into dist/ folder
npm run build
