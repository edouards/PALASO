<?php 
//Tableaux permettant d'afficher les plis de l'accordéons
$Numberletters=array('One','Two','Three','Four','Five','Six','Seven','Height','Nine','Ten');

//Variable compteur
$counter=0;

if(isset($_GET['i']))
{
  include('connexion.php');
  $dossiers=$connexion->query("SELECT * FROM DOSSIER WHERE dos_interimaire=".$_GET['i']);
  $dossiers->setFetchMode(PDO::FETCH_OBJ);
  while($dos=$dossiers->fetch())
  { 
    $documents=$connexion->query("SELECT * FROM DOCUMENTS WHERE doc_id=".$dos->dos_document);
    $documents->setFetchMode(PDO::FETCH_OBJ);
    while($doc=$documents->fetch())
    {
      //stocke le résultat dans un tableaux associatif
      $data=array(
        "libelle"=>$doc->doc_libelle,
        "chemin"=>$doc->doc_chemin
        );
      // compte le nombre d'enregistrements
      $number=count($data);
      ?>

<!-- Accordéon -->
      <div class="container">
      <div class="accordion" id="accordion">
        <div class="accordion-group">
          <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $Numberletters[$counter]; ?>">
              <h1><?php echo $data["libelle"]; ?></h1>
            </a>
          </div>
          <div id="collapse<?php echo $Numberletters[$counter]; ?>" class="accordion-body collapse in">
            <div class="accordion-inner">
              <img src="<?php echo $data["chemin"];?>" class="img-rounded"/>
            </div>
          </div>
        </div>

      </div>
      <?php
      $counter++;
    }
?>  <?php
  }
  ?> 
  <form method="POST" action="desk.php?p=interim">
    <button class="btn btn-info btn-large pull-right" type="submit">Retour</button>
  </form>
  
  <?php
  
}
?>