<?php
function loadall_loaisanpham()
{
    $sql = "SELECT loaisanpham.idloaisanpham,loaisanpham.tenloaisanpham,loaisanpham.giatiengoc,loaisanpham.giakhuyenmai,loaisanpham.motasanpham,loaisanpham.anhloaisanpham,danhmucsanpham.tendanhmuc 
    FROM loaisanpham JOIN danhmucsanpham 
    ON loaisanpham.iddanhmuc = danhmucsanpham.iddanhmuc;";
    $danhsachloaisanpham = pdo_query($sql);
    return $danhsachloaisanpham;
}

function insert_loaisanpham($iddanhmuc,$tenloaisanpham,$giatiengoc,$giakhuyenmai,$motasanpham,$anhloaisanpham)
{
    $sql = "INSERT INTO `loaisanpham`(`iddanhmuc`,`tenloaisanpham`, `giatiengoc`, `giakhuyenmai`, `motasanpham`, `anhloaisanpham`) 
    VALUES ('$iddanhmuc','$tenloaisanpham','$giatiengoc', '$giakhuyenmai', '$motasanpham', '$anhloaisanpham')";
    pdo_execute($sql);
}