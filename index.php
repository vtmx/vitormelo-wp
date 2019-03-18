<?php get_template_part('header'); ?>

<nav class="nav">
	<h1 class="none">Menu</h1>
	<a href="#header">Início</a>
	<a href="#about">Resumo</a>
	<a href="#services">Serviços</a>
	<a href="#portfolio">Portfólio</a>
	<a href="#education">Formação</a>
	<a href="#certifications">Certificações</a>
	<a href="#skills">Competência</a>
	<a href="#experience">Experiência</a>
	<a href="#recommendations">Recomendações</a>
</nav>

<main>
	<!-- =about -->
	<section class="section" id="about">
		<div class="container">
			<h2 class="title">Resumo</h2>
			<img class="avatar loading" itemprop="image" src="<?php the_field('about-image'); ?>" alt="Imagem de Vitor Melo tentando fazer uma pose sensual." width="850" height="315">
			<p itemprop="description"><?php the_field('about-summary'); ?></p>
		</div>
	</section>

	<!-- =services -->
	<section class="section" id="services" itemscope itemtype="http://schema.org/Service">
		<div class="container">
			<h2 class="title">Serviços</h2>

			<div class="services">
				<?php while ( have_rows('services') ) : the_row(); ?>
					<div class="service">
						<div class="circle">
							<img class="icon" src="<?php bloginfo('template_directory'); ?>/dist/img/icons/<?php the_sub_field('service-icon'); ?>.svg" alt="Ícone de <?php the_sub_field('service-name'); ?>" width="128" height="128" onerror="this.src='<?php bloginfo('template_directory'); ?>/dist/img/icons/<?php the_sub_field('service-icon'); ?>.png'; this.onerror=null;">
						</div>
						<h3 class="name" itemprop="name"><?php the_sub_field('service-name'); ?></h3>
						<p class="description" itemprop="description"><?php the_sub_field('service-description'); ?></p>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>

	<!-- =portfolio -->
	<section class="section" id="portfolio">
		<div class="container">
			<h2 class="title">Projetos Recentes</h2>

			<?php
				// Loop
				$args = array(
					'post_type' => 'portfolio',
					'post_per_page' => 12,
					'orderby' => 'rand',
				);
				$loop = new WP_Query( $args );
			?>

			<div id="lightgallery" class="projects carousel" itemscope itemtype="http://schema.org/CreativeWork">
				<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

					<?php // To get first image to add in href ?>
					<?php $gallery = get_field('project-gallery'); ?>

					<?php if( get_field('project-gallery') ): ?>
						<div class="project project-image">
							<a class="link <?php echo $post->post_name; ?>" itemprop="url" href="<?php echo $gallery[0]['url']; // first-image gallery ?>" title="<?php echo $rows[$i]['portfolio-title']; ?>" data-sub-html="<?php the_title(); ?>" target="_blank">
								<img class="img loading" itemprop="image" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="Projeto <?php the_title(); ?>" width="300" height="200">
								<h3 class="name" itemprop="name"><?php the_title(); ?></h3>
							</a>
						</div>
					<?php else: ?>
						<div class="project project-video">
							<a class="link <?php echo $post->post_name; ?>" itemprop="url" href="<?php the_field('project-video'); ?>" title="<?php echo $rows[$i]['portfolio-title']; ?>" data-sub-html="<?php the_title(); ?>" target="_blank">
								<img class="img loading" itemprop="video" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="Projeto <?php the_title(); ?>" width="300" height="200">
								<h3 class="name" itemprop="name"><?php the_title(); ?></h3>
							</a>
						</div>
					<?php endif; ?>

				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>

			</div>
		</div>
	</section>

	<!-- =education -->
	<section class="section" id="education">
		<div class="container">
			<h2 class="title">Formação Acadêmica</h2>

			<?php while ( have_rows('education') ) : the_row(); ?>
				<div class="education" itemprop="alumniOf" itemscope itemtype="http://schema.org/EducationalOrganization">
					<div class="name" itemprop="description"><a href="<?php the_sub_field('education-certification-link'); ?>" target="_blank"><?php the_sub_field('education-name'); ?></a></div>
					<div class="org" itemprop="name"><a itemprop="url" href="<?php the_sub_field('education-organization-link'); ?>" target="_blank"><?php the_sub_field('education-organization'); ?></a></div>
					<div class="time"><span><?php the_sub_field('education-startdate'); ?></span> &ndash; <span><?php the_sub_field('education-enddate'); ?></span></div>
				</div>
			<?php endwhile; ?>
		</div>
	</section>

	<!-- =certifications -->
	<section class="section" id="certifications">
		<div class="container">
			<h2 class="title">Certificações</h2>

			<?php while ( have_rows('certifications') ) : the_row(); ?>
				<div class="certification" itemprop="alumniOf" itemscope itemtype="http://schema.org/EducationalOrganization">
					<div class="name" itemprop="description"><a href="<?php the_sub_field('certification-link'); ?>" target="_blank"><?php the_sub_field('certification-name'); ?></a></div>
					<div class="org" itemprop="name"><a itemprop="url" href="<?php the_sub_field('certification-organization-link'); ?>" target="_blank"><?php the_sub_field('certification-organization'); ?></a></div>
					<div class="time"><?php the_sub_field('certification-date'); ?></div>
				</div>
			<?php endwhile; ?>
		</div>
	</section>

	<!-- =skills -->
	<section class="section" id="skills">
		<div class="container">
			<h2 class="title">Competências</h2>

			<div class="skills" itemscope itemtype="http://schema.org/ItemList">
				<?php while ( have_rows('skills') ) : the_row(); ?>
					<abbr class="skill" itemprop="itemListElement" title="<?php the_sub_field('skill-description'); ?>"><?php the_sub_field('skill-name'); ?></abbr>
				<?php endwhile; ?>
			</div>
		</div>
	</section>

	<!-- =experience -->
	<section class="section" id="experiences">
		<div class="container">
			<h2 class="title">Experiência</h2>

			<?php while ( have_rows('experience') ) : the_row(); ?>
				<div class="experience">
					<div class="name" itemprop="jobTitle"><?php the_sub_field('experience-jobtitle'); ?></div>
					<div class="org" itemprop="worksFor" itemscope itemtype="http://schema.org/Organization"><a itemprop="url" href="<?php the_sub_field('experience-organization-link'); ?>" target="_blank"><span itemprop="name"><?php the_sub_field('experience-organization'); ?></span></a></div>
					<div class="time"><span><?php the_sub_field('experience-startdate'); ?></span> &ndash; <span><?php if (get_sub_field('experience-enddate')) { the_sub_field('experience-enddate'); } else { echo 'atualmente'; } ?></span></div>
				</div>
			<?php endwhile; ?>
		</div>
	</section>
