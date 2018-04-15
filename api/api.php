<?php
require_once("DB.php");
$db = new DB("localhost", "vuejs-db", "root", "root");
if ($_SERVER['REQUEST_METHOD'] == "GET") {

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
    else if (isset($_GET['getTotalPageNumber'])) {
      $howFar = 2;     //her sayfada kaç film olacak
      $total_movies = count($db->query("SELECT * FROM Movies ORDER BY movie_imdb DESC"));
      $total_page = ceil($total_movies / $howFar);
      echo json_encode($total_page);
    }



} else if ($_SERVER['REQUEST_METHOD'] == "POST") {





        echo "POST";


} else {
        http_response_code(405);
}
?>
