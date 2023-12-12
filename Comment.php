<!-- Comment.php -->

<?php

class Comment {
    private $commentId;
    private $content;
    private $user;

    public function __construct($commentId, $content, $user) {
        $this->commentId = $commentId;
        $this->content = $content;
        $this->user = $user;
    }

    public function displayInfo() {
        echo "Comment ID: $this->commentId\n";
        echo "Content: $this->content\n";
        echo "User: " . $this->user->displayInfo() . "\n";
    }
}
