<?php

require_once 'books.php';
class PhysicalBooks extends Book{
        public $weight;

public function __construct(string $title, string $author, int $price, int $weight)
{
      parent::__construct($title, $author, $price);
    $this->weight = $weight;

}

public function getWeight(): int{
    return $this->weight;
}

public function printBookSummary(): string{
    $bookSummary = "{$this->title}, {$this->author}.  weight: {$this->getWeight()} grams";
    return $bookSummary;
}


}