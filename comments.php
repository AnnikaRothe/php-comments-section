<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $comment = $_POST["comment"];
    
    if (!empty($name) && !empty($comment)) {
        $commentText = "$name sagt: $comment\n";
        file_put_contents("comments.txt", $commentText, FILE_APPEND);
        header("Location: index.php"); 
    }
}

if (file_exists("comments.txt")) {
    $comments = file("comments.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    if (!empty($comments)) {
        echo "<ul>";
        foreach (array_reverse($comments) as $comment) {
            echo "<li>" . htmlentities($comment) . "</li>";
        }
        echo "</ul>";
    }
}
?>

