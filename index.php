<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Meine Kommentarseite</title>
</head>
<body>
    <h1>Kommentarseite</h1>

    <form action="index.php" method="post">
        <label for="name">Dein Name:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <label for="comment">Dein Kommentar:</label>
        <textarea id="comment" name="comment" rows="5" required></textarea>
        <br>

        <input type="submit" value="Kommentar hinzufügen">
    </form>

    <h2>Kommentare:</h2>
    <div class="comments">
    <?php include "comments.php"; ?>
    </div>
</body>
</html>

