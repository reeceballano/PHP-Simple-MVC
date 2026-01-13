<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>
</head>
<body>
    <form action="/search" method="POST">
        <input type="text" name="search" placeholder="Search todos.." />
        <button type="submit">Search</button>
    </form>

    <?= $data['message']; ?>
    <h1>Todos..</h1>
    <?php if(empty($data['todos'])) : ?>
        <h1>No todos!</h1>
    <?php else : ?>
        <ul>
        <?php foreach($data['todos'] as $todo) : ?>
           <li><?= $todo['title']; ?></li> 
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>


    <a href="/about">About</a>
</body>
</html>