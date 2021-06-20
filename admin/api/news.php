<?php

	function create(){
		require '../db/connection.php';
		$title= $_POST['title'];
		$content= $_POST['content'];
		$is_pub= $_POST['is_published'];

		$query = $conn->query("INSERT INTO news VALUES ('', '$title', '$content', '$is_pub')");
	}

	function update(){
		require '../db/connection.php';
		$id= $_GET['id'];
		$title= $_POST['title'];
		$content= $_POST['content'];
		$is_pub= $_POST['is_published'];

		$query = $conn->query("UPDATE news SET title= '$title', content= '$content', is_published= '$is_pub' WHERE id= '$id'");
	}

	function delete(){
		require '../db/connection.php';
		$id = $_POST['id'];
		$hapus = $conn->query("DELETE FROM news WHERE id = '$id' ");
	}

 ?>