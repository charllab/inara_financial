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
            <div class="footer__contact">
                <dl>
                    <dt class="body-text-semi">Address</dt>
                    <dd>dasda</dd>
                </dl>
                <dl>
                    <dt class="body-text-semi">Email</dt>
                    <dd>dasd</dd>
                </dl>
                <dl>
                    <dt class="body-text-semi">Phone number</dt>
                    <dd>dasd</dd>
                </dl>
            </div>
            <div class="footer__book">
                <p class="body-text-semi">Get In touch with Us:</p>
                <a class="button" href="#">Book a Discover Call</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>