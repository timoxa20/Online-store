<?php
if ( ! defined ('ABSPATH')) {
    exit; //Exit if accenssed directly
}
?>

<?php
    get_header();
    ?>
    <?php
    get_navigation();
    ?>







    <section class="error">
        <div class="container">
            <div class="error__ox">
               <h1 class="error__title">
                404
            </h1>
            <div class="error__text">
                Такой страницы не существует
            </div>  
            </div>
           
        </div>
    </section>

    <?php
    get_footer();
    ?>