<?php
	session_start();
	require './model.php';
	$m = new model();

	extract($_POST);
	if(isset($_POST['register_btn'])){/*IF REGISTER BUTTON IS CLICKED*/
		$name = $_POST['user_name'];
		$email = $_POST['user_email'];
		$dept = $_POST['user_dept'];
		$contact = $_POST['user_contact_number'];
		$password = $_POST['user_password'];
		$user_type = $_POST['user_type'];
		$parent_contact = $_POST['parent_contact_number'];

		$m->register_user( $name, $email,$dept, $contact, $password, $user_type,$parent_contact );
		header("location: ./index.php");
	}
	if(isset($_POST['log_in_btn'])){/*IF LOG IN BUTTON IS CLICKED*/
		$email = $_POST['user_email'];
		$password = $_POST['user_password'];
		$m->login_user( $email, $password );
		header("location: ./index.php");
	}
	if(isset($_POST['log_out_btn'])){/*IF LOGOUT BUTTON IS CLICKED*/
		$m->log_out();
		header("location: ./register.php");
	}
	if(isset($_POST['new_blog_btn'])){/*IF NEW BLOG BUTTON IS CLICKED*/
		$email = $_SESSION['user_email'];
		$heading = $_POST['blog_heading'];
		$content = $_POST['blog_content'];
		$department = $_POST['department_type'];
		$post = $_POST['post_type'];
		$m->new_blog( $email, $heading, $content, $department, $post );
		header("location: ./index.php");
	}
	if(isset($_POST['lost_item_btn'])){/*IF LOST ITEM BUTTON IS CLICKED*/
		$email = $_SESSION['user_email'];
		$heading = $_POST['lost_heading'];
		$content = $_POST['lost_content'];
		$type = "LOST";
		$m->lost_found_function( $email, $heading, $content, $type );
		header("location: ./lost_found.php");
	}
	if(isset($_POST['found_item_btn'])){/*IF LOST ITEM BUTTON IS CLICKED*/
		$email = $_SESSION['user_email'];
		$heading = $_POST['found_heading'];
		$content = $_POST['found_content'];
		$type = "FOUND";
		$m->lost_found_function( $email, $heading, $content, $type );
		header("location: ./lost_found.php");
	}
if(isset($_POST['new_query_btn'])){/*IF NEW QUERY BUTTON IS CLICKED*/
		$email = $_SESSION['user_email'];
		$heading = $_POST['query_heading'];
		$content = $_POST['query_content'];
		$department = $_POST['department_type'];
		$image_Arr=$_FILES["img"];

		move_uploaded_file($image_Arr['tmp_name'], 'img/'.$image_Arr['name']);
		$img=$image_Arr['name'];
		$m->new_query( $email, $heading, $content, $department,$img);
		header("location: ./department.php");
	}
	if(isset($_POST['new_comment_btn'])){/*IF NEW BLOG BUTTON IS CLICKED*/
		$qid = $_POST['comment_id'];
		$email = $_SESSION['user_email'];
		$content = $_POST['comment'];
		$m->new_comment($qid,$content,$email);
		header("location: ./department.php");
	}

?>
