<?php include_once 'includes/header.php'; ?>

    <section class="container">
        <h1 class="heading">Notre equipe</h1>
        <div class="card-wrapper">
            <div class="card">
                <img src="images/discussion.jpg" alt="card background" class="card-img">
                <img src="images/image22.jpeg" alt="profile image" class="profile-img">
                <h1>Michelle Kobayashi</h1>
                <p class="job-title">UI designer</p>
                <p class="about">
                    Proin eget eros ac dolor egestas tempor.
                    Aliquam eu placerat sem. Nunc non dictum lacus. Nulla posuere eros
                    quis molestie eleifend. Nam fringilla enim eros, eleifend ultrices orci eleifend in.
                    Cras et ullamcorper dui.
                </p>
                <a href="#" class="btn">Contact</a>
                <ul class="social-media">
                    <li><1 href="#"><1 class="fab fa-facebook-square"></1></a></li>
                    <li><1 href="#"><1 class="fab fa-twitter-square"></1></a></li>
                    <li><1 href="#"><1 class="fab fa-instagram-square"></1></a></li>
                    <li><1 href="#"><1 class="fab fa-linkdin-square"></1></a></li>
                </ul>
            </div>
            <div class="card">
                <img src="images/discussion.jpg" alt="card background" class="card-img">
                <h1>Thomas Pacond</h1>
                <p class="job-title">devloppeur</p>
                <p class="about">
                    salut
                </p>
                <a href="#" class="btn">Contact</a>
                <ul class="social-media">
                    <li><1 href="#"><1 class="fab fa-facebook-square"></1></a></li>
                    <li><1 href="#"><1 class="fab fa-twitter-square"></1></a></li>
                    <li><1 href="#"><1 class="fab fa-instagram-square"></1></a></li>
                    <li><1 href="#"><1 class="fab fa-linkdin-square"></1></a></li>
                </ul>
            </div>
            <div class="card">
                <img src="images/discussion.jpg" alt="card background" class="card-img">
                <h1>Safia Ouassenant</h1>
                <p class="job-title">UX designer</p>
                <p class="about">
                    salut
                </p>
                <a href="#" class="btn">Contact</a>
                <ul class="social-media">
                    <li><1 href="#"><1 class="fab fa-facebook-square"></1></a></li>
                    <li><1 href="#"><1 class="fab fa-twitter-square"></1></a></li>
                    <li><1 href="#"><1 class="fab fa-instagram-square"></1></a></li>
                    <li><1 href="#"><1 class="fab fa-linkdin-square"></1></a></li>
                </ul>
            </div>
            <div class="card">
                <img src="images/discussion.jpg" alt="card background" class="card-img">
                <h1>Damien Modeste</h1>
                <p class="job-title">UI designer</p>
                <p class="about">
                    salut
                </p>
                <a href="#" class="btn">Contact</a>
                <ul class="social-media">
                    <li><1 href="#"><1 class="fab fa-facebook-square"></1></a></li>
                    <li><1 href="#"><1 class="fab fa-twitter-square"></1></a></li>
                    <li><1 href="#"><1 class="fab fa-instagram-square"></1></a></li>
                    <li><1 href="#"><1 class="fab fa-linkdin-square"></1></a></li>
                </ul>
            </div>
        </div>
    </section>

<div class="column column-block">
    <div class="card">
        <a href="#">
            <div class="content">
                <span class="date">JUL 20 2017</span>
                <p>It has an easy to override visual style, and is appropriately subdued.</p>
                <span class="read-more">Read more</span>
            </div>
        </a>
    </div>
</div>


<style>

    $red: random(256)-1;
    $green: random(256)-1;
    $blue: random(256)-1;

    $black: #000000;
    $white: #ffffff;
    $light-grey: #e6e6e6;
    $dark-grey: #bdc3c7;

    body {
        font-family: "Open Sans", "open-sans", sans-serif;
        letter-spacing: 0.03em;
        line-height: 1.6;
    }

    .container {
    h4 {
        font-size: 1rem;
        font-weight: bold;
        text-align: center;
        margin: 2.5rem 0;
    }

    .card {
        border: none;
        border-top: 3px solid unquote("rgb(#{$red}, #{$green}, #{$blue})");
        opacity: 0;

    a {
        width: 100%;
        display: block;
        height: 100%;
        color: $black;
        border: 1px solid $light-grey;
        border-top: none;

    &:hover {
         background: unquote("rgb(#{$red}, #{$green}, #{$blue})");
         border: 1px solid unquote("rgb(#{$red}, #{$green}, #{$blue})");
         border-top: none;
         color: white;
     }

    .content {
        padding: 2rem;
    }

    span.date {
        font-size: 0.6875rem;
        font-weight: 600;
        display: block;
        margin-bottom: 0.5rem;
        color: $light-grey;
    }

    span.read-more {
        padding-bottom: 0.2rem;
        border-bottom: 1px solid;
    }

    p {
        font-size: 1.5rem;
        font-weight: 300;
        margin-bottom: 4.5rem;
    }
    }
    }
    }





</style>

<script>
    setTimeout(function(){
        TweenMax.staggerFromTo(".card", 0.9, {y: 100, opacity: 0}, {y: 0,  opacity: 1, ease: Power2.easeOut}, 0.1);
    }, 1000)


</script>

<section id="about-us-blog">
    <div class="container">
        <h4>All features</h4>
        <div class="row small-up-1 medium-up-2 large-up-3">
            <div class="column column-block">
                <div class="card">
                    <a href="#">
                        <div class="content">
                            <span class="date">JUL 20 2017</span>
                            <p>It has an easy to override visual style, and is appropriately subdued.</p>
                            <span class="read-more">Read more</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="column column-block">
                <div class="card">
                    <a href="#">
                        <div class="content">
                            <span class="date">JUL 20 2017</span>
                            <p>It has an easy to override visual style, and is appropriately subdued.</p>
                            <span class="read-more">Read more</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="column column-block">
                <div class="card">
                    <a href="#">
                        <div class="content">
                            <span class="date">JUL 20 2017</span>
                            <p>It has an easy to override visual style, and is appropriately subdued.</p>
                            <span class="read-more">Read more</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="column column-block">
                <div class="card">
                    <a href="#">
                        <div class="content">
                            <span class="date">JUL 20 2017</span>
                            <p>It has an easy to override visual style, and is appropriately subdued.</p>
                            <span class="read-more">Read more</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="column column-block">
                <div class="card">
                    <a href="#">
                        <div class="content">
                            <span class="date">JUL 20 2017</span>
                            <p>It has an easy to override visual style, and is appropriately subdued.</p>
                            <span class="read-more">Read more</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="column column-block">
                <div class="card">
                    <a href="#">
                        <div class="content">
                            <span class="date">JUL 20 2017</span>
                            <p>It has an easy to override visual style, and is appropriately subdued.</p>
                            <span class="read-more">Read more</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include_once 'includes/footer.php'; ?>
