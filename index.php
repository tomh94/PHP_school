<?php

$picture1 = "/photos/picture1.jpg";
$picture2 = "/photos/picture2.jpg";
$picture3 = "/photos/picture3.jpg";
$picture4 = "/photos/picture4.jpg";
$picture5 = "/photos/picture5.jpg";
$picture6 = "/photos/picture6.jpg";

$post1 = [
        "postID" => "1",
        "title" => "first post",
        "captions" => "this is my content, this content is realy long beacouse i want to trz it",
        "hashtags" => ["php", "html", "css", "js"],
        "user" => [
                "name" => "tomas",
                "picture" => $picture1,
        ],
        "likesNumber" => "50",
        "comments" => [
                "comment1" => [
                        "author" => "Pepa",
                        "authorPicture" => $picture2,
                        "content" => "I hate this",],
                "comment2" => [
                        "author" => "Franta",
                        "authorPicture" => $picture3,
                        "content" => "I do not like it also",],
                "comment3" => [
                        "author" => "tomas",
                        "authorPicture" => $picture1,
                        "content" => "thanks guys for support",
                ],
        ],
        "picture" => $picture4,
        "saves" => "1",
        "views" => "5608",
];
$post2 = [
        "postID" => "1",
        "title" => "first post",
        "captions" => "this is my content, this content is realy long beacouse i want to trz it",
        "hashtags" => ["php", "html", "css", "js"],
        "user" => [
                "name" => "tomas",
                "picture" => $picture1,
        ],
        "likesNumber" => "50",
        "comments" => [
                "comment1" => [
                        "author" => "Pepa",
                        "authorPicture" => $picture2,
                        "content" => "I hate this",],
                "comment2" => [
                        "author" => "Franta",
                        "authorPicture" => $picture3,
                        "content" => "I do not like it also",],
                "comment3" => [
                        "author" => "tomas",
                        "authorPicture" => $picture1,
                        "content" => "thanks guys for support",
                ],
        ],
        "picture" => $picture4,
        "saves" => "1",
        "views" => "5608",
];
$post3 = [
        "postID" => "1",
        "title" => "first post",
        "captions" => "this is my content, this content is realy long beacouse i want to trz it",
        "hashtags" => ["php", "html", "css", "js"],
        "user" => [
                "name" => "tomas",
                "picture" => $picture1,
        ],
        "likesNumber" => "50",
        "comments" => [
                "comment1" => [
                        "author" => "Pepa",
                        "authorPicture" => $picture2,
                        "content" => "I hate this",],
                "comment2" => [
                        "author" => "Franta",
                        "authorPicture" => $picture3,
                        "content" => "I do not like it also",],
                "comment3" => [
                        "author" => "tomas",
                        "authorPicture" => $picture1,
                        "content" => "thanks guys for support",
                ],
        ],
        "picture" => $picture4,
        "saves" => "1",
        "views" => "5608",
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