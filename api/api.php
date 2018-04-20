<?php
require_once("DB.php");
$db = new DB("localhost", "vuejs-db", "root", "root");

if(isset($_GET['action'])){
	$action = $_GET['action'];
}

if ($_SERVER['REQUEST_METHOD'] == "GET") {

    //-- FILM TUMU SAYFASI --
    //Film sayfası için belli sayfadaki filmleri dönüyor. Default olarak 1. sayfadan döner.
    if(isset($_GET["getMovies"])) {
      $page = intval(@$_GET['pageNumber']);
      if(!$page) {
          $page =1;
      }
      $howFar = 2;     //her sayfada kaç film olacak
      $total_movies = count($db->query("SELECT * FROM Scenes WHERE scene_type = 'movie' "));
      $total_page = ceil($total_movies / $howFar);
      $where= ($page * $howFar) - $howFar;
      echo json_encode($db->query("SELECT * FROM Scenes WHERE scene_type = 'movie' ORDER BY scene_rating DESC LIMIT $where, $howFar"));
    }

    //Film sayfasındaki alt taraftaki paging özelliği için kaç page olduğu değerini dönüyor
    else if (isset($_GET['getTotalPageNumber'])) {
      $howFar = 2;     //her sayfada kaç film olacak
      $total_movies = count($db->query("SELECT * FROM Scenes WHERE scene_type = 'movie' "));
      $total_page = ceil($total_movies / $howFar);
      echo json_encode($total_page);
    }
    //----

		//-- FILM KATEGORI SAYFASI--

		//Kategorilere göre filmleri çekme sorgusu. 3 tablo JOIN işlemi yapılıyor
		else if (isset($_GET['getMoviesByCategory'])) {
				$category = $_GET['getMoviesByCategory'];
				$page = intval(@$_GET['pageNumber']);
	      if(!$page) {
	          $page =1;
	      }
				$howFar = 2;     //her sayfada kaç film olacak
	      $total_movies = count($db->query("SELECT *
					 												   FROM Scenes S, Has_category H, Categories C
																     WHERE S.scene_id = H.scene_id AND
																		       C.category_id = H.category_id AND
																					 C.category_name = '$category' AND
																					 S.scene_type = 'movie' "));
				$total_page = ceil($total_movies / $howFar);
				$where= ($page * $howFar) - $howFar;
				echo json_encode($db->query("SELECT *
					 												   FROM Scenes S, Has_category H, Categories C
																     WHERE S.scene_id = H.scene_id AND
																		       C.category_id = H.category_id AND
																					 C.category_name = '$category' AND
																					 S.scene_type = 'movie'
																					 ORDER BY S.scene_rating DESC LIMIT $where, $howFar"));
		}
		else if (isset($_GET['getTotalPageNumberByCategory'])) {
			$category = $_GET['getTotalPageNumberByCategory'];
      $howFar = 2;     //her sayfada kaç film olacak
      $total_movies = count($db->query("SELECT *
																	 	  	FROM Scenes S, Has_category H, Categories C
																	 			WHERE S.scene_id = H.scene_id AND
																				 C.category_id = H.category_id AND
																				 C.category_name = '$category' AND
																				 S.scene_type = 'movie'  "));
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
    else if(isset($_GET["getMostViewed5NewsForMoviePage"])) {
      echo json_encode($db->query("SELECT N.news_title, N.news_photo, N.news_date FROM News N ORDER BY N.news_views DESC LIMIT 5"));

    }
    //----




} else if ($_SERVER['REQUEST_METHOD'] == "POST") {

      if($action == 'addNews'){
        $news_title = $_POST['news_title'];
        $news_description = $_POST['news_description'];
        $news_photo = $_POST['news_photo'];
        $result = $db->query("INSERT INTO `News` (`news_title`, `news_description`, `news_photo`) VALUES ('$news_title', '$news_description', '$news_photo') ");

          	if($result){
          	   echo json_encode("News added successfully");
          	} else{
          		 echo json_encode("Couldn't insert news");
          	}

          }

} else {
        http_response_code(405);
}
?>
