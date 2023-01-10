</main>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <?= wp_get_attachment_image( get_field('logos', 'options')['for_dark_bg'], ["class" => "img-fluid d-block mb-4"] );?>
                <p class="text-white small">Inara means ‘to shed light.’ That’s exactly how I want to help you—to gain clarity and vision
                    for your finances.
                </p>
                <?php
                $certifications=get_field('certifications', 'options');
                if( !empty($certifications) ){?>
                    <ul class="footer__cert-list">
                        <?php foreach($certifications as $cert){?>
                            <li>
                                <?= wp_get_attachment_image($cert['image']);?>
                            </li>
                        <?php }?>
                    </ul>
                <?php }?>
                <p class="text-white small mt-2 mb-4 mb-xxl-0">Yes, I do bookkeeping too! <a href="https://northokanaganbookkeeping.com/" class="text-white">NorthOkanaganBookkeeping.com</a></p>
            </div><!-- col-->
            <div class="col-xxl-3">
                <?php $contact=get_field('contact', 'options');?>
                <div class="footer__contact">
                    <dl>
                        <dt>Address</dt>
                        <dd><?= $contact['address'];?></dd>
                    </dl>
                    <dl>
                        <dt>Email</dt>
                        <dd><a href="mailto:<?= $contact['email'];?>" target="_blank"><?= $contact['email'];?></a></dd>
                    </dl>
                    <dl>
                        <dt>Phone number</dt>
                        <dd><a href="tel:<?= strip_tel($contact['phone_number']);?>" target="_blank"><?= $contact['phone_number'];?></a></dd>
                    </dl>
                    <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="text-white d-block mb-3 font-weight-bold">Our Privacy Policy</a>
                </div>
            </div><!-- col-->
            <div class="col-xxl-3">
                <?php $book_section=get_field('footer', 'options')['book_section'];?>
                <div class="footer__book">
                    <p class="mb-4"><?= $book_section['heading'];?></p>
                    <a class="button button--footer-book" href="<?= $book_section['book_button']['link'];?>"><?= $book_section['book_button']['label'];?></a>
                </div>
            </div><!-- col-->
        </div><!-- row -->
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>