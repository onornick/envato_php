<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP from Laracast</title>
</head>
<body>
    <h1>Recommended books</h1>
    <?php 
    $books = array(
        [
            'name' => 'The River abnd The Source',
            'author' => 'Mary Akoth',
            'releaseYear' => 2013,
            'purchaseUrl' => 'https://rats.co.ke'
        ],
        [
            'name' => 'The River abnd The Source Vol. 2',
            'author' => 'Mariah Akoth',
            'releaseYear' => 2011,
            'purchaseUrl' => 'https://ratsvol2.co.ke'
        ]
    );?>

    <?php function filterByAuthor($books, $author) {
        $dict = [];
        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $dict[] = $book;
            }
        }
        return $dict;
    }
    ?>

    <?php foreach(filterByAuthor($books, 'Mary Akoth') as $book) : ?>
        <p>The book, <?=$book['name']?>, was written by <?=$book["author"]?> in the year <?= $book['releaseYear']?>. You can purchase it from <a href="<?php $book['purchaseUrl']?>">Here</a></p>
    <?php endforeach?>

</body>
</html>