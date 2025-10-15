<?php

$post1 = [
        "postID" => "hello world",
        "title" => "Hello World!",
        "captions" => "this is my content",
        "hashtags" => ["php", "html", "css", "js"],
        "user" => [
                "name" => "tomas",
                "picture" => "this is my content",
        ],
        "likesNumber" => "50",
        "comments" => [
                "comment1" => [
                        "author" => "this is my content",
                        "authorPicture" => "this is my content",
                        "content" => "this is my content",],
                "comment2" => [
                        "author" => "this is my content",
                        "authorPicture" => "this is my content",
                        "content" => "this is my content",],
                "comment3" => [
                        "author" => "this is my content",
                        "authorPicture" => "this is my content",
                        "content" => "this is my content",
                ],
        ],
        "picture" => "this is my content",
        "saves" => "number",
        "views" => "number",
];
$post2 = [
        "postID" => "hello world",
        "title" => "Hello World!",
        "captions" => "this is my content",
        "hashtags" => ["php", "html", "css", "js"],
        "user" => [
                "name" => "tomas",
                "picture" => "this is my content",
        ],
        "likesNumber" => "50",
        "comments" => [
                "comment1" => [
                        "author" => "this is my content",
                        "authorPicture" => "this is my content",
                        "content" => "this is my content",],
                "comment2" => [
                        "author" => "this is my content",
                        "authorPicture" => "this is my content",
                        "content" => "this is my content",],
                "comment3" => [
                        "author" => "this is my content",
                        "authorPicture" => "this is my content",
                        "content" => "this is my content",
                ],
        ],
        "picture" => "this is my content",
        "saves" => "number",
        "views" => "number",
];
$post3 = [
        "postID" => "hello world",
        "title" => "Hello World!",
        "captions" => "this is my content",
        "hashtags" => ["php", "html", "css", "js"],
        "user" => [
                "name" => "tomas",
                "picture" => "this is my content",
        ],
        "likesNumber" => "50",
        "comments" => [
                "comment1" => [
                        "author" => "this is my content",
                        "authorPicture" => "this is my content",
                        "content" => "this is my content",],
                "comment2" => [
                        "author" => "this is my content",
                        "authorPicture" => "this is my content",
                        "content" => "this is my content",],
                "comment3" => [
                        "author" => "this is my content",
                        "authorPicture" => "this is my content",
                        "content" => "this is my content",
                ],
        ],
        "picture" => "this is my content",
        "saves" => "number",
        "views" => "number",
];


$posts = [$post1, $post2, $post3];

?>

<?php

foreach ($posts as $post) {
    ?>
    <div>
    <h2><?= $post["title"] ?> </h2>
    <p><?= $post["captions"] ?> </p>
    <p>Tags: <?= implode(", ", $post["hashtags"]) ?></p>
    <h3>Comments</h3>
    <?php
    foreach ($post["comments"] as $comment) {
        ?>
        <p><?= $comment["author"] ?> : <?= $comment["content"] ?> </p>
    <?php }
    ?>
<?php }