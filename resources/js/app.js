/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { data } = require('jquery');

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
      name: '-',
      type: '-',
      base: '-',
      toppings: [false,false,false,false],
      price: 0
    },
    computed: {
      calcPrice() {
        switch(this.type) {
          case 'Margarita':
            this.price = 5
            break
          case 'Hawaiian':
            this.price = 7
            break
          case 'Veg supreme':
            this.price = 6
            break
          case 'Volcano':
            this.price = 9
            break
          default:
            break
        }
        if (this.type !== '-') {
          switch(this.base) {
            case 'cheesy crust':
              this.price += 2
              break
            case 'garlic crust':
              this.price += 1
              break
            default:
              break
          }
        }
        this.toppings.forEach(t => {
          t == true ? this.price+=1 : null
        })
        return this.price
      }
    }
});
