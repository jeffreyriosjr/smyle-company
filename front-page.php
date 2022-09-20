<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package smyle_co_
 */
get_header();

?>

    <section class="the-body"> 
     <img src="http://smyleco.local/wp-content/uploads/2022/09/001-1.png"class="the-logo" />
       <div class="loader">
        <div class="text">
            <p>Smyle_Co_ A San Diego Based Company -</p>
        </div>
        <span><i></i></span>
       </div>

    <script>
        let text = document.querySelector('.text p');
        text.innerHTML = text.innerText.split("").map((char,i) => 
        `<b style="transform:rotate(${i * 9.5}deg)">${char}</b>`).join(""); 
    </script>

</section>
    



<?php 
the_content();
get_footer();
