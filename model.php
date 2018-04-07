<?php
	require './dbconnection.php';

	class model{
	    private $conn;
	    function __construct(){
	        	$db = new dbconnection();
	        	$this->conn = $db->connect_to_db();
		}

		function get_main_page_blog_data( ){
			$get_data_query = "SELECT * FROM main_page_blog_table ORDER BY PUBLISH_DATE DESC";
			$result = $this->conn->query($get_data_query);
			return $result;
		}

		function get_achievement_data( ){
			$get_data_query = "SELECT * FROM main_page_blog_table ORDER BY PUBLISH_DATE DESC WHERE NOTICE_CATEGORY='ACHIEVEMENT'";
			$result = $this->conn->query($get_data_query);
			return $result;
		}

		function log_out(){
			session_unset();
			session_destroy();
			mysqli_close($this->conn);
		}
	}
?>