<?php get_header(); ?>

    <section id="slider">
        <?php get_template_part('slides'); ?>
    </section>

    <section id="content">

        <div class="what-we-do">
            <?php get_template_part( 'services', 'carousel' ); ?>
        </div>

        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h2 class="about-scroll">About Us</h2>
                        </div>
                        <div class="content-section">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="portfolio">
            <?php get_template_part( 'portfolio', 'features' ); ?>
        </div>

        <div class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h2 class="contact-scroll">Contact Us</h2>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.</p>
                        <form role="form">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="your name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="your email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="your message"></textarea>
                            </div>
                            <button class="btn btn-primary">Send message!</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="page-header">
                            <h3>WP Modern Boilerplate</h3>
                        </div>
                        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.</p>
                        <ul>
                            <li>(00) 00000-0000</li>
                            <li>(00) 00000-0000</li>
                            <li>(00) 00000-0000</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php get_footer(); ?>
