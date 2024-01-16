<?php
$array4 = [
    ['name' => 'NGo Trong Liem  ', 'age' => 19],
    ['name' => 'NGo Trong Liem 1', 'age' => 20],
    [
            'name' => 'Ngo Trong Liem 2',
            'age' => 21,
            'points' => [
                    'web2' => 10,
                    'PHP2' => 9
            ]
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <th>name</th>
                <th>age</th>
                <th>points</th>
            </tr>
            <?php foreach($array4 as $item): ?>
            <tr>
                <td><?php echo $item['name']?></td>
                <td><?= $item['age']?></td>
                <td>
                    <?php if(isset($item['points'])): ?>
                        <ul>
                            <?php foreach($item['points'] as $subject => $point): ?>
                                
                                <li><?= $subject. ': ' . $point ?></li>
                                
                            <?php endforeach;?>
                        </ul>
                    <?php endif;?>
                </td>
            </tr>
            <?php endforeach;?>
        </table>
    </div>
</body>
</html>