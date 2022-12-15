</main>
<footer class="footer">
    <div class="footer__container container">
        <div>
            <div class="footer__logo">
                <?= wp_get_attachment_image( get_field('logos', 'options')['for_dark_bg'] );?>
            </div>
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
        </div>
        <div>
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
            </div>
            <?php $book_section=get_field('footer', 'options')['book_section'];?>
            <div class="footer__book">
                <p class="body-text-semi"><?= $book_section['heading'];?></p>
                <a class="button" href="<?= $book_section['book_button']['link'];?>"><?= $book_section['book_button']['label'];?></a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>