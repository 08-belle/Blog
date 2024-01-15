<?php

// Post.php
class Post {
    private $title;
    private $content;
    private $author;
    private $date;

    public function __construct($title, $content, $author, $date) {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->date = $date;
    }

    // Getters and setters
    // ...
}
?>
