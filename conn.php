<?php
	$servername = "localhost";
	$database = "depi_test";
	$username = "root";
	$password = "";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully <br><br>";
	

	// Insert
	$query = "INSERT INTO instituciones (nombre) VALUES ('Instituto Tecnologico de Zamora');";
	//$sql = mysqli_query($conn, $query);

	// Select
	$query = "SELECT * FROM tesis;";
	//$sql = mysqli_query($conn, $query);

	/*
	echo "Tesis \t Titulo <br>";

	while($row = mysqli_fetch_array($sql)){
		echo $row['idTesis'] ."\t". $row['titulo'] . "<br>";
	}
	*/

	// Update
	$query = "UPDATE instituciones SET nombre = 'hola' WHERE idIns = '1';";
	//$sql = mysqli_query($conn, $query);

	// Delete
	$query = "DELETE FROM instituciones WHERE nombre RLIKE 'Zamora';";
	//$sql = mysqli_query($conn, $query);