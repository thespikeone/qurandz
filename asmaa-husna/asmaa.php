<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <?php require 'partials/_head.php'?>
</head>

<body>
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="page-loading">
                    <div class="page-loading-inner">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- notify bar -->
    <?php require 'partials/_notify.php'?>
    <!-- header -->
    <?php require 'partials/_header.php'?>
    <!-- main -->
    <main class="main">
        <?php require 'function/asmaa/get_asmaa.php' ?>
        <section class="section mt-90">
            <div class="container">
                <h2 class="color-brand-1 text-center mb-50">أسماء الله الحسنى</h2>
                <div class="row">
                <?php foreach ($asma as $asmaa) : ?>
                    <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                        <div class="card-member">
                            <div class="card-top">
                                <div class="card-info"><span class="font-lg-bold color-brand-1"><?= $asmaa["name"] ?></span>
                                </div>
                            </div>
                            <div class="card-bottom">
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
    <?php require 'partials/_footer.php'?>
    </script>
    <?php require 'partials/_script.php'?>
</body>

</html>