</main>

<!-- =footer -->
<footer id="footer" class="footer">
	<div class="container">
		<h2 class="title">Mídias Sociais</h2>

		<?php while (have_rows('social-group')) : the_row(); ?>
			<a class="social-link" itemprop="url" rel="me" target="_blank" href="<?php the_sub_field('social-link'); ?>"><?php the_sub_field('social-name'); ?></a>
		<?php endwhile; ?>

		<a class="to-top" href="#header">
			<svg class="icon icon-angle-up"><use xlink:href="#icon-angle-up"></use></svg>
			<span class="text-hide">Retornar ao topo</span>
		</a>
	</div>
</footer>

<!-- Script -->
<!--[if !IE]><!-->
	<script src="<?php bloginfo('template_directory'); ?>/dist/js/script.js"></script>
 <!--<![endif]-->

<!--[if IE]>
	<script src="<?php bloginfo('template_directory'); ?>/dist/js/script-ie.js"></script>
<![endif]-->

<script>
	<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
		<?php if( get_field('project-gallery')): ?>
			$('.<?php echo $post->post_name; ?>').on('click', function(e) {
				e.preventDefault();

				$(this).lightGallery({
					counter: false,
					download: false,
					showThumbByDefault: false,
					preload: 3,
					dynamic: true,
					dynamicEl: [
						<?php $gallery = get_field('project-gallery'); ?>
						<?php foreach( $gallery as $image ): ?>
							{
								'src': '<?php echo $image['url']; ?>',
								'thumb': '<?php echo $image['sizes']['thumbnail']; ?>',
								'subHtml': '<div class="lg-title"><?php echo $image['title']; ?></div>'
							},
						<?php endforeach; ?>
					]
				});
			});
		<?php else: ?>
			$('.project-video').lightGallery({
				counter: false,
				download: false,
			});
		<?php endif; ?>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
</script>

<?php get_template_part('footer'); ?>
