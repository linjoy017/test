<?php
$systemName = '庫存管理系統';
$systemitem = '庫存查詢';
$title = '庫存查詢';
$pageName = 'home';
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>

<?php include __DIR__ . '/parts/banner.php'; ?>



<div class="container-fluid">
    <div class="row">
        
        <!-- 左側選單欄 -->
        <div class="col-12 col-md-2">
            <?php include __DIR__ . '/parts/aside.php'; ?>
        </div>
        
        <!-- 主要內容區 -->
        <div class="col-12 col-md-10">

        <?php include __DIR__ . '/parts/breadcrumb.php'; ?>

            <!-- <h2>首頁</h2> -->
            <form>
                <fieldset>
                    <legend>依品號查詢:</legend>
                    <div class="mb-3">
                        <!-- <label for="mat_number" class="form-label">品號:</label> -->
                        <input type="text" id="mat_number" class="form-control" placeholder="品號(可搭配萬用字元*使用)">
                    </div>
                    <div class="mb-3">
                        <!-- <label for="inv_date" class="form-label">日期:</label> -->
                        <input type="date" id="inv_date" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary" id="inv_mn">查詢</button>
                </fieldset>
            </form>
        </div>

    </div>
</div>



<?php include __DIR__ . '/parts/script.php'; ?>

<?php include __DIR__ . '/parts/html-foot.php'; ?>