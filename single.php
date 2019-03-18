<?php get_template_part('header'); ?>

    <header id="header" class="header">
        <div class="container">
        	<h1 class="logo" itemscope itemtype="http://schema.org/Brand" itemprop="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        		    <img class="symbol" src="<?php bloginfo('template_directory'); ?>/dist/img/logo.svg" alt="Logo do site Vitor Melo" onerror="this.src='<?php bloginfo('template_directory'); ?>/dist/img/logo.png'; this.onerror=null;">
        		    <img class="type" src="<?php bloginfo('template_directory'); ?>/dist/img/type.svg" alt="Fonte do site Vitor Melo" onerror="this.src='<?php bloginfo('template_directory'); ?>/dist/img/type.png'; this.onerror=null;">
                </a>
            </h1>
        </div>
    </header>

    <div class="container">
        <main class="main">
            <div class="project">
                <img class="project-img loading" src="<?php the_post_thumbnail_url('full'); ?>" alt="Projeto <?php the_title(); ?>">
                <div class="project-info">
                    <h1 class="project-title"><?php the_title(); ?></h1>
                </div>
            </div>

            <aside class="aside">
                <div class="projects">
                    <div class="project">
                        <img class="project-img loading" src="<?php the_post_thumbnail_url('full'); ?>" alt="Projeto <?php the_title(); ?>">
                        <div class="project-info">
                            <h2 class="project-title"><?php the_title(); ?></h2>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>

<?php get_template_part('footer'); ?>
