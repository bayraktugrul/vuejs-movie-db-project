# vue-database-project

> Movie DB Project

## Build Setup

``` bash
# install dependencies
npm install

# serve with hot reload at localhost:8080
npm run dev

# build for production with minification
npm run build

# build for production and view the bundle analyzer report
npm run build --report

# run unit tests
npm run unit

# run e2e tests
npm run e2e

# run all tests
npm test
```

For a detailed explanation on how things work, check out the [guide](http://vuejs-templates.github.io/webpack/) and [docs for vue-loader](http://vuejs.github.io/vue-loader).

## Project Title:
>  An online database of information related to films, television programs like
IMDB.com

## We have following entities and relations:

<b>Users</b> (user_id, user_name, user_mail, user_password, user_date, user_last_seen,
user_photo, user_authority, user_gender, user_birthday) <br>
<b>Scenes</b> (scene_id, movies_series_id) <br>
<b>Movies</b> (movie_id, movie_name, movie_description, movie_trailer, movie_photo,
movie_country, movie_views) <br>
<b>Series</b> (series_id, series_name, series_description, series_trailer, series_photo,
series_country, series_views, series_seasons, series_no_of_episodes) <br>
<b>Stars</b> (star_id, star_name, star_surname, star_birthday, star_photo) <br>
<b>Is_rolling</b> (star_id, scene_id, rolling_date) -- &gt; star_id and scene_id are foreign keys <br>
<b>Directors</b> (director_id, director_name, director_surname, director_birthday, director_photo) <br>
<b>Directs</b> (director_id, scene_id) -- &gt; director_id and scene_id are foreign keys <br>
<b>Authors</b> (author_id, author_name, author_surname, author_birthday, author_photo) <br>
<b>Writes</b> (author_id, scene_id) -- &gt; author_id and scene_id are foreign keys <br>
<b>Companies</b> (company_id, company_name, company_logo) <br>
<b>Supports</b> (company_id, scene_id) -- &gt; company_id and scene_id are foreign keys <br>
<b>Categories</b> (category_id, category_name) <br>
<b>Has_catagory</b> (category_id, scene_id) -- &gt; category_id and scene_id are foreign keys <br>
<b>Comments</b> (comment_id, scene_id, user_id, comment_date, comment_description) -- &gt; scene_id and
user_id are foreign keys <br>
<b>Favorites</b> (favorites_id, scene_id, user_id) -- &gt; scene_id and user_id are foreign keys <br>
<b>News</b> (news_id, news_title, news_description, news_views, news_photo, news_date) <br>
<b>About</b> (about_id, about_description) <br>
<b>Settings</b> (settings_id, settings_title, settings_desription, settings_keywords, settings_logo,
settings_footer, settings_contact) <br>

This database follows all rules of BCNF. Because there are primary keys in each table. <br>
1. Users: user_id -- -&gt; user_name, user_mail, user_password, user_date, user_last_seen,
user_photo, user_authority, user_gender, user_birthday. (user_id is a primary key, so there is an
uniquely identifer) <br>
2. Scenes: scene_id -- -&gt; movies_series_id. (scene_id is a primary key, so there is an uniquely
identifer) <br>
3. Movies: movie_id -- -&gt; movie_name, movie_description, movie_trailer, movie_photo,
movie_country, movie_views. (movie_id is a primary key, so there is an uniquely identifer) <br>
4. Stars: star_id -- -&gt; star_name, star_surname, star_birthday, star_photo. (star_id is a primary key,
so there is an uniquely identifer) <br>
5. Is_rolling: star_id, scene_id -- -&gt; rolling_date. (star_id, scene_id are primary keys together, so
there is an uniquely identifer) <br>
6. Directors: director_id -- -&gt; director_name, director_surname, director_birthday, director_photo.
(director_id is a primary key, so there is an uniquely identifer) <br>
7. Authors: author_id -- -&gt; author_name, author_surname, author_birthday, author_photo.
(author_id is a primary key, so there is an uniquely identifer) <br>
8. Companies: company_id -- -&gt; company_name, company_logo. (company_id is a primary key,
so there is an uniquely identifer) <br>
9. Categories: category_id -- -&gt; category_name. (category_id is a primary key, so there is an
uniquely identifer) <br>
10. Comments: comment_id -- -&gt; scene_id, user_id, comment_date, comment_description.
(comment_id is a primary key, so there is an uniquely identifer) <br>
11. Favorites: favorites_id -- -&gt; scene_id, user_id. (favorites_id is a primary key, so there is an
uniquely identifer) <br>
12. News: news_id -- -&gt; news_title, news_description, news_views, news_photo, news_date.
(news_id is a primary key, so there is an uniquely identifer) <br>
13. About: about_id -- -&gt; about_description. (about_id is a primary key, so there is an uniquely
identifer) <br>
14. Settings: settings_id -- -&gt; settings_title, settings_desription, settings_keywords, settings_logo,
settings_footer, settings_contact. (settings_id is a primary key, so there is an uniquely identifer) <br>
