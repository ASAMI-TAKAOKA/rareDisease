/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from "vue";
import VueRouter from "vue-router";
import HeaderComponent from "./components/HeaderComponent";
import DiseaseArticleListComponent from "./components/DiseaseArticleListComponent";
import DiseaseArticleShowComponent from "./components/DiseaseArticleShowComponent";
import DiseaseArticleCreateComponent from "./components/DiseaseArticleCreateComponent";
import DiseaseArticleEditComponent from "./components/DiseaseArticleEditComponent";
require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            // ルートを指定
            path: '/',
            // 名前付きルートの設定
            name: 'disease.article.list',
            // コンポーネント名
            component: DiseaseArticleListComponent
        },
        {
            path: '/diseases/:diseaseId',
            name: 'disease.article.show',
            component: DiseaseArticleShowComponent,
            // 親コンポーネント（app.js）から子コンポーネントへprops経由で渡すため、オブジェクトのリンク設定に「props:true」を追加
            // propsでコンポーネントの再利用性が高まる。
            props: true
        },
        {
            path: '/articles/create',
            name: 'disease.article.create',
            component: DiseaseArticleCreateComponent
        },
        {
            path: '/articles/:diseaseId/edit',
            name: 'disease.article.edit',
            component: DiseaseArticleEditComponent,
            props: true
        },
    ]
});

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('header-component', HeaderComponent);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
