
    <section class="admin-content">
        <?php include "boxleft.php";?>

        <div class="admin-content-right">
            <div class="admin-content-right-product_add">
                <h1>Thêm Sản Phẩm</h1>
                <form action="" method="post">
                    <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
                    <input type="text" placeholder="Nhập thêm sản phẩm">
                    <label for="">Chọn danh mục<span style="color: red;">*</span></label>
                    <select name="" id="">
                        <option value="#">--Chọn--</option>
                    </select>
                    <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
                    <select name="" id="">
                        <option value="#">--Chọn--</option>
                    </select>
                    <label for="">Nhập giá sản phẩm<span style="color: red;">*</span></label>
                    <input type="text" placeholder="...">
                    <label for="">Nhập giá khuyến mại<span style="color: red;">*</span></label>
                    <input type="text" placeholder="...">
                    <label for="">Mô tả sản phẩm<span style="color: red;">*</span></label>
                    <textarea required name="product_desc" id="editor1" cols="30" rows="10" placeholder="Mô tả..."></textarea>
                    <label for="">Ảnh sản phẩm<span style="color: red;">*</span></label>
                    <input type="file">
                    <label for="">Ảnh mô tả<span style="color: red;">*</span></label>
                    <input multiple type="file">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
