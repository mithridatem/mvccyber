<?php
    //fonction pour gérer l'ajout des roles en BDD
    function insertRoles($bdd){
        //stocker les messages d'erreur
        $message = "";
        //test si le bouton est cliqué
        if(isset($_POST["submit"])){
            //tester si le champs nom_roles est rempli
            if(!empty($_POST["nom_roles"])){
                //nettoyer nom_roles
                $nom = cleanInput($_POST["nom_roles"]);
                //test si le roles n'existe pas
                if(empty(getRolesByName($bdd,$nom))){
                    //ajouter le roles en BDD
                    addRoles($bdd,$nom);
                    $message = "Le roles ".$nom." a été ajouté en BDD";
                }
                //test si le roles existe déja en BDD
                else{
                    $message = "Le roles ".$nom." existe déja en BDD";
                }
            }
            //test si nom_roles est vide
            else{
                $message = "Veuillez remplir le champs de formulaire";
            }
        }
        //appel de la vue
        include_once './app/vue/vue_add_roles.php';
    }