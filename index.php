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

        // while (!feof($file)) {
        //     $arr_file   = fgets($file);
        //     $arrFile[]  = fgets($file);
    
        //     //explode 
        //     $exarrFile = explode('via', $arr_file);

        //     var_dump($exarrFile);
        // }

        // fclose($file);

        $file       = explode("via", file_get_contents("D:\Kuliah\Semester 4\Jaringan Komputer Praktikum\Tugas\UAS\mahasiswa\input\openvpn.log.0"));

        $result     = array();

        foreach ( $file as $content => $data ) {
            $result[] = array_filter(array_map("trim", explode("\n", $data)));

            // $final_data = array_filter(array_map("trim", explode("\n", $data)));
            
            // $result[$data]['date']   = $final_data[0];
            // $result[$data]['date']   = $final_data[1];
            // $result[$data]['date']   = $final_data[2];
            // $result[$data]['date']   = $final_data[3];
            // $result[$data]['date']   = $final_data[4];
            // $result[$data]['date']   = $final_data[5];
        }
        
        var_dump($result);
    ?> 
</body>
</html>