<div class="content">
    <?php
        $table = query_select("SELECT * FROM tintuc");
        $count = $table->rowCount();
        if ($count > 0) {
            foreach ($table as $row3) {
    ?>

    <p style="text-align: justify;"><?php echo $row3['Noidung'] ?></p>

    <?php
            }
        }
    ?>


    <!-- <p style="text-align: justify;">Bạn là một chàng trai hòa nhã, yêu cái đẹp. Bạn thích mùi hương
        mát lành của biển nhưng pha lẫn một chút dư vị nồng nàn, mặn mà trên da. Aqva Atlantiqve
        chắc chắn là hương thơm phù hợp cho bạn.</p>
    <p style="text-align: justify;">Aqva Atlantiqve mang một màu xanh rất khác so với “đàn anh” như
        Aqva Pour Homme hay Aqva Marine, màu xanh Atlantiqve mang hơi thở của đại dương bao la,
        tượng trưng cho hi vọng và sức sống căng tràn.</p>
    <p><img src="./assets/img/dt-1.jpg">Không chỉ có thiết kế
        bắt mắt mà hương thơm của nó rất “nịnh mũi”. Ngay từ note hương đầu tiên, Atlantiqve hút hồn
        người dùng bằng sự mát lành tươi mới của quả chanh vàng Sicili, cam bergamot Calabria hòa
        chút hương nước thanh khiết. Hương giữa vẫn mát rượi bởi hương nước biển nhưng pha thêm chút
        lôi cuốn của long diên hương. Điểm nhấn cuối tạo sự nam tính đầy mê hoặc đó chính là hương
        cuối nồng nàn, thu hút bởi sự góp mặt của các nốt hương như cây hoắc hương, gỗ đàn hương, cỏ
        hương bài, an tức hương.</p>
    <p>Dòng sản phẩm Aqva mới nhất này được xem là “em út” trong nhà và có ưu điểm vượt trội là mang
        tông mùi nam tính nhưng vô cùng dễ chịu, cùng thiết kế bắt mắt và độ lưu hương khá lâu. Chai
        nước hoa xứng đáng nằm trong bộ sưu tập của các chàng. Đặc biệt, Aqva Atlantiqve phù hợp
        dùng đi làm hàng ngày, dùng được cho tất cả các mùa trong năm.</p>
    <p><img src="./assets/img/dt-2.jpg"></p> -->
</div>