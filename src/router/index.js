import Vue from 'vue'
import Router from 'vue-router'
import HomePage from '@/components/HomePage'
import MoviePage from '@/components/MoviePage'
import MovieCategoryPage from '@/components/MovieCategoryPage'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomePage },
    {
      path: '/movies',
      name: 'movies',
      component: MoviePage
    },
    {
      path: '/movies/:category_name',
      name: 'moviesCategory',
      component: MovieCategoryPage
    }
  ],
  mode: 'history'
})
