
<?php
include('header404.php');

?>


<div class="section-top-border">
					<div class="col-lg-12 ">
                       <h2>Aucune page ne correspond à votre recherche</h2>
                       <p>Désolé, la page que vous recherchez est introuvable. Veuillez utiliser la fonction Rechercher ci-dessous.</p>
                
                    <form method="get" action="<?php echo(get_site_url()); ?>" role="search">
                      <input type="text" id="s" name="s" placeholder="Rechercher..."  value="<?php echo $motcle; ?>">
                      <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                    </form>

                    <h2 class="suggestions-404">Suggestions : </h2>
                       <ul>
                           <li>Vérifiez l’orthographe des termes de recherche.</li>
                           <li>Utilisez des mots clés plus génériques.</li>
                           <li>Essayez d'utiliser plusieurs termes de recherche.</li>
                       </ul>
					</div>
</div>

<?php
get_footer();
?>