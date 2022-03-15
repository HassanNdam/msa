<?php 


$jobagency = get_post_custom_values('job_agency')[0];
$jobcity = get_post_custom_values('job_city')[0];
$jobcontract = get_post_custom_values('job_contract_type')[0];
$joblevel = get_post_custom_values('job_level')[0];
$jobstatut = get_post_custom_values('job_statut')[0];
$jobfiliere = get_post_custom_values('job_filiere')[0];
$joblevel = get_post_custom_values('job_level')[0];
$joptype = get_post_custom_values('job_type')[0];



// Afficher de la description du job

?>

  <div class="container">

        <h1><?php the_title();?></h1>

        <p style="margin-top:30px;">
        <span class="m-r-span" title="Localisation">
        <i>
        <img draggable="false" role="img" class="emoji" alt="Zone" src="<?php echo (get_template_directory_uri(). '/assets/img/1f4cd.svg');?>"> 
        </i><?php echo $jobagency. ' à ' . $jobcity ?> &nbsp;&nbsp;
        </span>
        <span class="m-r-span" title="Type de contrat"><i>
        <img draggable="false" role="img" class="emoji" alt="Type de contrat" src="<?php echo (get_template_directory_uri(). '/assets/img/1f4c3.svg');?>">
        </i><?php echo $jobcontract ?> &nbsp;&nbsp;
        </span>
        </p>

        <table class="table table-bordered table-white">
        <thead>
        <tr>
        <th scope="col">EMPLOI CONVENTIONNEL</th>
        <th scope="col">FILIÈRE</th>
        <th scope="col">NIVEAU </th>
        <th scope="col">STATUT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td><?php echo $joptype?></th>
        <td><?php echo $jobfiliere?></td>
        <td><?php echo $joblevel?></td>
        <td><?php echo $jobstatut?></td>
        </tr>
        </tbody>
        </table>


        <?php the_content();?>


        <br>
        <a class="revenir-lien" href="<?php echo home_url();?>"  title="Revenir à la liste des offres d'emploi"> 
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
        Revenir à la liste 
        </a>&nbsp; 

        <a class="postuler" href="https://jobaffinity.fr/apply/94ok6l3f9t3ozch4ad" target="_blank"  title="Postuler pour <?php echo the_title();?> "> 
        Postuler
        </a>

  </div>



