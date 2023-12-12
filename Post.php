<!-- Post.php -->

<?php

class Post {
    private $postId;
    private $title;
    private $content;
    private $author;

    public function __construct($postId, $title, $content, $author) {
        $this->postId = $postId;
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    public function displayInfo() {
        echo "Post ID: $this->postId\n";
        echo "Title: $this->title\n";
        echo "Content: $this->content\n";
        echo "Author: " . $this->author->displayInfo() . "\n";
    }
}
