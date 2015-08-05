<!--首页-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="zh-cn">
<?php $this->load->view('./templates/head'); ?>
<body>
<div class="wrapper">
    <?php $this->load->view('./templates/navbar'); ?>
    <?php $this->load->view('./templates/jumptron'); ?>

    <div class="container">
        <div class="row">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner carousel_style" role="listbox">
                    <?php for ($external_count = 0; $external_count < 3; $external_count++): ?>
                        <div class="item <?php if ($external_count == 0) {
                            echo "active";
                        } ?>">
                            <div class="col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1"></div>
                                    <?php $names = array('tom', 'jack', 'bobo', 'hahha', 'xx');
                                    $count = 0;
                                    ?>

                                    <?php foreach ($names as $name): ?>
                                        <?php $count++; ?>
                                        <div class="col-sm-2 col-md-2 col-lg-2 ">
                                            <div class="thumbnail">
                                                <img
                                                    src="<?php echo base_url('/assets/images/touxiang/' . $count . '.jpg'); ?>"
                                                    alt="...">

                                                <div class="caption">
                                                    <h4><?php echo $name ?></h4>

                                                    <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>


                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


            </div>

        </div>
    </div>
</div>
<?php $this->load->view('./templates/footer'); ?>
</body>


</html>