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
        "caption" => "this is my content, this content is realy long beacouse i want to trz it",
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
        "caption" => "this is my content, this content is realy long beacouse i want to trz it, and this one is longer than the previos version, if you do not think this is a good idea, than it is your problem.",
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
        "caption" => "this is my content, this content is realy long beacouse i want to trz it",
        "hashtags" => ["php", "html", "css", "js"],
        "user" => [
                "name" => "unga bunga",
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

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>instagram imitation</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="/style.css">
    </head>
<body>
<?php
foreach ($posts as $post) {
    ?>
    <div class="post">
        <div class="profile">
            <div>
                <img class="profile-picture" src="<?= $picture1 ?>" alt="">
                <a href=""><?= $post["user"]["name"] ?></a>
            </div>
            <button id="dots">...</button>
        </div>
        <img src="<?= $post['picture'] ?>" alt="">
        <div>
            <div class="icons-div">
                <div class="icons">
                    <i class="bi bi-heart"></i>
                    <i class="bi bi-chat"></i>
                    <i class="bi bi-send"></i>
                </div>
                <div>
                    <div class="bi bi-bookmark" id="bookmark"></div>
                </div>
            </div>
            <p class="likes">
                <button><?= $post3["likesNumber"] ?></button>
                To se mi líbí
            </p>
            <p class="caption">
                <span class="user-name">
                    <?= " " . $post["user"]["name"] ?>
                </span>
                <?php
                if (strlen($post["caption"]) < 135) { ?>
                    <?= $post["caption"] ?>
                <?php }
                else {
                    $lastSpace = strrpos((substr($post["caption"], 0, 135)), ' ');
                    echo substr($post["caption"], 0, $lastSpace) ?>
                    <button class="show-more">...</button>
                <?php } ?>
            </p>
            <button id="translate">Zobrazit překlad</button>
            <br>
            <button id="view">Zobrazit všech <?= count($post["comments"]) ?> komentářů</button>
        </div>
    </div>
    </body>
    </html>
<?php }