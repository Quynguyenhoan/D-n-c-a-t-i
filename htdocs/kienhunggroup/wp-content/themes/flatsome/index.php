<?php
/**
 * The blog template file.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

get_header();

?>

<div id="content" class="blog-wrapper blog-archive page-wrapper">
		<?php get_template_part( 'template-parts/posts/layout', get_theme_mod('blog_layout','right-sidebar') ); ?>
</div>

<?php get_footer(); ?>
<?php
// Nạp thư viện dotenv
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Sử dụng khóa API từ biến môi trường
$googleApiKey = $_ENV['GOOGLE_API_KEY'];

// Sử dụng $googleApiKey trong mã của bạn
echo "Khóa API của Google: " . $googleApiKey;
