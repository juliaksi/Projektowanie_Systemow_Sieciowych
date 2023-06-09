<?php $__env->startSection('content'); ?>
    <body>
    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c3Vuc2V0JTIweW9nYXxlbnwwfHwwfHw%3D&w=1000&q=80" class="responsive" width="100%" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Yoga</h1>
                            <p>Juz dzisiaj odkryj wszystkie zalety praktyki</p>
                            <p><a class="btn btn-lg btn-primary" href="/jogainfo" role="button">Dowiedz sie wiecej</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="https://img.freepik.com/premium-photo/new-year-2020-calendar-pink-background_136498-160.jpg?w=2000" class="responsive" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Zobacz grafik</h1>
                            <p>Czyli kiedy możesz popraktyowac</p>
                            <p><a class="btn btn-lg btn-primary" href="/grafik" role="button">Zobacz</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="https://wallpaperaccess.com/full/1642690.jpg"  class="responsive" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>O naszej szkole</h1>
                            <p>Dowiedz sie więcej</p>
                            <p><a class="btn btn-lg btn-primary" href="/szkolainfo" role="button">Przeczytaj</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>







        </div><!-- /.container -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </main>
    </body>
<?php $__env->stopSection(); ?>

<style>
    /* GLOBAL STYLES
-------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
        padding-top: 0;
        padding-bottom: 0;
        color: #5a5a5a;
    }


    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
        margin-bottom: 0;
    }
    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
        bottom: 3rem;
        z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
        height: 32rem;
        background-color: #777;
    }
    .carousel-item > img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 52rem;
    }


    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
    }
    .marketing h2 {
        font-weight: 400;
    }
    .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
        margin: 5rem 0; /* Space out the Bootstrap <hr> more */
    }

    /* Thin out the marketing headings */
    .featurette-heading {
        font-weight: 300;
        line-height: 1;
        letter-spacing: -.05rem;
    }


    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (min-width: 40em) {
        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .featurette-heading {
            font-size: 50px;
        }
    }

    @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 7rem;
        }
    }
    /*********footer*******************/
    . kilimanjaro_area {
        position: relative;
        z-index: 1;
    }
    .foo_top_header_one {
        background-color: #15151e;
        color: #fff;
    }
    .section_padding_100_70 {
        padding-top: 100px;
        padding-bottom: 70px;
    }
    .foo_top_header_one {
        color: #fff;
    }.kilimanjaro_part {
         margin-bottom: 30px;
     }
    .foo_top_header_one .kilimanjaro_part > h5 {
        color: #fff;
    }
    .kilimanjaro_part h4, .kilimanjaro_part h5 {
        margin-bottom: 30px;
    }
    .kilimanjaro_single_contact_info > p, .kilimanjaro_single_contact_info > h5, .kilimanjaro_blog_area > a, .foo_top_header_one .kilimanjaro_part > p {
        color: rgba(255,255,255,.5);
    }
    p, ul li, ol li {
        font-weight: 300;
    }
    ul {
        margin: 0;
        padding: 0;
    }
    .kilimanjaro_bottom_header_one {
        background-color: #111;
    }
    .section_padding_50 {
        padding: 50px 0;
    }
    .kilimanjaro_bottom_header_one p {
        color: #fff;
        margin: 0;
    }
    p, ul li, ol li {
        font-weight: 300;
    }
    .kilimanjaro_bottom_header_one a {
        color: inherit;
        font-size: 14px;
    }
    a, h1, h2, h3, h4, h5, h6 {
        font-weight: 400;
    }
    .m-top-15 {
        margin-top: 15px;
    }
    ul {
        margin: 0;
        padding: 0;
    }

    .kilimanjaro_widget > li {
        display: inline-block;
    }
    p, ul li, ol li {
        font-weight: 300;
    }
    ol li, ul li {
        list-style: outside none none;
    }
    .kilimanjaro_widget a {
        border: 1px solid #333;
        border-radius: 6px;
        color: #888;
        display: inline-block;
        font-size: 13px;
        margin-bottom: 4px;
        padding: 7px 12px;
    }
    ul {
        margin: 0;
        padding: 0;
    }
    .kilimanjaro_links a {
        border-bottom: 1px solid #333;
        color: rgba(255,255,255,.5);
        display: block;
        font-size: 13px;
        margin-bottom: 5px;
        padding-bottom: 10px;
    }
    .kilimanjaro_links a {
        color: rgba(255,255,255,.5);
        font-size: 13px;
    }
    top-15 {
        margin-top: 15px;
    }
    .foo_top_header_one .kilimanjaro_part > h5 {
        color: #fff;
    }
    .kilimanjaro_part h4, .kilimanjaro_part h5 {
        margin-bottom: 30px;
    }
    .kilimanjaro_social_links > li {
        display: inline-block;
    }
    p, ul li, ol li {
        font-weight: 300;
    }
    .kilimanjaro_social_links a {
        border: 1px solid #333;
        border-radius: 6px;
        color: #888;
        display: inline-block;
        font-size: 13px;
        margin-bottom: 3px;
        padding: 7px 12px;
    }
    .kilimanjaro_blog_area .kilimanjaro_date {
        color: #27ae60;
        font-size: 13px;
        margin-bottom: 5px;
    }
    .kilimanjaro_blog_area > p {
        color: rgba(255,255,255,.5);
        line-height: 1.3;
        margin-bottom: 0;
    }
    .kilimanjaro_works > a {
        display: inline-block;
        float: left;
        position: relative;
        width: 33.33333333%;
        z-index: 1;
    }
    .kilimanjaro_thumb {
        left: 0;
        position: absolute;
        top: 0;
        width: 75px;
    }
    .kilimanjaro_links a i {
        padding-right: 10px;
    }
    /* :: 18.0 Footer Area CSS */

    .footer_area {
        position: relative;
        z-index: 1;
    }
    .footer_bottom p > i,
    .footer_bottom p > a:hover {
        color: #27ae60;
    }

    .social_links_area {
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        padding: 50px 0 30px 0;
        text-align: center;
        position: relative;
        z-index: 1;
    }
    .social_links_area > a:hover {
        color: #27ae60;
    }

    .inline-style .social_links_area > a:hover {
        background-color: transparent;
        color: #27ae60;
        border: 0px solid transparent;
    }
    .single_feature:hover .feature_text h4 {
        color: #27ae60;
    }
    .kilimanjaro_blog_area {
        border-bottom: 1px solid #333;
        margin-bottom: 15px;
        padding: 0 0 15px 90px;
        position: relative;
        z-index: 1;
    }
    .kilimanjaro_links a {
        border-bottom: 1px solid #333;
        color: rgba(255,255,255,.5);
        display: block;
        font-size: 13px;
        margin-bottom: 5px;
        padding-bottom: 10px;
    }
</style>

<?php echo $__env->make("template.bylejak", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\48512\YoGrafik\resources\views/welcome.blade.php ENDPATH**/ ?>