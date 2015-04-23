<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php foreach ($news as $item): ?>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><?php echo $item['title'] ?>
                    </h2>
                    <hr>
                    <!--<img class="img-responsive img-border img-left" src="/img/intro-pic.jpg" alt="">-->
                    <hr class="visible-xs">
                    <div style="align-content:center;"><p><a href="/news/<?php echo $item['slug'] ?>" ">View article</a></p></div>
                </div>
            </div>
        </div>
<?php endforeach ?>