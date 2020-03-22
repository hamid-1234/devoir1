<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<h1> ait hammou ali hamid</h1>
<h1>lamin ilham </h1>
    <div class="container">

        <h2>Exercice N°1 : Utilisation de PHP pour générer une page d’accueil dynamique</h2>
        <h2>Galerie d'images</h2>
        <p>La classe .thumbnail peut être utilisée pour afficher une galerie d'images.</p>

        <p>Cliquez sur les images pour les agrandir.</p>
        <div class="row">

            <?php 
$my_array = array("1","2","3","4");

shuffle($my_array);

FunctionName($my_array[0]);
FunctionName($my_array[1]);
FunctionName($my_array[2]);
FunctionName($my_array[3]);

  	function FunctionName($value)
  	{
  		switch ($value) {
  			case '1':
  				echo ' <div class="col-md-3">
      <div class="thumbnail">
        <a href="a.jpg" target="_blank">
          <img src="a.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
';
  				break;
			case '2':
  				echo '  <div class="col-md-3">
      <div class="thumbnail">
        <a href="b.jfif" target="_blank">
          <img src="b.jfif" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>';
  				break;
			case '3':
  				echo ' <div class="col-md-3">
      <div class="thumbnail">
        <a href="c.jfif" target="_blank">
          <img src="c.jfif" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>';
  				break;

  			default:
  			echo ' <div class="col-md-3">
      <div class="thumbnail">
        <a href="d.jfif" target="_blank">
          <img src="d.jfif" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>';
  				break;
  		}
  		# code...
  	} ?>

        </div>
        <hr>
        <h2>Exercice N°2 : Utilisation de PHP pour afficher le contenu d’un fichier de commandes</h2>

<?php 


$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "242005001 | 1236 | 24 octobre 2005 | Tomates | 4 | 4.0\n";
fwrite($myfile, $txt);
$txt = "252005001 | 1235 | 25 octobre 2005 | Tomates | 6 | 3.5\n";
fwrite($myfile, $txt);
$txt = "252005002 | 1234 | 25 octobre 2005 | Tomates | 8 | 3.0\n";
fwrite($myfile, $txt);
fclose($myfile);




echo '<table class="table">';
$file = fopen("newfile.txt", "r") or die("Unable to open file!");
while (!feof($file)){   
    $data = fgets($file); 
    echo "<tr><td>" . str_replace('|','</td><td>',$data) . '</td></tr>';
}
echo '</table>';
fclose($file);
 ?>

<hr>
<h3>Exercice N°3 : Utilisation de PHP pour séparer, mettre en forme et afficher les
 commandes clients envoyées à une centrale d’achats
</h3>
<h3> Centrale d’achats </h3>
<h4> commande clients</h4>
<?php 

echo '<table class="table">';
?>
 
<tr><th>numéro de commande</th>
	<th>numéro de client</th>
	<th> date de demande</th>
	<th> désignation article</th>


	<th>quantité</th>
<th> prix unitaire</th>
<th>	 date de livraison</th>
<th> adresse client</th>
</tr>
<?php 
$adresse="";
$i=0;
$file = fopen("newfile.txt", "r") or die("Unable to open file!");
while (!feof($file)){   
    $data = fgets($file); 


    switch ($i) {
    	case '0':
    		$adresse="22 rue de Paradis Agadir";
    		break;
    		case '1':
    		$adresse="123 rue des colibris Gillies Marrakech";
    		break;
    		case '2':
    		$adresse="45 avenue des FAR Casablanca";
    		break;
    	
    	default:
    	$adresse="";
    		break;
    }
    echo "<tr><td>" . str_replace('|','</td><td>',$data) ;
    $retVal = ($data=="") ? "</tr>": '</td> <td>26 octobre 2005</td><td>'.$adresse.'</td></tr>' ;
    echo   $retVal;
   

    $i++;
}
echo '</table>';
fclose($file); ?>

    </div>

</body>

</html>