<?php







global $theme;



global $T;







?>







    </main>



	<!-- /Page -->







    <section id="map">







        <div class="map-holder"></div>







    </section>







    <footer id="footer">







        <div class="container-fluid">







            <div class="row">







                <div class="footer-wrapper">







                    <section class="footer-left">





<a href="http://journal.crossfit.com/start.tpl?version=CFJ-graphic123x63" target="_blank" title="CrossFit Journal: The Performance-Based Lifestyle Resource"><img src="http://journal.crossfit.com/templates/images/graphic-125x63.jpg" width="125px" height="63px" alt="CrossFit Journal: The Performance-Based Lifestyle Resource" /></a><br>
                 <a href="https://www.instagram.com/crossfitkids/" target="_blank" title="CrossFit Kids"><img src="https://i.imgur.com/fE0vWy5.png" width="125px" height="135px" alt="CrossFit Kids" /></a>
<br>       





                    </section>







                    <section class="footer-center">







                        <form



                            data-endpoint="contact_form"



                            action=""



                            method="POST"



                            class="contact-form ajax-form">







                            <div class="row">



                                <div class="col-sm-12">



                                    <h5 class="form-title"><?php _e( 'Contactez-nous', $theme->getTextdomain() ); ?></h5>



                                </div>



                            </div>







                            <div class="row">



                                <div class="col-sm-6">



                                    <?php $T->input( 'name', __( "Nom", $theme->getTextdomain() ), 'text', null, null, true ); ?>



                                </div>



                                <div class="col-sm-6">



                                    <?php $T->input( 'email', __( "Courriel", $theme->getTextdomain() ), 'email', null, null, true ); ?>



                                </div>



                            </div>







                            <div class="row">



                                <div class="col-sm-12">



                                    <?php $T->input( 'subject', __( "Sujet", $theme->getTextdomain() ), 'text', null, null, true ); ?>



                                </div>



                            </div>







                            <div class="row">



                                <div class="col-sm-12">



                                    <?php $T->input( 'message', __( "Message", $theme->getTextdomain() ), 'textarea', null, null, true ); ?>



                                </div>



                            </div>







                            <div class="row">



                                <div class="col-sm-12">



                                    <div class="text-center">



                                        <?php \Tanios\Classes\Forms::Nonce( 'contact_form' ); ?>



                                        <button class="btn red form-submit" type="submit"><?php _e( 'Envoyer', $theme->getTextdomain() ); ?></button>



                                    </div>



                                </div>



                            </div>







                        </form>







                    </section>







                    <section class="footer-right">


<a class="footer-logo" href="<?php echo get_home_url(); ?>">



                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cross-fit-logo.png"



                                 alt=""



                                 data-rjs="4"



                            >



                        </a>







                        <?php if( $blurb = get_field( 'footer_blurb', 'options' ) ): ?>



                            <div class="footer-right2">



                                <?php echo $blurb; ?>



                            </div>



                        <?php endif; ?>







                        






                        <ul class="footer-coords">



                            <?php if( $address = get_field( 'footer_address', 'options' ) ): ?>



                                <li>



                                    <img



                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-map.png"



                                            data-rjs="4"



                                            alt="<?php _e( "Adresse", $theme->getTextdomain() ); ?>"



                                    >



                                    <?php echo $address; ?>



                                </li>



                            <?php endif; ?>



                            <?php if( $phone_number = get_field( 'footer_phone_number', 'options' ) ): ?>
                                <li>
                                    <img
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-phone.png"



                                            data-rjs="4"



                                            alt="<?php _e( "Téléphone", $theme->getTextdomain() ); ?>"



                                    >



                                    <a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a>

                                </li>

                            <?php endif; ?>

                            <?php if( $image_link = get_field( 'link_after_tel_number:_text', 'options' ) ): ?>
                                <li>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clock.png" alt="horaire">
                                    <a target="_blank" href="<?php the_field( 'link_after_tel_number:_link', 'options' ) ; ?>"><?php echo $image_link; ?></a>

                                </li>

                            <?php endif; ?>



                        </ul>







                    </section>

					 



                </div>







            </div>







            <div class="row">







                <div class="col-sm-12">







                    <div class="footer-bottom">







                        <?php printf( __( "&copy; %d CrossFit 514. Tout droits réservés", $theme->getTextdomain() ), strftime( '%Y' ) ) ?>







                    </div>







                </div>







            </div>



	



        </div>







    </footer>







</div>



<!-- /Wrapper -->







<!-- Footer script -->



<?php



wp_footer();



?>



<!-- /Footer script -->


<script>
    jQuery(window).scroll(function() {
  var scrolledY = $(window).scrollTop();
  jQuery('.slider-container .slider-slides .slides-item').css('background-position', 'left ' + ((scrolledY)) + 'px');
});
jQuery( document ).ready(function() {
jQuery('#urllink').click(function(){
	window.open(jQuery(this).attr('href'),'_blank');
});
});
</script>




</body>



</html>