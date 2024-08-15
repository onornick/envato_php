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
    $books = [
        "The River and The Source",
        "Kifo Kisimani",
        "Rich Dad Poor Dad",
        "Shamba la Wanyama"

    ];?>

    <?php foreach($books as $book) : ?>
        <li> <?php echo "$book"; ?> </li>
    <?php endforeach ?>

</body>
</html>