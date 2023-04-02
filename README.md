PHP_VUE
****************************************
PHP and Vue boilerplate to serve your Vue application directly through a PHP enabled Apache Web Server without any build and bundle process.

Put the folder in your Apache Web root and open http://localhost/php_vue

The ESM development version "vue.js" and and unminified "bulma.css" are included. On production you must replace them with their minified counterparts. 

If using Vite (see below), Vite will minifiy all the project files into the dist/ folder

In https://vuejs.org/examples/ select 'Composition API' and 'HTML' to view the code.

If your Component is named GroceryItems in GroceryItems.js then it should be named grocery-items in the HTML DOM template.

For you data-array, don't use _ or - like grocery_items or grocery-items, but use groceryList because JavaScript confuses them with an expression.

FOR DEVELOPMENT AND PRODUCTION USE VITE
****************************************
Install Vite with npm install

To run Vite development-server with Hot Module Replacement (this will update the browser on each code change)
npm run dev

To build your project into dist/ folder
npm run build

Now copy the index.html file and assets folder inside the dist/ folder, and place them inside your Apache root /var/www/html 

http://localhost
