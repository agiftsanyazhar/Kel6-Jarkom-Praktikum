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
        // // Membuka direktori
        // $dir        = opendir('D:\Kuliah\Semester 4\Jaringan Komputer Praktikum\Tugas\UAS\mahasiswa\input');

        // // Membuka file
        // $file       = fopen('D:\Kuliah\Semester 4\Jaringan Komputer Praktikum\Tugas\UAS\mahasiswa\input\openvpn.log.0','r') or die("Gagal membuka file!");

        $result     = array();
        $file       = explode("via", file_get_contents("D:\Kuliah\Semester 4\Jaringan Komputer Praktikum\Tugas\UAS\mahasiswa\input\openvpn.log.0"));

        foreach ( $file as $content ) {
            $result[] = array_filter(array_map("trim", explode("\n", $content)));
        }
        
        var_dump($result);

        // while (!feof($file)) {
        //     $arr_file   = fgets($file);
        //     $arrFile[]  = fgets($file);
    
        //     //explode 
        //     $exarrFile = explode('via', $arr_file);

        //     var_dump($exarrFile);
        // }

        // fclose($file);
    ?> 
</body>
</html>