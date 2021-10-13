<?php

function createStory(array $story) :void
{
    $pdo = new \PDO(DSN, USER, PASS);

    $query = 'INSERT INTO story(title, content, author) VALUES (:title, :content, :author)';
    $statement = $pdo->prepare($query);

    $statement->bindValue(':title', $story['title'], PDO::PARAM_STR);
    $statement->bindValue(':content', $story['content'], PDO::PARAM_STR);
    $statement->bindValue(':author', $story['author'], PDO::PARAM_STR);

    $success = $statement->execute(); // Execute a prepared request
}

function getAllStories(): array 
{
    $pdo = new \PDO(DSN, USER, PASS);

    $query = "SELECT * FROM story";
    $statement = $pdo->query($query);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}