<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "arbi";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

function tambah($nama, $umur, $kota)
{
    global $conn;
    $sql = "INSERT INTO user (name, age, city) VALUES ('$nama', '$umur', '$kota')";

    if (mysqli_query($conn, $sql)) {
        return "Sukses Tambah";
    } else {
        return mysqli_error($conn);
    }
}

function checker($string)
{
    $nama = "";
    $umur = "";
    $city = "";
    for ($i = 0; $i <= strlen($string) - 1; $i++) {

        if (is_numeric($string[$i])) {
            echo $string[$i];
            $nama = substr($string, 0, $i - 2);
            for ($j = $i; $j <= strlen($string); $j++) {
                if ($string[$j] == " ") {
                    $umur = substr($string, $i - 1, $j - 1);
                    if (substr($string, $j + 1, 3) == "TH " || substr($string, $j + 1, 3) == "th ") {
                        $j += 3;
                    } else if (substr($string, $j + 1, 4) == "THN " || substr($string, $j + 1, 4) == "thn ") {
                        $j += 4;
                    } else if (substr($string, $j + 1, 6) == "TAHUN " || substr($string, $j + 1, 6) == "tahun ") {
                        $j += 6;
                    }
                    $city = substr($string, $j + 1, strlen($string) - ($j + 1));
                    break;
                }
            }
        }
    }
    $umur = (int) $umur;
    tambah($nama, $umur, $city);
}

// 28 thn
