<?php
include_once('template/header.php');
include_once('data/posts.php');
include_once('data/categories.php');
var_dump($_GET);
if (isset($_GET['id'])){
    $postId = intval($_GET['id']);

    foreach ($posts as $post){
        if ($post['id'] === $postId){
            $currentPostId = $post;
        }
    }
}
?>

<h1><?= $currentPostId['title'] ?></h1>

<?php
include_once('template/footer.php')
?>
