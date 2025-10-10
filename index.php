<?php

$post = [
    "title" => "hello world",
    "content" => "this is my content",
    "tags" => ["php", "html", "css", "js"],
    "comments" => [
        ["author" => "John Doe", "content" => "great post"],
        ["author" => "jane", "content" => "fame"],
    ],
];

$post2 = [
    "title" => "hello world",
    "content" => "this is my content",
    "tags" => ["php", "html", "css", "js"],
    "comments" => [
        ["author" => "John Doe", "content" => "great post"],
        ["author" => "jane", "content" => "fame"],
    ],
];
$post3 = [
    "title" => "hello world",
    "content" => "this is my content",
    "tags" => ["php", "html", "css", "js"],
    "comments" => [
        ["author" => "John Doe", "content" => "great post"],
        ["author" => "jane", "content" => "fame"],
    ],
];

$posts = [$post, $post2, $post3];

?>

<?php

foreach ($posts as $post) {
    ?>
    <div>
    <h2><?= $post["title"] ?> </h2>
    <p><?= $post["content"] ?> </p>
    <p>Tags: <?= implode(", ", $post["tags"]) ?></p>
    <h3>Comments</h3>
    <?php
    foreach ($post["comments"] as $comment) {
        ?>
        <p><?= $comment["author"] ?> : <?= $comment["content"] ?> </p>
    <?php }
    ?>
<?php }