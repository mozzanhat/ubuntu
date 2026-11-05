<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function loc() {
            document.forms[0].submit();
        }
    </script>
</head>
<body>
    <?php
        $duLieu = [
    "L1" => ["ten"=>"Loại 1","sp" => [["SP11","Sản phẩm 11", 1000, "h11.jpg"], ["SP12","Sản phẩm 12", 1000, "h12.jpg"]]],
    "L2" => ["ten"=>"Loại 2","sp" => [["SP21","Sản phẩm 21", 2000, "h21.jpg"], ["SP22","Sản phẩm 22", 2000, "h22.jpg"]]],
    "L3" => ["ten"=>"Loại 3","sp" => [["SP31","Sản phẩm 31", 3000, "h31.jpg"], ["SP32","Sản phẩm 32", 3000, "h32.jpg"]]]
];

    ?>
    <form action="" method="post">
        <select name="lst" id="lst" onchange="loc()">
            <option value="">Hay chon 1 gia tri</option>
            <?php
                foreach ($duLieu as $maLoai => $dong) {
                    if(isset($_POST['lst'])&&$_POST['lst']==$maLoai)
                        echo '<option value="',$maLoai,'" selected>',
                        $dong['ten'],'</option>';
                    else
                        echo '<option value="',$maLoai,'">',
                    $dong['ten'],'</option>';
                }
            ?>
        </select>
    </form>
    <table border="1">
        <tr>
            <th>Ma</th>
            <th>Ten</th>
            <th>Gia</th>
            <th>Hinh</th>
        </tr>
        <?php
        if(!isset($_POST['lst']) || $_POST['lst']=="")
        {
            foreach ($duLieu as $maLoai => $dong) {
                $dsSP1Loai=$dong['sp'];
                foreach ($dsSP1Loai as $thongTin1SP) {
                    echo '<tr>';
                    echo '<td>',$thongTin1SP[0],'</td>';
                    echo '<td>',$thongTin1SP[1],'</td>';
                    echo '<td>',$thongTin1SP[2],'</td>';
                    echo '<td><img src="',$thongTin1SP[3],'" /></td>';
                    echo '</tr>';
                }
            }
        }else{
            $dsSP1Loai=$duLieu[$_POST['lst']]['sp'];
                foreach ($dsSP1Loai as $thongTin1SP) {
                    echo '<tr>';
                    echo '<td>',$thongTin1SP[0],'</td>';
                    echo '<td>',$thongTin1SP[1],'</td>';
                    echo '<td>',$thongTin1SP[2],'</td>';
                    echo '<td><img src="',$thongTin1SP[3],'" /></td>';
                    echo '</tr>';
                }
        }
        ?>
    </table>
</body>
</html>