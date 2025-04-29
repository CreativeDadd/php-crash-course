<?php
require_once 'books.php';

class DigitalBooks extends Book
{
    public $fileSize;

public function __construct(string $title, string $author, int $price, int $fileSize)
{
   parent::__construct( $title,  $author,  $price);
   $this->fileSize = $fileSize;
 }


public function getFileSize(): int{
    return $this->fileSize;
}

public function printBookSummary(): string{
    $bookSummary = "{$this->title}, Author: {$this->author}.  Filesize: {$this->fileSize} grams";
    return $bookSummary;
}

}

