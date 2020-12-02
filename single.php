<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();
?>



<section class="section-content padding-y bg">
    <div class="container" bis_skin_checked="1">
        <!-- ============================ BreadCrumbs 1 ================================= -->
        <div class="card" bis_skin_checked="1">
            <div class="card-body d-flex align-items-center" bis_skin_checked="1">
                <nav class="flex-fill">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">
                                <?php the_category('span');?>
                            </a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?php the_title();?>
                        </li>
                    </ol>
                </nav> <!-- col.// -->
            </div>
        </div>

        <br><br>

        <!-- ============================ COMPONENT 1 ================================= -->
        <div class="card" bis_skin_checked="1">
            <div class="row no-gutters" bis_skin_checked="1">
                <aside class="col-md-6">
                    <article class="gallery-wrap">
                        <div class="img-big-wrap" bis_skin_checked="1">
                            <a href="#"><img src="bootstrap-ecommerce-html/images/items/12.jpg"></a>
                        </div> <!-- img-big-wrap.// -->
                    </article> <!-- gallery-wrap .end// -->
                </aside>
                <main class="col-md-6 border-left">
                    <article class="content-body">

                        <h2 class="title"><?php the_title();?></h2>


                        <div class="mb-3" bis_skin_checked="1">
                            <var class="price h4">$815.00</var>

                        </div>

                        <p>
                            <?php the_excerpt();?>
                        </p>

                        <hr>

                        <a href="#" class="btn  btn-primary"> Buy now </a>

                    </article> <!-- product-info-aside .// -->
                </main> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- card.// -->
        <!-- ============================ COMPONENT 1 END .// ================================= -->

    </div> <!-- container .//  -->
</section>


<!-- ========================= SECTION FEATURE ========================= -->
<section class="section-content padding-y-sm">
    <div class="container">
        <article class="card card-body">
            <div class="row">
                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary"><i class="fa fa-2x fa-truck"></i></span>
                        <figcaption class="pt-3">
                            <h5 class="title">Fast delivery</h5>
                            <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore </p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </div><!-- col // -->
                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary"><i class="fa fa-2x fa-landmark"></i></span>
                        <figcaption class="pt-3">
                            <h5 class="title">Creative Strategy</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </div><!-- col // -->
                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary"><i class="fa fa-2x fa-lock"></i></span>
                        <figcaption class="pt-3">
                            <h5 class="title">High secured </h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            </p>
                        </figcaption>
                    </figure> <!-- iconbox // -->
                </div> <!-- col // -->
            </div>
        </article>

    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION FEATURE END// ========================= -->





<?php get_footer();?>
