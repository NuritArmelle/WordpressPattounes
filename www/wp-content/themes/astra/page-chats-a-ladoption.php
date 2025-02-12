<?php
/*
Template Name: Modèle de Page Chats à l'Adoption
*/

get_header();

$args = array(
    'post_type' => 'chat',
    'tax_query' => array(
        array(
            'taxonomy' => 'tax-cat-status', // Remplacez par le nom de votre taxonomie
            'field'    => 'slug',
            'terms'    => 'a-l-adoption', // Remplacez par le terme que vous recherchez
        ),
    ),
);

$query = new WP_Query($args);
?>
<article id="primary" class="page type-page status-publish ast-article-single">
	<div class="content">
		<h1 class="wp-block-heading has-text-align-center">
			Nos chats à l'adoption
		</h1>
		<hr class="wp-block-separator has-text-color has-ast-global-color-1-color has-alpha-channel-opacity has-ast-global-color-1-background-color has-background">
		<div class="chats-gallery">
			<?php
			if ($query->have_posts()) :
				while ($query->have_posts()) : $query->the_post();
					?>
					<div class="chat-item" data-chat-name="<?php echo esc_attr(the_title()); ?>">
						<img class="chat-img" src="<?php echo esc_url(the_field('photo_principale')['url']); ?>" alt="<?php the_title(); ?>">

						<div class="chat-info">
							<h3><?php the_title(); ?> <?php echo genre_to_symbol(get_field('genre')) ?></h3>
							<?php echo (empty(get_field('statut_dadoption')) ? '' : "<h5 class='special-status-adoption'>".get_field('statut_dadoption')."</h5>") ?>
							
							<div>
								<table>
									<tr title="Âge du chat">
										<td>🎂</td>
										<td><?php echo calculate_age(get_field('date_de_naissance')); ?></td>
									</tr>
									<tr title="Extérieur nécessaire à son bien être ?">
										<td>🏡</td>
										<td><?php echo get_field('exterieur_necessaire'); ?></td>
									</tr>
									<tr title="Compatibilité avec les autres chats ?">
										<td>🐱</td>
										<td><?php echo get_field('compatible_autres_chats'); ?></td>
									</tr>
									<tr title="Compatibilité avec les chiens ?">
										<td>🐶</td>
										<td><?php echo get_field('compatible_chiens'); ?></td>
									</tr>
									<tr title="Compatibilité avec les enfants ?">
										<td>👶 </td>
										<td><?php echo get_field('compatible_enfants'); ?></td>
									</tr>
									<tr title="FIV / FELV ?">
										<td>⚕️</td>
										<td><?php echo get_field('fiv-felv'); ?></td>
									</tr>
								</table>
							</div>
						</div>

						<a href="<?php the_permalink(); ?>" class="read-more">En savoir plus sur moi</a>
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
			else :
				echo 'Aucun chat à l\'adoption.';
			endif;
			?>
		</div>

		<button id="load-more">Voir Plus</button>
	</div>
</article>

<style>
	table {
		border: 0;
	}
	
	table td {
		border: 0;
		padding: 2px;
	}
	
	.site-content .ast-container {
		display: block !important;
	}
	
	.chats-gallery {
		width: 100%;
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
	}

	article {
		display: flex;
		justify-content: center;
	}
	
	.content {
		margin: 4em 0px;
		background-color: #f7f3f5;
		/*padding: 5.34em 6.67em;
		margin: 4em 200px; */
		padding: 3vw 5vw;
    	min-width: fit-content;
		width: 80vw;
    	max-width: 1500px;
	}
	
	
	
	/** Fiche des chats **/
	
	.chat-item {
		width: 300px;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		background-color: white;
    	border-radius: 15px;
		margin: 20px;
	}
	
	.special-status-adoption {
		color: green;
		text-align: center;
	}
	
	.chat-info {
		width: 100%;
    	padding: 1rem 2rem;
	}
	
	.chat-info h3 {
		text-align: center;
	}
	
	.chat-img {
		width: 300px;
		height: 300px;
		border-radius: 15px 15px 0px 0px;
	}
	
	.male {
		color: blue;
	}
	
	.female {
		color: pink;
	}
	/** FIN Fiche des chats **/

	/** MEDIA QUERIES **/
	@media only screen and (min-width: 320px) and (max-width: 768px) {
		.chat-item {
			width: 260px;
		}
		
		.chat-img {
			width: 260px;
			height: 260px;
		}
	}

	/** FIN MEDIA QUERIES  **/
</style>

<script>
    var page = 1;
    var canLoadMore = true;

    jQuery(document).ready(function($) {
		$('#load-more').hide();$
        $('#load-more').on('click', function() {
            if (canLoadMore) {
                page++;
                loadMoreCats();
            }
        });
		
		// Gestion de l'effet de survol de l'image
		$('.chats-gallery').on('hover', '.chat-item img', (
			function() {
				var overlay = $(this).find('.overlay');
				overlay.stop().animate({ opacity: 0.8 }, 200);
			},
			function() {
				var overlay = $(this).find('.overlay');
				overlay.stop().animate({ opacity: 0 }, 200);
			}
		));

		// Redirection vers la fiche du chat au clic sur l'image
		$('.chats-gallery').on('click', '.chat-item img', function() {
			var chatName = $(this).data('chat-name');
			window.location.href = '/fiche-chat/' + chatName; // Remplacez l'URL par la structure réelle de vos liens
		});
		
		jQuery.post('<?php echo admin_url('admin-ajax.php'); ?>', {
            'action': 'load_more_cats',
            'page': page,
			'statusChat': 'A l\'adoption'
        }, function(response) {
            if (response.success) {
                if (response.has_more) {
                    $('#load-more').show();
                    canLoadMore = true;
                }
            } else {
                console.log('Erreur lors du chargement des chats.');
            }
        });
    });

    function loadMoreCats() {
        var data = {
            'action': 'load_more_cats',
            'page': page,
			'statusChat': 'A l\'adoption'
        };

        jQuery.post('<?php echo admin_url('admin-ajax.php'); ?>', data, function(response) {
            if (response.success) {
                $('.chats-gallery').append(response.data);

                // Vous pouvez ajouter du code supplémentaire ici selon vos besoins

                if (!response.has_more) {
                    $('#load-more').hide();
                    canLoadMore = false;
                }
            } else {
                console.log('Erreur lors du chargement des chats.');
            }
        });
    }
</script>

<?php
get_footer();

// Fonction pour calculer l'âge
function calculate_age($date_naissance) {
    $date_naissance = new DateTime($date_naissance);
    $aujourd_hui = new DateTime();
    $difference = $aujourd_hui->diff($date_naissance);

    if ($difference->y >= 1) {
        return $difference->y . ' ans';
    } else {
        return $difference->m . ' mois';
    }
}

function genre_to_symbol($genre) {
    return ($genre === "Mâle") ? "<span class='male' title='Mâle'>♂️</span>" : "<span class='female' title='Femelle'>♀️</span>";
}
?>
