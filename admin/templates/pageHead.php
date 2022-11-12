<h2>Quản trị shop Smart</h2>
<p id="page-intro">Chào   <?php

    echo $_SESSION["fullname"];?></p>
<ul class="shortcut-buttons-set">
    <p id="page-intro">Ngày cập nhật: <?php echo date("d/m/Y") ?> </p>
    <li><a class="shortcut-button" href="them_san_pham.php"><span>
					<img src="public/layout/resources/images/icons/pencil_48.png" alt="icon" /><br />
					Thêm sản phẩm
				</span></a></li>

    <li><a class="shortcut-button" href="hoa_don.php"><span>
					<img src="public/layout/resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
					Hóa đơn
				</span></a></li>

    <li><a class="shortcut-button" href="#"><span>
					<img src="public/layout/resources/images/icons/image_add_48.png" alt="icon" /><br />
					Upload an Image
				</span></a></li>

    <li><a class="shortcut-button" href="#"><span>
					<img src="public/layout/resources/images/icons/clock_48.png" alt="icon" /><br />
					Add an Event
				</span></a></li>

    <li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="public/layout/resources/images/icons/comment_48.png" alt="icon" /><br />
					Open Modal
				</span></a></li>

</ul><!-- End .shortcut-buttons-set -->

