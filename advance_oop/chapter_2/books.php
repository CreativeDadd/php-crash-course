<?php
class Book{
    public $title;
    public $author;
    public $price;
   

public function __construct(string $title, string $author, int $price)
{
    $this->title = $title;
    $this->author = $author;
    $this->price = $price;
   

}

public function getTitle(): string{
    return $this->title;
}
public function getAuthor(): string{
    return $this->author;
}
public function getPrice(): int{
    return $this->price;
}

//create a string
public function getPriceAsCurrency(): string{
    return "$" . number_format($this->price/100, 2);
}

public function printBookSummary(): string{
    $bookSummary = "{$this->title}, Author: {$this->author}";
    return $bookSummary;
}


}