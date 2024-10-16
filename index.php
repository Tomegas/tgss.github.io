<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSGaleri</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
.comentar-wrapper {
            color: black;
        }
    </style>
<body>
    <header>
    <H1 class="Name">TSGallery</H1>
    <hr/>
    <nav class="Menu">
            <ul class="Menu">
                <li><a href="#home">UserBook</a></li>
                <li><a href="galery.php">Gallery</a></li>
                <li><a href="#services">MultiUpload</a></li>
            </ul>
    </nav>

    </header>
    <div class="container">
        <h1>Zanechte nám odezvu na naše fotky</h1>
        <form class="comment-form" action="submit.php" method="post">
            <label for="comment">Tvůj komentář:</label>
            <textarea id="comment" placeholder="Vložte váši reakci..." name="comment" rows="4" required></textarea>

            <button type="submit">Odeslat</button>
        </form>
        <div class="comentar-wrapper">
        <h2>Reakce</h2>
        <div class="nazor-list">
        <?php
            $filename = 'nazor.txt';
            if (file_exists($filename)) {
                $nazorData = file_get_contents($filename);
                $nazorArray = explode(';', $nazorData);
                foreach ($nazorArray as $comment) {
                    if (!empty(trim($comment))) {
                        echo "<p>" . htmlspecialchars(trim($comment)) . "</p>";
                    }
                }
            }
            ?>
        </div>
        </div>
    </div>

    


</body>
</html>