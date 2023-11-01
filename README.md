I built this E-commerce website using WordPress and WooCommerce, and I created the theme from scratch.

Used: WordPress, Woocommerce, PHP, Bootstrap, Git


## How to apply woocommerce templates
1. Copy a templates folder from public/wp-content/plugins/woocommerce/templates
2. Paste the folder in /public/wp-content/themes/pawsgang/
3. Change the name of folder as 'woocommerce'
4. Open funtion.php file then write down below code
5. ```php
   add_theme_support('woocommerce');
   ```
6. Make 'woocommerce.php' file in the theme folder which you use(like pawsgang)
7. Open woocommerce.php file then write down like below
8. ```php
   <?php get_header(); ?>
    <main class="container pt-5">
      <?php woocommerce_content(); ?>
    </main>
   <?php get_footer(); ?>
   ```
