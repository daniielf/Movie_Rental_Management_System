<?php
	include('Database/DAO/MovieDAO.php');
	
	class Model {
		private $movie_dao = null;
		
		public function __construct() {
			$this->movie_dao = new MovieDAO();
		}
		
		public function getAllMovies() {
			return $this->movie_dao->getAllMovies();
		}
	}
?>