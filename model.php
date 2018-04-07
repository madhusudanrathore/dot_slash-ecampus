<?php
	require './dbconnection.php';
	class model{
	    private $conn;
	    function __construct(){
	        	$db = new dbconnection();
	        	$this->conn = $db->connect_to_db();
		}
		function register_user( $name_param, $email_param, $contact_param, $password_param ){
			/*MAKE A NEW ENTRY RECORD FOR USER*/
			$new_user_query = "INSERT INTO user_table (NAME, EMAIL, CONTACT_NUMBER, PASSWORD) VALUES ('$name_param', '$email_param', '$contact_param', '$password_param')";
			/*MAKE A NEW TABLE TO STORE USER'S BLOGS*/
			$new_usertable_query = "CREATE TABLE `$email_param` ( HEADING VARCHAR(50) , DESCRIPTION VARCHAR(500) NOT NULL, PUBLISH_DATE TIMESTAMP )";

			if ($this->conn->query($new_usertable_query) === TRUE) {
			    if ($this->conn->query($new_user_query) === TRUE) {
				    $_SESSION['user_email'] = $email_param;
				} else {
				    echo "Error: " . $new_user_query . " " . $conn->error;
				}
			} else {
			    echo "Error creating table: " . $this->conn->error;
			}
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
	}
?>
