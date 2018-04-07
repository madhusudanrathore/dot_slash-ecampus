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
			$get_data_query = "SELECT * FROM main_page_blog_table WHERE NOTICE_CATEGORY='ACHIEVEMENT' ORDER BY PUBLISH_DATE DESC";
			$result = $this->conn->query($get_data_query);
			return $result;
		}
		function log_out(){
			session_unset();
			session_destroy();
			mysqli_close($this->conn);
		}
		function login_user( $email_param, $password_param ){
			$login_query = "SELECT * FROM user_table WHERE EMAIL='$email_param'";
			$result = $this->conn->query($login_query);

			$row = $result->fetch_assoc();
			$user_entered_password = $password_param;
			$original_password = $row["PASSWORD"];

			if ($result->num_rows > 0) {
				if( $user_entered_password == $original_password ){
					$_SESSION['user_email'] = $email_param;
				}else{
					echo "INVALID LOGIN PASSWORD";
				}
			}
		}
	}
?>
