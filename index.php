<!DOCTYPE PHP>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapitre_3</title>
</head>
<body>
        <?php
                // EXERCICE 1 DU CHAPITRE 3
                /*Rédigez une expression conditionnelle pour tester si un nombre est à la fois un multiple de 3 et de 5.*/
                $variable_multiple = 30;
                echo "<h4>Exercice_1 / Correction </h4><br>"; 
                $Test = ($variable_multiple%3==0 && $variable_multiple%5==0) ? $variable_multiple." est à la fois un mutiple de 3 et de 5 <br>" : "La condition n'est pas vérifée <br>";
                echo $Test;
                //Notre Exercice  1 permet de tester si un nombre est à la fois un multiple de 3 et de 5
                //Pour l'utiliser et vérifier son fonctionnement , veuillez modifier le contenu de $variable_multiple
                echo "<h4>Exercice_2 / Correction </h4><br>"; 
               /*
                                Exercice 2
                    Écrivez une expression conditionnelle utilisant les variables $age et $sexe dans une
                    instruction if pour sélectionner une personne de sexe féminin dont l’âge est compris
                    entre 21 et 40 ans et afficher un message de bienvenue approprié.   
               */

              // Correction de l'exercice
              //la variable âge
              $age = 30;
              //la variable sexe
              $sexe = "F";
              echo "<h4> Utilisation de l'opérateur ? </h4>"; 
              $Verification = (($age>=21 && $age <=40) && $sexe=="F") ? " SOYEZ LES BIENVENUS MADAME ! " : "Vous n'avez pas rempli toutes les conditions qu'il faut.  <br>";
              echo $Verification;
              /*
                    On pouvait également faire ceci :

                    if(($age>=21 && $age <=40) && $sexe=="F")
                    {
                        echo "SOYEZ LES BIENVENUS MADAME !";
                    } else{
                        echo "Vous n'avez pas rempli toutes les conditions qu'il faut. <br>";
              
                     }   
               */   
              //Utilisattion avec if 
              echo "<h4> Utilisation de la condition if </h4>";  
               if(($age>=21 && $age <=40) && $sexe=="F")
                    {
                        echo "SOYEZ LES BIENVENUS MADAME !";
                    } else{
                        echo "Vous n'avez pas rempli toutes les conditions qu'il faut. <br>";
                    }    
                    echo "<br>";
                    echo "<h4> Exercice_3 / Correction </h4><br>";  
                    //EXERCICE 3 
        /*
            Effectuez une suite de tirages de nombres aléatoires jusqu’à obtenir une suite composée d’un nombre pair suivi de deux nombres impairs.
         */                       
                // Fonction pour générer un nombre aléatoire entre 1 et 100
                function functionRandomNumber() {
                  return rand(1, 100);
                }

                $result = false;

                while (!$result) {
                  $num1 = functionRandomNumber();
                  $num2 = functionRandomNumber();
                  $num3 = functionRandomNumber();
                  
                  if ($num1 % 2 == 0 && $num2 % 2 != 0 && $num3 % 2 != 0) {
                    // Nous avons trouvé une suite de nombres correspondant à nos critères
                    echo " La Suite trouvée : $num1, $num2, $num3";
                    $result  = true;
                  }
                }
                /*
                    Exercice 4
                          Créez et affichez des numéros d’immatriculation automobile (pour Paris, par exemple)
                          en commençant au numéro 100 PHP 75. Effectuez ensuite la même procédure en mettant
                          en réserve les numéros dont le premier groupe de chiffres est un multiple de 100. Stockez
                          ces numéros particuliers dans un tableau.
                  */
                  echo "<br>";
                  echo "<h4> Exercice_4 / Correction </h4><br>";  
                
                  // On crée un tableau qui va contenir les automobiles imatriculées $immatriculations = array();
                  $immatriculations = array();
                  // On crée un tableau qui va contenir les automobiles reservées $reserves = array();
                  $reserves = array();
                  $numero = 100;
                // La boucle tant que va nous permettre de , en un premier temps 
                //de verifier si le numero de la voiture est un multiple de 100
                  while ($numero < 1000) {
                    $immatriculation = "PHP " . $numero . " P";
                    
                    if ($numero % 100 == 0) {
                      $reserves[] = $immatriculation;
                    } else {
                      $immatriculations[] = $immatriculation;
                    }
                    
                    $numero++;
                  }
                  // Comme souvent la boucle foreach permet de parcourir les tableaux 
                  //On fait appelles à la boucle foreach pour parcourir les tableaux et retenir les automobiles immatriculées et celes réservées
                  echo "Immatriculations disponibles :<br>";
                  foreach ($immatriculations as $immatriculation) {
                    echo $immatriculation . "<br>";
                  }

                  echo "<br>Numéros réservés :<br>";
                  foreach ($reserves as $reserve) {
                    echo $reserve . "<br>";
                  }
                  echo "<br>";
                  echo "<h4> Exercice_5 / Correction </h4><br>";  
                  /*
                  Exercice 5
                      Choisissez un nombre de trois chiffres. Effectuez ensuite des tirages aléatoires, 
                      et comptez le nombre de tirages nécessaire pour obtenir le nombre initial. Arrêtez les tirages, et
                      affichez le nombre de coups réalisés. Réalisez ce script d’abord avec l’instruction while
                      puis avec l’instruction for.
                  */
                    $objectif = 123; // Remplacez 123 par le nombre de votre choix
                    $essais = 0;
                    $trouve = false;
                    //boucle while
                    echo "<h4>Utilisation de la boucle while </h4><br>";  
                    while (!$trouve) {
                      $essais++;
                      $tirage = rand(100, 999); // Génère un nombre aléatoire entre 100 et 999
                      if ($tirage == $objectif) {
                        $trouve = true;
                      }
                    }

                    echo "Nombre d'essais nécessaires : $essais";
                    // Boucle for 
                    echo "<h4>Utilisation de la boucle for </h4><br>";  
                    $objectif = 123; // Remplacez 123 par le nombre de votre choix
                    $essais = 0;

                    for (; ;) {
                      $essais++;
                      $tirage = rand(100, 999); // Génère un nombre aléatoire entre 100 et 999
                      if ($tirage == $objectif) {
                        break;
                      }
                    }

                    echo "Nombre d'essais nécessaires : $essais";
                    echo "<br>";
                    /*
                                                      Exercice 6
                              Créez un tableau dont les indices varient de 11 à 36 et dont les valeurs sont des lettres de
                              A à Z. Lisez ensuite ce tableau avec une boucle for puis une boucle foreach, et affichez
                              les indices et les valeurs (la fonction chr(n) retourne le caractère dont le code ASCII vaut
                              n).
                    
                    */
                    echo "<h4> Exercice_6 / Correction </h4><br>";  
                      // Code ASCI 
                      $tableau = array();
                      $code_ascii = 65; // Code ASCII de la lettre A

                      // Remplissage du tableau
                      for ($i = 11; $i <= 36; $i++) {
                        $tableau[$i] = chr($code_ascii++);
                      }

                      // Parcours du tableau avec une boucle for
                      for ($i = 11; $i <= 36; $i++) {
                        echo "Index : $i | Valeur : $tableau[$i]\n";
                        echo "<br>";
                      }
                      echo "<br>";
                      echo "<br>";
                      // Parcours du tableau avec une boucle foreach
                      foreach ($tableau as $index => $valeur) {
                        echo "Index : $index | Valeur : $valeur\n";
                        echo "<br>";
                      }
                      /*
                          Exercice 7
                            Utilisez une boucle while pour déterminer le premier entier obtenu par tirage aléatoire qui
                            soit un multiple d’un nombre donné. Écrivez la variante utilisant la boucle do…while.
                      */
                                echo "<br>";
                                echo "<br>";
                                echo "<h4> Exercice_7 / Correction </h4><br>";  
                              // Nombre dont on cherche un multiple
                              $nombre = 7;

                              // Boucle while
                              $nombre_aleatoire = rand(1, 100);
                              while ($nombre_aleatoire % $nombre != 0) {
                                $nombre_aleatoire = rand(1, 100);
                              }

                              echo "Le premier entier obtenu par tirage aléatoire qui est un multiple de $nombre est : $nombre_aleatoire\n";
                              echo "<br>";
                              echo "<br>";
                              // Boucle do...while
                              $nombre_aleatoire = rand(1, 100);
                              do {
                                $nombre_aleatoire = rand(1, 100);
                              } while ($nombre_aleatoire % $nombre != 0);

                              echo "Le premier entier obtenu par tirage aléatoire qui est un multiple de $nombre est : $nombre_aleatoire\n";

                              echo "<br>";
                              echo "<br>";
                              echo "<h4> Exercice_8 / Correction </h4><br>";  
                              // Fonction pour trouver le PGCD
                              function pgcd($a, $b) {
                                // Vérifier que les nombres sont entiers , on peut utiliser is_int  ou is_integer
                                if (!is_int($a) || !is_int($b)) {
                                  throw new Exception("Les nombres doivent être entiers");
                                }
                                
                                // la boucle while pour trouver le PGCD
                                while ($b != 0) {
                                  $r = $a % $b;
                                  $a = $b;
                                  $b = $r;
                                }
                                
                                return $a;
                              }

                              // Exemples d'utilisation de la fonction pgcd
                              try {
                                echo pgcd(15, 3) . "\n"; // affiche 12
                                echo "<br>";
                                echo pgcd(3, 1) . "\n"; // affiche 1
                                echo "<br>";
                                echo pgcd(1.5, 3) . "\n"; // lève une exception
                                echo "<br>";
                              } catch (Exception $e) {
                                echo "Erreur : " . $e->getMessage() . "\n";
                              }


                              echo "<br>";
                              echo "<br>";
                              echo "<br>";

                              echo " FIN DE LA CORRECTION DES EXERCICES DU CHAPITRE 3";

?>

</body>
</html>