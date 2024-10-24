<?php
require "array.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Monitoringsasi SPM 2024</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome\css\font-awesome.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-10 mt-5">
            <div class="row">
                <?php
                $i = 0;
                $x = array('TKW','TIU','TKP');
                while($i<3){
                ?>
                <div class="col-lg-4">
                    <h4 class="text-center"><?= $x[$i];?></h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <?php
                        $b = array_column($a, $i+1);
                        $j = 0;
                        $r = array();
                        while($j<count($a)){
                            $r[$a[$j][0]] = $b[$j];
                            $j++;
                        }
                        arsort($r);
                        ?>
                        <tbody>
                        <?php
                        $o = 1;
                        foreach($r as $key => $value){
                            $j = 0;
                            $color = '';
                            while($j<count($a)){
                                if($a[$j][0]==$key){
                                    // $color = $a[$j][4];
                                    $color = $a[$j][4];
                                }
                                $j++;
                            }
                            if($i+1==1 && $value >= 65){
                                $value = "<b>".$value."</b>";
                            } else {
                                if($i+1==2 && $value >= 80){
                                    $value = "<b>".$value."</b>";
                                } else {
                                    if($i+1==3 && $value >= 166){
                                        $value = "<b>".$value."</b>";
                                    } else {
                                        $value;
                                    }
                                }
                            }
                            ?>
                            <tr>
                                <td class="text-center"><!-- <i class="<?= $color;?>"></i> --></td>
                                <td class="text-capitalize"><?= $key;?></td>
                                <td><?= $value;?></td>
                            </tr>
                            <?php
                        } ?>
                        </tbody>
                    </table>
                </div>
                <?php
                $i++; } ?>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>