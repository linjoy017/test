<?php
$systemName = '庫存管理系統';
$systemitem = '品號維護';
$title = '品號維護';
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
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="" aria-current="page">品號查詢</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="">品號??</a>
                </li>
            </ul>
            <form class="row row-cols-lg-auto  align-items-center">
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                        <label class="form-check-label" for="inlineFormCheck">
                            Remember me
                        </label>
                    </div>
                </div>

                <div class="col-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>



        <?php include __DIR__ . '/parts/script.php'; ?>

        <?php include __DIR__ . '/parts/html-foot.php'; ?>