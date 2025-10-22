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
                "picture" => $picture6,
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
                "picture" => $picture3,
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
        "picture" => $picture2,
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
        "picture" => $picture5,
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
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
<?php
foreach ($posts

         as $post) {
    $commentsCase = rand(1, 3);
    ?>
    <div class="post">
        <div class="profile">
            <div>
                <img class="profile-picture" src="<?= $post["user"]['picture'] ?>" alt="">
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
                <?php } else {
                    $lastSpace = strrpos((substr($post["caption"], 0, 135)), ' ');
                    echo substr($post["caption"], 0, $lastSpace) ?>
                    <button class="show-more">...</button>
                <?php } ?>
            </p>
            <button id="translate">Zobrazit překlad</button>
            <br>
            <?php switch ($commentsCase) {
                case 1:
                    ?>
                    <button id="view">Zobrazit všech <?= count($post["comments"]) ?> komentářů</button>
                    <?php break;
                case 2:
                    ?>
                    <div class="comment">
                        <div class="comment-header">
                            <div class="comment-user">
                                <div class="avatar">
                                    <img src="<?= $post['comments']['comment1']['authorPicture'] ?>" alt=""></div>
                                <div class="user-info">
                                    <div class="username">
                                        <span><?= $post["comments"]["comment1"]["author"] ?></span>
                                        <span class="comment-text"><?= $post["comments"]["comment1"]["content"] ?></span>
                                    </div>
                                </div>
                            </div>
                            <button class="like-btn">
                                <i class="bi bi-heart"></i>
                            </button>
                        </div>
                        <div class="comment-meta">
                            <span>1 h</span>
                            <span>Odpovědět</span>
                        </div>
                    </div>
                    <?php break;
                case 3:
                    foreach ($post['comments'] as $comment) { ?>
                        <div class="comment">
                            <div class="comment-header">
                                <div class="comment-user">
                                    <div class="avatar">
                                        <img src="<?= $comment['authorPicture'] ?>" alt="">
                                    </div>
                                    <div class="user-info">
                                        <div class="username">
                                            <span><?= $comment['author'] ?></span>
                                            <span class="comment-text"><?= $comment['content'] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <button class="like-btn">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                            <div class="comment-meta">
                                <span>1 h</span>
                                <span>Odpovědět</span>
                            </div>
                        </div>
                    <?php }
                    break;
            } ?>
        </div>
    </div>
<?php } ?>

<div class="sidebar">
    <a href="#" class="logo">Instagram</a>
    <a href="#" class="menu-item">
        <i class="bi bi-house-door-fill"></i>
        <span class="menu-text">Domů</span>
    </a>
    <a href="#" class="menu-item">
        <i class="bi bi-search"></i>
        <span class="menu-text">Hledat</span>
    </a>
    <a href="#" class="menu-item">
        <i class="bi bi-compass"></i>
        <span class="menu-text">Objevujte</span>
    </a>
    <a href="#" class="menu-item">
        <i class="bi bi-camera-reels"></i>
        <span class="menu-text">Reels</span>
    </a>
    <a href="#" class="menu-item">
        <i class="bi bi-send"></i>
        <span class="menu-text">Zprávy</span>
    </a>
    <a href="#" class="menu-item">
        <i class="bi bi-heart"></i>
        <span class="menu-text">Upozornění</span>
    </a>
    <a href="#" class="menu-item">
        <i class="bi bi-plus-square"></i>
        <span class="menu-text">Vytvořit</span>
    </a>
    <a href="#" class="menu-item">
        <div><img class="profile-picture" src="/photos/picture6.jpg" alt=""></div>
        <span class="menu-text">Profil</span>
    </a>
</div>
</body>
</html>
