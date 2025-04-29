<?php

require_once 'physicalBooks.php';
require_once 'digitalBooks.php';

// $book = new Book('inheritance', 'JD Vance', 3000);

// print $book->printBookSummary();


$physicalBook = new PhysicalBooks('A Random Book', 'Boco', 2000, 234);

//  $digitalBook = new DigitalBooks ('The Redemption Gene', 'Kent', 2600, 1052);


// print $digitalBook->getTitle();
// echo "<br>";
// print $physicalBook->getTitle();
// echo "<br>";
// print $digitalBook->getPriceAsCurrency();
// echo "<br>";
print $physicalBook->printBookSummary();
// echo "<br>";

// print $digitalBook->print().PHP_EOL;