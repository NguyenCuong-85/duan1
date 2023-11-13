<?php
function loadall_danhmuc()
{
    $sql = "SELECT * FROM `danhmucsanpham`";
    $danhsachdanhmuc = pdo_query($sql);
    return $danhsachdanhmuc;
}
function insert_danhmuc($tendanhmuc)
{
    $sql = "INSERT INTO `danhmucsanpham`(`tendanhmuc`) VALUES ('$tendanhmuc')";
    pdo_execute($sql);
}
