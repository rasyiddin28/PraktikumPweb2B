<!-- 1. Membuat variable matriks -->
<?php
    $arr = [
        ["kota"=>"Chicago,IL", "populasi" => 2695598],
        ["kota"=>"Dallas, TX", "populasi" => 1197816],
        ["kota"=>"Houston, TX", "populasi" => 2100263],
        ["kota"=>"Los Angeles, CA", "populasi" => 3792621],
        ["kota"=>"New York, NY", "populasi" => 8175133],
        ["kota"=>"Philadelphia,PA", "populasi" => 1526006],
        ["kota"=>"Phoenix, AZ", "populasi" => 1445632],
        ["kota"=>"San Antonio, TX", "populasi" => 1327407],
        ["kota"=>"San Diego, CA", "populasi" => 1307402],
        ["kota"=>"San Jose, CA", "populasi" => 945942]
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quiz 1</title>
        <style> 
            .header{
                background-color: #BADFF8;
            }
        </style>
    </head>
    <body>
        <!-- 2. Urutkan Data -->
        <?php
            function sort_arr($arr,$subkey) {
                foreach($arr as $k=>$v) {
                    $b[$k] = $v[$subkey];
                }
                asort($b);
                foreach($b as $key=>$val) {
                    $c[] = $arr[$key];
                }
                return $c;
            }

            $sort = sort_arr($arr,'populasi');
        ?>

        <!-- 3. Menampilkan data diatas 1.500.000 -->
        <h1 align="center"> Tampilkan matriks yang telah diurutkan dalam bentuk tabel HTML hanya untuk wilayah yang memiliki populasi diatas 1,500,000. </h1>
        <table border="2" cellpadding="5" cellspacing="0" align="center">
            <th class="header"> Nama</th>
            <th class="header"> Populasi</th>
    
        <?php 
            foreach ($sort as $d): 
                if ($d["populasi"] >= 1500000):  
        ?>
            <tr>
            <td><?php echo $d["kota"]; ?> </td>
            <td><?php echo number_format($d["populasi"]); ?> </td>
            </tr>
        <?php 
            endif;
            endforeach; 
            ?>
        </table>


    </body>
</html>