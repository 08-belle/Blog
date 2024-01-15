<?php

// Blog.php
class Blog {
    private $posts;

    public function __construct() {
        $this->posts = [];
    }

    public function addPost($post) {
        $this->posts[] = $post;
    }

    public function displayPosts() {
        echo "Blog Posts:\n";
        foreach ($this->posts as $post) {
            echo "Title: " . $post->getTitle() .
                 ", Author: " . $post->getAuthor()->getName() .
                 ", Date: " . $post->getDate() . "\n";
        }
    }

    // Other blog management methods
    // ...
}
?>
