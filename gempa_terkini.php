<?php
$url="https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.xml";
$gempa= new SimpleXMLElement ($url,null,true);
//echo "<pre>";print_r($gempa);

echo "<h2>INFO GEMPA</h2>";
$tmp="<table border='1'>
        <tr><td> TANGGAL </td>
        <td> JAM </td>
        <td> TANGGAL WAKTU </td>
        <td> KOORDINAT </td>
        <td> LINTANG </td>
        <td> BUJUR </td>
        <td> Magnitude </td>
        <td> KEDALAMAN </td>
        <td> WILAYAH </td>
        <td> DIRASAKAN </td>
        <tr>";

    for($i=0;$i<count($gempa->gempa);$i++) {
        $tmp.="
        <tr><td>{$gempa->gempa[$i]->Tanggal}</td>
        <td><b>{$gempa->gempa[$i]->Jam}</b></td>
        <td><b>{$gempa->gempa[$i]->DateTime}</b></td>
        <td><b>{$gempa->gempa[$i]->point->coordinates}</b></td>
        <td><b>{$gempa->gempa[$i]->Lintang}</b></td>
        <td><b>{$gempa->gempa[$i]->Bujur}</b></td>
        <td><b>{$gempa->gempa[$i]->Magnitude}</b></td>
        <td><b>{$gempa->gempa[$i]->Kedalaman}</b></td>
        <td><b>{$gempa->gempa[$i]->Wilayah}</b></td>
        <td><b>{$gempa->gempa[$i]->Dirasakan}</b></td>
        
        </tr>";
    }
    $tmp.="</table>"; 
    echo $tmp;
?>