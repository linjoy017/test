<?php
$systemName = '庫存管理系統';
$systemitem = '庫存維護';
$title = '庫存維護';
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
                    <legend>異動單據查詢(依單號/日期):</legend>
                    <div class="mb-3">
                        <!-- <label for="mat_number" class="form-label">品號:</label> -->
                        <input type="text" id="mat_number" class="form-control" placeholder="單號(可搭配萬用字元*使用)">
                    </div>
                    <div class="mb-3">
                        <!-- <label for="inv_date" class="form-label">日期:</label> -->
                        <input type="date" id="inv_date" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary" id="inv_mn">查詢</button>
                </fieldset>
            </form>
            <form action="">
                <fieldset>
                    <legend>異動單據新增:</legend>
                    <div class="mb-3">
                        <!-- <label for="inv_date" class="form-label">日期:</label> -->
                        <input type="date" id="inv_date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="text" id="mat_number" class="form-control" placeholder="單號">
                        <!-- <label for="mat_number" class="form-label">倉別:</label> -->
                        <select class="form-select" aria-label="Default select example">
                            <option selected>選擇倉別</option>
                            <option value="1">原料倉</option>
                            <option value="2">物料倉</option>
                            <option value="3">成品倉</option>
                            <option value="4">不良品倉</option>
                        </select>
                        <input type="text" id="mat_number" class="form-control" placeholder="品號">
                        <input type="text" id="mat_number" class="form-control" placeholder="數量">
                    </div>

        </div>
    </div>



    <?php include __DIR__ . '/parts/script.php'; ?>

    <?php include __DIR__ . '/parts/html-foot.php'; ?>