<?php 
$string=" Notre formation DL commence aujourd'hui .";
$nbr=strlen (  $string ) ;

    echo '<div><h1>Exo 1</h1>',$nbr,'</div>';



$string="Notre formation DL commence aujourd'hui";
$nbr=str_word_count($string, 1);
// var_dump($nbr)
    echo '<div><h1>Exo 3</h1>',sizeof($nbr),'</div>';

$string="Notre formation DL commence aujourd'hui";

echo '<div><h1>Exo a</h1>',str_replace("aujourd'hui","demain",$string),'</div>';


$string="Engage le jeu que je le gagne";
$reverse=strrev ($string );
$string=strtolower($string);
$reverse=strtolower($reverse);
$string=str_replace(" ","",$string);
$reverse=str_replace(" ","",$reverse);
if($string==$reverse){
    echo "<div><h1>Exo 4</h1>cette phrase est un palindrome";
}
else{
    echo "<div><h1>Exo 4</h1>cette phrase n'est pas un palindrome";
}


$montant=100;
$taux=0.1524;
$change=$montant*$taux;

echo "<div><h1>Exo 5</h1>100francs=",round($change, 2)," €</div>";


$pu=9.99;
$qte=5;
$tva=0.2;

echo "<div><h1>Exo 6</h1>le prix unitaire=",$pu," €</div>";
echo "<div>quantité=",$qte," €</div>";
echo "<div>TVA= 20%</div>";
echo "<div>total=",$qte*$pu*$tva," €</div>";


$age=10;
echo "<div><h1>Exo 7</h1></div>";
if($age<6){
    $cat='pas de catégories';
}
elseif($age>=6 && $age<=7){
    $cat='poussin';
}
elseif($age>7 && $age<=9){
    $cat='pupille';
}
elseif($age>9 && $age<=11){
    $cat='minime';
}
elseif($age>=12 ){
    $cat='cadet';
}
echo "<div>l'enfant de ",$age," ans appartient à la catégorie ",$cat,"</div>";



$number=8;
echo "<div><h1>Exo 8</h1></div>";
for($i=1;$i<11;$i++){
    $val=$number*$i;
    echo "<div>",$number," * ",$i," = ", $val;

}
echo "<div><h1>Exo 9</h1></div>";
$sexe='f';
$age=32;
if(($sexe=='h' && $age>20 )||($sexe=='f' && ($age>=18 && $age<=35))){
    echo "<div>La personne est imposable.</div>";
}
else{
    echo "<div>La personne n'est pas imposable.</div>";
}



echo "<div><h1>Exo 10</h1></div>";

$montant_a_payer=152;
$montant_verse=200;

$valeurs_faciales = [500,200,100,50,20,10,5,2,1,0.5,0.2,0.1,0.05,0.02,0.01];
$rendu =  $montant_verse - $montant_a_payer;
$monnaie = [];
while($rendu > 0){
    $type=[];
    if($rendu >= $valeurs_faciales[0]){
        $monnaie[] = $valeurs_faciales[0];
        $rendu = $rendu - $valeurs_faciales[0];
        $rendu = round($rendu, 2);
    }
    else{
        
        array_shift($valeurs_faciales);
    }
}

$monnaie=array_count_values($monnaie);
foreach($monnaie as $key=>$value){
    
    // var_dump($monnaie,$value);
    echo '<div>';
    if($key<5){
        $type = 'pièce';
    }
    else{
        $type = 'billet';
    }
    echo 'nombre de ',$type,' de',$key,' ',$value;
    // var_dump($key,$value);
}


echo "<div><h1>Exo 11</h1></div>";
$tab= [" Peugeot ", " Renault ", " BMW ", " Mercedes "];
$nbr = sizeof(array_count_values($tab));
echo' le nombre de marques présentes dans le tableau est de :',$nbr,'<ul>';
foreach($tab as $value){
    echo '<li>',$value,'</li>';
}
echo '</ul>';


echo "<div><h1>Exo 12</h1></div>";

$tab=['Mickaël' => 'FRA', 'Virgile' => 'ESP', 'Marie-Claire' => 'ENG'];
$lang=['FRA'=>"Salut",'ESP'=>'Hola','ENG'=>'Hello'];
foreach ($tab as $key =>$value){
    $bonjour=$lang[$value];
    if(in_array($value, array_keys($lang))){
        echo '<div>',$bonjour,' ',$key,'</div>';
    }
}


echo "<div><h1>Exo 13</h1></div>";
$note=[10,20,18,5,6,17,16];
$nbr=sizeof($note);
$somme=array_sum($note);
$moyenne=round($somme/$nbr,2);
echo"<div> les notes obtenues par l'élève sont :";
$i=0;
while($i<$nbr){
    echo $note[$i],',';
    $i++;
}
echo '<div>Sa moyenne générale est de : ',$moyenne,'</div>';


echo "<div><h1>Exo 14</h1></div>";
$date=new DateTime(date("d-m-Y"));
$anniv=new DateTime('2010-07-11');
$interval = $anniv->diff($date);
echo $interval->format('%y Year %m Month %d Day');
 
echo "<div><h1>Exo 14</h1></div>";

class Personne
{
	
	// Propriétés
	private $nom ;
    private $prenom;
	private $date;
	
	
	// Méthodes
	// Liste des getters
	public function __construct($nom,$prenom,$date)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = $date;

    }

    public function getNom()
    {
        return $this->nom;
    }	
    public function getPrenom()
    {
        return $this->prenom;
    }	
	public function getDate()
	{
		return $this->date;
	}
	
	

	// Liste des setters
	
	
    
	public function setNom($nom)
	{
        
        $this->nom = $nom;
    
    }
    public function setPrenom($prenom)
    {
        $this->prenom= $prenom;		
    }
    public function setDate($date)
    {
        
            $this->date = $date;
    }	
}
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
$date=new DateTime($p1->getDate());
$date2=new DateTime($p2->getDate());
$jour=new DateTime(date("d-m-Y"));
$interval = $date->diff($jour);
$interval = $interval->format('%y ans %m mois %d jours');

$interval1 = $date2->diff($jour);
$interval1 = $interval1->format('%y ans %m mois %d jours');


echo '<div>',$p1->getPrenom(),' ',$p1->getNom(),' a ',$interval,'</div>';
echo '<div>',$p2->getPrenom(),' ',$p2->getNom(),' a ',$interval1,'</div>';
?>