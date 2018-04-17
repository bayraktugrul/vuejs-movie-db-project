<?php
require_once("DB.php");
$db = new DB("localhost", "vuejs-db", "root", "root");
if ($_SERVER['REQUEST_METHOD'] == "GET") {

    //-- FILM SAYFASI --
    //Film sayfası için belli sayfadaki filmleri dönüyor. Default olarak 1. sayfadan döner.
    if(isset($_GET["getMovies"])) {
      $page = intval(@$_GET['pageNumber']);
      if(!$page) {
          $page =1;
      }
      $howFar = 2;     //her sayfada kaç film olacak
      $total_movies = count($db->query("SELECT * FROM Movies ORDER BY movie_imdb DESC"));
      $total_page = ceil($total_movies / $howFar);
      $where= ($page * $howFar) - $howFar;
      echo json_encode($db->query("SELECT * FROM Movies ORDER BY movie_imdb DESC LIMIT $where, $howFar"));
    }

    //Film sayfasındaki alt taraftaki paging özelliği için kaç page olduğu değerini dönüyor
    else if (isset($_GET['getTotalPageNumber'])) {
      $howFar = 2;     //her sayfada kaç film olacak
      $total_movies = count($db->query("SELECT * FROM Movies ORDER BY movie_imdb DESC"));
      $total_page = ceil($total_movies / $howFar);
      echo json_encode($total_page);
    }
    //----

    //--ANA SAYFA--
    //Ana sayfadaki son 5 haber gösterimi için SQL sorgusu
    else if (isset($_GET['getLast5News'])) {
        echo json_encode($db->query("SELECT N.news_title, N.news_photo, N.news_date FROM News N ORDER BY N.news_date DESC LIMIT 5"));
    }

    //--HABERLER SAYFASI--
    else if (isset($_GET['getTotalPageNumberNews'])) {
      $howFar = 5;     //her sayfada kaç film olacak
      $total_news = count($db->query("SELECT * FROM News ORDER BY news_date DESC"));
      $total_news_page = ceil($total_news / $howFar);
      echo json_encode($total_news_page);
    }
    else if(isset($_GET["getNews"])) {
      $page = intval(@$_GET['pageNumber']);
      if(!$page) {
          $page =1;
      }
      $howFar = 5;     //her sayfada kaç film olacak
      $where= ($page * $howFar) - $howFar;
      echo json_encode($db->query("SELECT * FROM News ORDER BY news_date DESC LIMIT $where, $howFar"));
    }

    //----



} else if ($_SERVER['REQUEST_METHOD'] == "POST") {





        echo "POST";


} else {
        http_response_code(405);
}
?>
