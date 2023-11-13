<section class="admin-content">
    <?php include "boxleft.php"; ?>
    <div class="admin-content-right">
        <div class="admin-content-right-cartegory_list">
            <h1>Danh sách danh mục</h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Tên Danh mục</th>
                    <th>Tùy biến</th>
                </tr>
                <?php foreach ($danhsachdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '
                    <tr>
                        <td>'.$iddanhmuc.'</td>
                        <td>'.$tendanhmuc.'</td>
                        <td><a href="">Sửa</a> | <a href="">Xóa</a></td>
                    </tr>
                        ';
                }
                ?>


            </table>
        </div>
    </div>
</section>