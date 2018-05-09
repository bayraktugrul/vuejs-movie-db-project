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

<b>Users</b> (user_id, user_name, user_mail, user_password, user_date, user_last_seen, user_photo, user_authority, user_gender, user_birthday)
Scenes (scene_id, scene_name,scene_description,scene_trailer,scene_photo,scene_rating,scene_country,scene_views,scene_seasons,scene_type)<br>
<b>Stars</b> (star_id, star_name, star_surname, star_birthday, star_photo)<br>
<b>Is_rolling</b> (star_id, scene_id, rolling_date)  --> star_id and scene_id are foreign keys<br>
<b>Directors</b> (director_id, director_name, director_surname, director_birthday, director_photo)<br>
<b>Directs</b> (director_id, scene_id)  --> director_id and scene_id are foreign keys<br>
<b><b>Authors</b> (author_id, author_name, author_surname, author_birthday, author_photo)<br>
<b>Writes</b> (author_id, scene_id)  --> author_id and scene_id are foreign keys<br>
<b>Companies</b> (company_id, company_name, company_logo)<br>
<b>Supports</b></b> (company_id, scene_id)  --> company_id and scene_id are foreign keys<br>
<b>Categories</b> (category_id, category_name)<br>
<b>Has_category</b> (category_id, scene_id)  --> category_id and scene_id are foreign keys<br>
<b>Comments</b> (comment_id, scene_id, user_id, comment_date, comment_description)  --> scene_id and user_id are foreign keys<br>
<b>Favorites</b> (favorites_id, scene_id, user_id)   --> scene_id and user_id are foreign keys<br>
<b>News</b> (news_id, news_title, news_description, news_views, news_photo, news_date)<br>
<b>About</b> (about_id, about_description)<br>
<b>Settings</b> (settings_id, settings_title, settings_desription, settings_keywords, settings_logo, settings_footer, settings_contact)<br>


This database follows all rules of BCNF. Because there are primary keys in each table. <br>
<b>1. Users:</b> user_id --->  user_name, user_mail, user_password, user_date, user_last_seen, user_photo, user_authority, user_gender, user_birthday. (user_id is a primary key, so there is an uniquely identifer)<br>
<b>2. Scenes:</b> scene_id ---> movies_series_id. (scene_id is a primary key, so there is an uniquely identifer)<br>
<b>3. Stars:</b> star_id ---> star_name, star_surname, star_birthday, star_photo. (star_id is a primary key, so there is an uniquely identifer)<br>
<b>4. Is_rolling:</b> star_id, scene_id ---> rolling_date. (star_id, scene_id are primary keys together, so there is an uniquely identifer)<br>
<b>5. Directors:</b> director_id ---> director_name, director_surname, director_birthday, director_photo. (director_id is a primary key, so there is an uniquely identifer)<br>
<b>6. Authors:</b> author_id ---> author_name, author_surname, author_birthday, author_photo. (author_id is a primary key, so there is an uniquely identifer)<br>
<b>7. Companies:</b> company_id ---> company_name, company_logo. (company_id is a primary key, so there is an uniquely identifer)<br>
<b>8. Categories:</b> category_id ---> category_name. (category_id is a primary key, so there is an uniquely identifer)<br>
<b>9. Comments: </b>comment_id ---> scene_id, user_id, comment_date, comment_description. (comment_id is a primary key, so there is an uniquely identifer)<br>
<b>10. Favorites:</b> favorites_id ---> scene_id, user_id. (favorites_id is a primary key, so there is an uniquely identifer)<br>
<b>11. News:</b> news_id ---> news_title, news_description, news_views, news_photo, news_date. (news_id is a primary key, so there is an uniquely identifer)<br>
<b>12. About:</b> about_id ---> about_description. (about_id is a primary key, so there is an uniquely identifer)<br>
<b>13. Settings:</b> settings_id ---> settings_title, settings_desription, settings_keywords, settings_logo, settings_footer, settings_contact. (settings_id is a primary key, so there is an uniquely identifer)<br>


¬	Every scene has at least one star. And also every star is rolling in at least one scene.

¬	Every scene has at least one category. But every category has some films.

¬	Every scene has at least one director. Every director must direct at least one scene.

¬	Every scene has at least one author. And also every author must write at least one scene.

¬	Every company must support at least one scene. Every scene must be supported at least one company.

¬	Every user has favorites and comments as many as they want. Every comment and favorite must belong to only one user.

¬	Every scene has some comments and favorites. Each comment and favorite must belong to only one scene.
<br>
<br>
![dbms_project](https://user-images.githubusercontent.com/16494485/39100137-cd6f4010-468d-11e8-8301-842ab5da4592.jpg)

<br>
<br>


![ekran resmi 2018-05-09 15 28 17](https://user-images.githubusercontent.com/16494485/39814698-0542be28-539e-11e8-963e-4fab996af470.png)


<br>
<br>
<br>

![ekran resmi 2018-05-09 15 28 36](https://user-images.githubusercontent.com/16494485/39814718-1d469f76-539e-11e8-806f-05a05a35281f.png)


<br>
<br>
<br>

![ekran resmi 2018-05-09 15 28 52](https://user-images.githubusercontent.com/16494485/39814738-30ba5ebc-539e-11e8-877e-8470e64b9c1a.png)


<br>
<br>
<br>

![ekran resmi 2018-05-09 15 29 10](https://user-images.githubusercontent.com/16494485/39814754-3d53868a-539e-11e8-8439-b4436318708d.png)

<br>
<br>
<br>

![ekran resmi 2018-05-09 15 29 59](https://user-images.githubusercontent.com/16494485/39814779-5359f5d6-539e-11e8-830f-ecec940133ff.png)

<br>







