<?php
    $arr = [
        [
            'nama' => 'Chicago, IL',
            'Populasi' => '2,695,598',
        ],
        [
            'nama' => 'Dallas, TX',
            'Populasi' => '1,197,816',
        ],
        [
            'nama' => 'Houston, TX',
            'Populasi' => '2,100,263',
        ]
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Populasi</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Populasi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($arr as $kota): ?>
                <tr>
                    <td><?= $kota['nama'] ?></td>
                    <td><?= $kota['Populasi'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>