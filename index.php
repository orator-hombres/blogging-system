<!-- index.php -->

<?php

require_once 'User.php';
require_once 'Post.php';
require_once 'Comment.php';

// Create users
$user1 = new User(1, 'Alice', 'alice@example.com');
$user2 = new User(2, 'Bob', 'bob@example.com');

// Create posts
$post1 = new Post(101, 'Introduction to PHP', 'PHP is a server-side scripting language.', $user1);
$post2 = new Post(102, 'PHP Advanced Topics', 'Exploring advanced features of PHP.', $user2);

// Create comments
$comment1 = new Comment(1001, 'Great post!', $user1);
$comment2 = new Comment(1002, 'I learned a lot.', $user2);

// Display information
echo "User Information:\n";
$user1->displayInfo();
echo "\n";
$user2->displayInfo();

echo "\nPost Information:\n";
$post1->displayInfo();
echo "\n";
$post2->displayInfo();

echo "\nComment Information:\n";
$comment1->displayInfo();
echo "\n";
$comment2->displayInfo();
