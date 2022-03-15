<?php



    function Msa_style(){

        wp_enqueue_style('ms-style', get_template_directory_uri() . "/style.css", array('ms-bootstrap'), 
        '1.0', 'All');
        wp_enqueue_style('ms-bootstrap',"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css", array(), 
        '4.0.0', 'All');
        wp_enqueue_style('ms-font',"https://use.fontawesome.com/releases/v5.7.0/css/all.css", array(), 
        '5.7.0', 'All');

        
        }
        add_action('wp_enqueue_scripts', 'Msa_style');

    function Msa_script(){

        wp_enqueue_script('msa-jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3.2.1', true);
        wp_enqueue_script('msa-propper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '1.12.9', true);
        wp_enqueue_script('msa-bootmin', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '4.0.0', true);

        add_action('wp_enqueue_scripts', 'Msa_script');
    }


    //Fonction verif postes trouvés

    function PostesTrouves($mareq){
        $mareqva = $mareq->found_posts;
        if($mareqva <= 0 ) 
        {
            echo '<strong>Aucune</strong> offre d\'emploi trouvée';
        }elseif ($mareqva  == 1)
        {
            echo '<strong>1</strong> offre emploi trouvée ';
        }elseif($mareqva >1 && $marerva <=10)
        {
            echo '<strong>'.($mareqva). '</strong>'. ' offres d\'emploi trouvées';
        }else
        {
         echo '<strong>'.($mareqva). '</strong>'. ' offres d\'emploi trouvées';

        }
    }

    function VerifPostsPag($req2){
        $req = $req2->found_posts;
         if($req >= 10){
             echo'<button  id="voirPlusDoffres" class="btn btn-primary mb-2">Afficher plus d\'offres</button>';
         }

    }



    // function MyCustom_post(){

    //     $args = array(

    //             'labels' => array(
    //             'name' => 'Twon',
    //             'singular_name' => 'Towns',
    //             ),

    //         'public' => true,
    //         'has_archive' => true, 
    //         'supports' => array('title', 'editor', 'thumbail'),
    //         // 'rewrite' => $arrayName = array('' => , );



    //         );
      
    //     register_post_type('town', $args);

    // }

    // add_action('init', 'MyCustom_post');

?>



