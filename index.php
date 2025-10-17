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
    </head>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .post {
            display: flex;
            flex-direction: column;
            justify-self: center;
        }

        img {
            max-width: 500px;
        }

        button {
            background: none;
            border: none;
            font-weight: bold;
        }

        .profile {
            display: flex;
            align-content: center;
            justify-content: space-between;
            #dots {
                justify-content: end;
            }

            div {
                display: flex;
                gap: 10px;
                align-items: center;

                a {
                    text-decoration: none;
                    color: black;
                    font-weight: bold;
                }
            }
        }

        .profile-picture {
            max-width: 30px;
            max-height: 30px;
            min-height: 30px;
            min-width: 30px;
            border-radius: 25px;
        }
        .icons-div{
            display: flex;
            justify-content: space-between;
        }
        .icons {
            display: flex;
            gap: 15px;
        }

        #bookmark {
            justify-items: end;
        }
        #translate{
            font-size: 10px;
        }
        #view{
            color: gray;
            font-weight: normal;
        }
        div{
            gap: 15px;
        }
    </style>
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
        <img src="/photos/picture6.jpg" alt="">
        <div>
            <div class="icons-div">
                <div class="icons">
                    <div class="bi-heart"></div>
                    <div class="bi-chat"></div>
                    <div class="bi-share"></div>
                </div>
                <div>
                    <div class="bi-bookmark" id="bookmark"></div>
                </div>
            </div>
            <p>To se líbí
                <button><?= $post3["user"]["name"] ?></button>
                <button>dalším</button>
            </p>
            <p><?= $post["user"]["name"] . " " . $post["captions"] ?></p>
            <button id="translate">Zobrazit Překlad</button>
            <br>
            <button id="view">Zobrazit všech <?= count($post["comments"]) ?> komentářů</button>
        </div>
    </div>

    </body>
    </html>


<?php }