<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP APP</title>
    <style>
        header {
            background: beige;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <h1><?=$greeting;?></h1>
    <p>Prova xivato = <?=dd($tasks)?></p>
    <div>
        <table>
            <thead>
            <tr>
                <th scope="col">
                    Id
                </th>
                <th scope="col">
                    Task Name
                </th>
                <th scope="col">
                    Description
                </th>
                <th scope="col">
                    Completed
                </th>
                <th scope="col">
                    <span>Edit</span>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($tasks as $task): ?>
            <tr>
                <td>
                        <?=$task->id;?>
                </td>
                <td>
                        <?=$task->name;?>
                </td>
                <td>
                        <?=$task->description;?>
                </td>
                <td>
                        <?=$task->completed;?>
                </td>
                <td>
                    <a href="#">Edit</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</header>
</body>
</html>