<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results: <?= $data['search']; ?></title>
</head>
<body>
    <?php if(empty($data['results'])) : ?>
        <h1>No todos!</h1>
    <?php else : ?>
        <ul>
        <?php foreach($data['results'] as $todo) : ?>
            <li>
                <?= $todo['title']; ?>
            </li>    
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>