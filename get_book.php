<?php
		$dbh = new PDO('mysql:dbname=s91789yf_books; host=localhost','s91789yf_books', 'Minimon');

		$sth = $dbh->prepare("SELECT * FROM `test_book_list`");
		$sth->execute();
		$books = array();
		while($book = $sth->fetch(PDO::FETCH_ASSOC)){
		array_push($books, $book);
	}
	header('Content-type: application/json');
	echo json_encode($books);	