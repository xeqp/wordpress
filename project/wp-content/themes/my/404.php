<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php echo __('Oops Errore 404! That page can’t be found.', 'twentyseventeen'); ?></h1>
            </header><!-- .page-header -->
            <div class="page-content">
                <p><?php echo __('It looks like nothing was found at this location. Maybe try a search?', 'twentyseventeen'); ?></p>
                <?php get_search_form(); ?>
            </div><!-- .page-content -->
        </section><!-- .error-404 -->
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
