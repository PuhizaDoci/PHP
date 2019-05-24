<?php
class FileReader
{
  private $fileName;
  public function __construct($fileName)
  {
    $book_content = file_get_contents($fileName);

    $book_content_lowercase = strtolower($book_content);

    $individual_words = explode(' ', $book_content_lowercase);
    echo "There are about ".count($individual_words)." words in the book: ".substr($fileName, 0, -4).".\n";

    $word_frequency = array_count_values($individual_words);
    echo "Total number of unique words in the book are ".count($word_frequency).".\n";

    arsort($word_frequency);
    echo "The most used word in the book is: '".key($word_frequency)."'.\n";

  }
  public function getFileName()
  {
    return $this->fileName;
  }
  public function setFileName($fileName)
  {
    $this->fileName=$fileName;
  }
  public function __destruct(){
  echo "Destructed";


  }
}


 ?>
