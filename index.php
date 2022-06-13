<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jarkom Praktikum</title>
</head>
<body>
    <?php
        // Membuka direktori
        $dir        = opendir('D:\Kuliah Online\Semester 4\JarKom\mahasiswa\input');

        // Membuka file
        $file       = fopen('D:\Kuliah Online\Semester 4\JarKom\mahasiswa\input\openvpn.log.0','r') or die("Gagal membuka file!");

        while (!feof($file)) 
        {
            // $arr_file   = fgets($file);
            $arrFile[]  = fgets($file);

        }

        // var_dump($arrFile);
        $index = 0;
        $arrFile_jlmh = count($arrFile);
        // $arrVirt = array(1000);
        // for($i=0;$i<=count($arrFile);$i++)
        for($i=0;$i<=10000;$i++)
        {
            if (strpos($arrFile[$i],"VIRT") !== false) {
                if($index === 0){
                    // createArrVirt($arrVirt, $arrFile, $index, $i);
                    $arrVirt[$index]=$arrFile[$i];
                    $arrVirt[$index]=substr($arrVirt[$index], strpos($arrVirt[$index], "V") + 6);
                    echo $arrVirt[$index]."<br />";
                    $index++;
                }
                $arrVirt_temp=substr($arrFile[$i], strpos($arrFile[$i], "V") + 6);
                $count = 0;
                for($j=0;$j<$index;$j++){
                    if($arrVirt_temp === $arrVirt[$j]){
                        $count++;
                    }
                }
                if($count === 0){
                    // createArrVirt($arrVirt, $arrFile, $index, $i);
                    $arrVirt[$index]=$arrVirt_temp;
                    echo $arrVirt[$index]."<br />";
                    $index++;
                }
                
            }
        }
        $arrVirt_jlmh = count($arrVirt);
        for($i=0;$i<$arrVirt_jlmh;$i++)
        {
            print_r(explode(" ",$arrVirt[$i]));
            echo "<br />";
        }

        // print_r($array[0][0]);

        fclose($file);

        function createArrVirt($arrVirt, $arrFile, $index, $i)
        {       
            // $arr=$arr2;
            // $arr=substr($arr, strpos($arr, "V") + 6);
            // echo $arr."<br />";
            // $index++;
            $arrVirt[$index]=$arrFile[$i];
            $arrVirt[$index]=substr($arrVirt[$index], strpos($arrVirt[$index], "V") + 6);
            echo $arrVirt[$index]."<br />";
            $index++;
        }
    ?> 
</body>
</html>