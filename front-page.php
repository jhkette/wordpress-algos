<?php 
$intro = get_field('introtext')
?>
<?php get_header('home');?>
   <main class="main-body">
       <div class="rounded"><div class="text"><h2>Data structures and algorithms in Javascript and Python</h2></div> </div>
       <div class="container-intro"><p class="intro"><?php echo $intro; ?></p></div>
       <div class="container-articles"><article class="home-article"><div class="image1"></div></article><article class="home-article">
       <div class="image2"></div>
       </article></div>
    </main>

<?php get_footer();?>