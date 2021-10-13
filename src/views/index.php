<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_index.css">
    <title>Document</title>
</head>
<body>

    <header class="header-style">
        <h1>Récits d'</h1>

        <p>Bienvenue sur ce site qui est un exercice proposé par la wild code school. <br>
            Vous avez toujours rêvé de créer votre histoire et de la publier ? <br>
            Alors vous êtes au bon endroit car en cliquant sur le bouton ci-dessous, 
            vous allez pouvoir réaliser votre rêve !</p>

        
        <button class="button-header">   <a href="create.php" class="link-button-header">Créer</a>  </button>

    </header>

    <div class="display-story">

            <?php foreach($stories as $story) : ?>
                <div class="content">
                    <p class="author"> Author : <?= $story['author'] ?> </p>
                    <p class="title"> Title : <?= $story['title'] ?> </p>
                    <p class="story"> <?= $story['content'] ?> </p>
                </div>
            <?php endforeach ?>
        
    </div>

</body>
</html>


