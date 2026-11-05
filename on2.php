sanpham.php
100%
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $data = array(
        array("masp" => "SP1", "ten" => "San pham 1", "gia" => 100000, "hinh" => "sp11.jpg"),
        array("masp" => "SP2", "ten" => "San pham 2", "gia" => 200000, "hinh" => "sp21.jpg;sp22.jpg"),
        array("masp" => "SP3", "ten" => "San pham 3", "gia" => 300000, "hinh" => "sp31.jpg;sp32.jpg;sp33.jpg")
    );

    var_dump($data);
    ?>
    <table border="1"> 
        <tr>
            <th>STT</th>
            <th>Ma san pham</th>
            <th>Ten san pham</th>
            <th>Gia</th>
            <th>Hinh anh</th>
        </tr>
        <?php
        foreach ($data as $key => $value) {
            echo "<tr>";
            echo "<td>" . ($key + 1) . "</td>";
            echo "<td>" , $value["masp"] , "</td>";
            echo "<td>" . $value["ten"] . "</td>";
            echo "<td>" . $value["gia"] . "</td>";
            echo "<td>";
            $hinh = explode(";", $value["hinh"]);
            foreach ($hinh as $img) 
                echo "<img src='" . $img . "' width='100' height='100' />";
            echo "</td>";
            echo "</tr>";
        }
        ?>

    </table>
    </body>

</html>
Đang hiển thị sanpham.php.