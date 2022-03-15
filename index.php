<?php
get_header();


global $wp_query;

$args = $wp_query->query_vars;
$motcle = '';
$agence = '0';
$contrat = '0';
$statut = '0';
$args['post_type'] = 'post';

$metaquery = array();



if($_GET) {

	if (isset($_GET['s'])) {
		 $motcle = $_GET['s'];
		 };

	if (isset($_GET['contrat'])) {
		$contrat = $_GET['contrat'];

		if ($contrat > 0) {
			array_push($metaquery, array(
						'key' => 'job_contract_type',
				        'value' => CONTRAT[$contrat -1],
				        'compare' => '=',)
				);
		};
	}

    if (isset($_GET['statut'])) {
		$statut = $_GET['statut'];

		if ($statut> 0) {
			array_push($metaquery, array(
				'key' => 'job_statut',
		        'value' => STATUT[$statut - 1],
		        'compare' => '=',
		    ));
		};
	};

    if(isset($_GET['agence'])){
        $agence = $_GET['agence'];
        if ($agence > 0){

                array_push($metaquery, array(
                'key' => 'job_agency',
		        'value' => AGENCE[$agence- 1],
		        'compare' => '=',
                ));
        }
    }

};

$args['meta_query'] = $metaquery;

$myquery = new WP_Query( $args );

$wp_query = $myquery;

?>


         <!-- Zone de recherche --->
        <div class="header-bas"> </div>

        <div class="row-recherche">
               <div class="col-xl-12">
                    <h3 class="text-offre">Consultez les offres actuellement disponibles à la MSA</h3>
                    <h5 class="text-recherchez">Que recherchez-vous ? </h5><br>
                   
                 <form method="get" id="search-form" action="<?php echo(get_site_url()); ?>">
                        
                    <div class="input-group">
                         
                          <input type="text" id="s" name="s" placeholder="Rechercher par mot clé..." class="form-control" value="<?php echo $motcle; ?>" >
                            
                          <select class="custom-select" name="agence" id="agence_champ">
                            <option value="0" selected="selected" >Organisme</option>
                             <?php 
                                $size = count(AGENCE);
                                for($i=0; $i < $size;++$i) {
                                    echo("<option value='" . ($i + 1) . "'");
                                    if($agence == $i + 1) {
                                        echo(" selected='selected'");
                                    }
                                    echo("><span class='option-text'>". AGENCE[$i] . "</span></option>");
                                };
                              ?>
                            </select>
                            <select  class="custom-select" name ="contrat" id="contrat_champ">
                            <option value="0" selected="selected" >Type de contrat</option>
                            <?php 
                                $size = count(CONTRAT);
                                for($i=0; $i < $size;++$i) {
                                    echo("<option value='" . ($i + 1) . "'");
                                    if($contrat == $i + 1) {
                                        echo(" selected='selected'");
                                    }
                                    echo("><span class='option-text'>". CONTRAT[$i] . "</span></option>");
                                };
                              ?>
                            </select>
                            <select class="custom-select" name ="statut" id="statut_champ">
                            <option value="0" selected="selected">Statut</option>
                            <?php 
                                $size = count(STATUT);
                                for($i=0; $i < $size;++$i) {
                                    echo("<option value='" . ($i + 1) . "'");
                                    if($statut == $i + 1) {
                                        echo(" selected='selected'");
                                    }
                                    echo("><span class='option-text'>". STATUT[$i] . "</span></option>");
                                };
                              ?>
                            </select>

                            <button type="submit"  id="searchsubmit" class="btn">Rechercher</button>
                        </div>
                    </form> 
                 </div>
        </div>                 
</header>    <!-- Fin Header -->

<!-- Emplois trouvés -->

<div class="postes-trouves">
        <span class="postes-textes">
             <?php 
                PostesTrouves($myquery);
             ?>                          
        </span>
        <a class="reinitialiser" href="<?php echo get_site_url(); ?>"> 
            <img src="<?php echo (get_template_directory_uri(). '/assets/img/icon_reset.svg');?>" alt="Actualiser">
            Reinitialiser les filtres
        </a>
</div>


<?php if ( $myquery->have_posts() ) : ?>

<?php while ( $myquery->have_posts() ) : $myquery->the_post(); ?>

<?php 


$jobid = get_post_custom_values('job_id')[0];
$jobagency = get_post_custom_values('job_agency')[0];
$jobcity = get_post_custom_values('job_city')[0];
$jobcontract = get_post_custom_values('job_contract_type')[0];
$joblevel = get_post_custom_values('job_level')[0];
$jobstatut = get_post_custom_values('job_statut')[0];

?>

    <div class="single-job-items mb-30">
                <div class="job-items">
                    <div class="job-tittle job-tittle2">
                        <a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>">
                            <h4> <?php  echo  the_title(); ?></h4>
                        
                        <ul>
                            <li>Publiée le <?php  the_date();?></li>
                            <li>
                                <img src="<?php echo (get_template_directory_uri(). '/assets/img/1f4cd.svg');?>" width="14" alt="Icone Local Msa">
                                <strong> <?php echo ' ' .$jobagency .', '. $jobcity ?></strong>
                            </li>
                            <li>
                            <img src="<?php echo (get_template_directory_uri(). '/assets/img/1f4c3.svg');?>" width="14" alt="Icone Local Msa">
                                <?php echo ' ' .$jobcontract . ', ', $jobstatut;?>
                            </li>
                        </ul>
                    </div>
                    </a>
                </div>
    </div>

<?php endwhile ;?>

<div class="afficher-plus-offre">


</div>

<?php else : ?>

<?php endif; ?>



<?php

get_footer();
?>