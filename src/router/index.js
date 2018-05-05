import Vue from 'vue'
import Router from 'vue-router'
import HomePage from '@/components/HomePage'
import MoviePage from '@/components/MoviePage/MoviePage'
import MovieCategoryPage from '@/components/MovieCategoryPage/MovieCategoryPage'
import SeriesPage from '@/components/SeriesPage/SeriesPage'
import SeriesCategoryPage from '@/components/SeriesCategoryPage/SeriesCategoryPage'
import NewsPage from '@/components/NewsPage/NewsPage'
import AboutPage from '@/components/AboutPage'
import UserLoginPage from '@/components/UserLoginPage'
import UserRegisterPage from '@/components/UserRegisterPage'
import AdminLoginPage from '@/components/AdminLoginPage'
import AdminPanelPage from '@/components/AdminPanel/AdminPanelPage'
import AddMoviePage from '@/components/AdminPanel/AddMoviePage'
import AddNewsPage from '@/components/AdminPanel/AddNewsPage'
import MovieDetailsPage from '@/components/MovieDetailsPage/MovieDetailsPage'
import SeriesDetailsPage from '@/components/SeriesDetailsPage/SeriesDetailsPage'
import AddSeriesPage from '@/components/AdminPanel/AddSeriesPage'
import OtherTablesPage from '@/components/AdminPanel/OtherTablesPage'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomePage },
    {
      path: '/filmler',
      name: 'filmler',
      component: MoviePage
    },
    {
      path: '/filmler/:film_kategorisi',
      name: 'filmKategori',
      component: MovieCategoryPage
    },
    {
      path: '/filmler/:film_id/:film_adi',
      name: 'filmSayfasi',
      component: MovieDetailsPage
    },
    {
      path: '/diziler',
      name: 'diziler',
      component: SeriesPage
    },
    {
      path: '/diziler/:dizi_kategorisi',
      name: 'diziKategori',
      component: SeriesCategoryPage
    },
    {
      path: '/diziler/:dizi_id/:dizi_adi',
      name: 'diziSayfasi',
      component: SeriesDetailsPage
    },
    {
      path: '/haberler',
      name: 'haberler',
      component: NewsPage
    },
    {
      path: '/hakkimizda',
      name: 'hakkimizda',
      component: AboutPage
    },
    {
      path: '/giris',
      name: 'giris',
      component: UserLoginPage
    },
    {
      path: '/kayitol',
      name: 'kayitol',
      component: UserRegisterPage
    },
    {
      path: '/admingiris',
      name: 'admingiris',
      component: AdminLoginPage
    },
    {
      path: '/admin',
      name: 'admin',
      component: AdminPanelPage
    },
    {
      path: '/filmekle',
      name: 'filmekle',
      component: AddMoviePage
    },
    {
      path: '/diziekle',
      name: 'diziekle',
      component: AddSeriesPage
    },
    {
      path: '/haberekle',
      name: 'haberekle',
      component: AddNewsPage
    },
    {
      path: '/digertablolar',
      name: 'digertablolar',
      component: OtherTablesPage
    }
  ]
})
