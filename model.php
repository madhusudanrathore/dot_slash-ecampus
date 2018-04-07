<?php
	require './dbconnection.php';

	class model{
	    private $conn;
	    function __construct(){
	        	$db = new dbconnection();
	        	$this->conn = $db->connect_to_db();
		}
		function register_user( $name_param, $email_param,$dept_param,$contact_param, $password_param ,$user_type_param,$parent_contact_param){
			/*MAKE A NEW ENTRY RECORD FOR USER*/
			$new_user_query = "INSERT INTO user_table (NAME, EMAIL,DEPARTMENT, CONTACT_NUMBER, PASSWORD, USER_TYPE, PARENT_CONTACT) VALUES ('$name_param', '$email_param','$dept_param', '$contact_param', '$password_param','$user_type_param','$parent_contact_param')";
			if ($this->conn->query($new_user_query) === TRUE) {
				    $_SESSION['user_email'] = $email_param;
				    $_SESSION['user_name'] = $name_param;
				    $_SESSION['user_type'] = $user_type_param;
				} else {
				    echo "Error: " . $new_user_query . " " . $conn->error;
				}
			
		}
		function login_user( $email_param, $password_param ){
			$login_query = "SELECT * FROM user_table WHERE EMAIL='$email_param'";
			$result = $this->conn->query($login_query);

			$row = $result->fetch_assoc();
			$user_entered_password = $password_param;
			$original_password = $row["PASSWORD"];
			$user_name = $row["NAME"];
			$user_type = $row["USER_TYPE"];
			
			if ($result->num_rows > 0) {
				if( $user_entered_password == $original_password ){
					$_SESSION['user_email'] = $email_param;
					$_SESSION['user_name'] = $user_name;
					$_SESSION['user_type'] = $user_type;
				}else{
					echo "INVALID LOGIN PASSWORD";
				}
			}
		}
		function get_main_page_blog_data( ){
			$get_data_query = "SELECT * FROM main_page_blog_table WHERE DEPARTMENT='GENERAL' ORDER BY PUBLISH_DATE DESC";
			$result = $this->conn->query($get_data_query);
			return $result;
		}

		function get_it_page_blog_data( ){
			$get_data_query = "SELECT * FROM main_page_blog_table WHERE DEPARTMENT='I.T.' AND NOTICE_CATEGORY='BLOG' ORDER BY PUBLISH_DATE DESC";
			$result = $this->conn->query($get_data_query);
			return $result;
		}

		function get_achievement_data( ){
			$get_data_query = "SELECT * FROM main_page_blog_table WHERE NOTICE_CATEGORY='ACHIEVEMENT' ORDER BY PUBLISH_DATE DESC";
			$result = $this->conn->query($get_data_query);
			return $result;
		}
		function new_blog( $email_param, $heading_param, $content_param, $department_type_param, $post_type_param ){
			$email = $email_param;
			$new_blog_query = "INSERT INTO main_page_blog_table ( DEPARTMENT, HEADING, DESCRIPTION, OWNER, NOTICE_CATEGORY ) VALUES ( '$department_type_param', '$heading_param', '$content_param', '$email', '$post_type_param' )";
			if ($this->conn->query($new_blog_query) === FALSE ) {  echo "Error: " . $new_blog_query . " " . $this->conn->error;  }
		}
		function log_out(){
			session_unset();
			session_destroy();
			mysqli_close($this->conn);
		}
		function lost_found_function( $email_param, $heading_param, $content_param, $type_param ){
			if( $type_param == "LOST" ){
				$heading_param = "LOST: " . $heading_param;
				$lost_query = "INSERT INTO lost_found_table ( HEADING, DESCRIPTION, FOUND_BY ) VALUES ('$heading_param', '$content_param', '$email_param' )";
				if ($this->conn->query($lost_query) === FALSE ) {  echo "Error: " . $lost_query . " " . $this->conn->error;  }
			}else if( $type_param == "FOUND" ){
				$heading_param = "FOUND: " . $heading_param;
				$found_query = "INSERT INTO lost_found_table ( HEADING, DESCRIPTION, FOUND_BY ) VALUES ('$heading_param', '$content_param', '$email_param' )";
				if ($this->conn->query($found_query) === FALSE ) {  echo "Error: " . $found_query . " " . $this->conn->error;  }
			}
		}
		function get_lost_found_page_data(){
			$get_data_query = "SELECT * FROM lost_found_table ORDER BY PUBLISH_DATE DESC";
			$result = $this->conn->query($get_data_query);
			return $result;
		}
		function new_query( $email_param, $heading_param, $content_param, $department_type_param,$img_param){
			$email = $email_param;
			$new_query_query = "INSERT INTO query_table ( DEPARTMENT, HEADING, DESCRIPTION, OWNER ,image) VALUES ( '$department_type_param', '$heading_param', '$content_param', '$email','$img_param' )";
			if ($this->conn->query($new_query_query) === FALSE ) {  echo "Error: " . $new_query_query . " " . $this->conn->error;  }
		}
		function get_query_data( ){
			$get_data_query = "SELECT * FROM query_table";
			$get_comments = "SELECT * FROM comments WHERE ";
			$result = $this->conn->query($get_data_query);
			return $result;
		}
		function new_comment( $qid_param,$content_param,$email_param){
			$email = $email_param;
			$new_query_query = "INSERT INTO comments (cid,CONTENT,OWNER) VALUES ( '$qid_param','$content_param','$email')";
			if ($this->conn->query($new_query_query) === FALSE ) {  echo "Error: " . $new_query_query . " " . $this->conn->error;  }
		}
		function get_comments($qid_param){
			$get_data_query = "SELECT * FROM comments WHERE cid='$qid_param'";
			$result = $this->conn->query($get_data_query);
			return $result;
		}
	}
?>
