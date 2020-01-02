<?php
// Parameters
require('PHPExcel/IOFactory.php');
$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objPHPExcel = $objReader->load("Classeur1.xlsx");
$sheet = $objPHPExcel->getActiveSheet();
 
$sheet = $objPHPExcel->getSheet(0);
 
echo '<table border="1">';
 
// On boucle sur les lignes
foreach($sheet->getRowIterator() as $row) {
 
   echo '<tr>';
 
   // On boucle sur les cellule de la ligne
   foreach ($row->getCellIterator() as $cell) {
      echo '<td>';
      print_r($cell->getValue());
      echo '</td>';
   }
 
   echo '</tr>';
}

?>