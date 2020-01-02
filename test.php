<?php
// Parameters
require('PHPExcel/IOFactory.php');
$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objPHPExcel = $objReader->load("Classeur1.xlsx");
$sheet = $objPHPExcel->getActiveSheet();
 
// Mysql database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "essai";
$table = "my_table";
 
// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
 
 
// Get list of database colmuns
$resultat = mysqli_query($link, "SHOW COLUMNS FROM ". $table ."");
$database_name_columns = array();
foreach($resultat as $row){
	$database_name_columns[] = $row["Field"];
}
 
 
// Get list of Excel columns
$excel_name_columns = array();
foreach($sheet->getRowIterator() as $row) {
	foreach($row->getCellIterator() as $key => $cell){
		if(1 == $row->getRowIndex ()) {
			$excel_name_columns[] = col_name($cell->getCalculatedValue());
		}
	}
}
// Add "id" field to list of Excel columns
$excel_name_columns_with_id = $excel_name_columns;
array_unshift($excel_name_columns_with_id, 'id' );
 
 
// Check lists
if($database_name_columns === $excel_name_columns_with_id){
	// echo 'Les deux listes sont identiques'; 
}
else{
	// echo 'Les listes ne sont pas identiques';
 
	//Delete tables
	if ( !empty($database_name_columns) ){
		$sql = "DROP TABLE ". $table ;
		if (!mysqli_query($link, $sql)) {
			echo "Error: " . mysqli_error($link);
		}	
	}
	//Create new tables
	$sql2 = "CREATE TABLE IF NOT EXISTS `". $table ."` (" . "\n";
	$sql2.= " `id` int(11) NOT NULL AUTO_INCREMENT," . "\n";
	foreach( $excel_name_columns as $excel_name_column ){
		$sql2.= " `". $excel_name_column ."` varchar(255) COLLATE utf8_unicode_ci NOT NULL," . "\n";	
	}
	$sql2.= ' PRIMARY KEY (`id`)' . "\n";
	$sql2.= ")\nENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;\n";
 
	if (!mysqli_query($link, $sql2)) {
		echo "Error: " . mysqli_error($link);
	}	
}


?>