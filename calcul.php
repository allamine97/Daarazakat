<?php
function remplissage($motif){
    switch($motif){
        case "money" : ?>
                        <div class="row-fluid">
                            <div class="col-md-12">
                                <p><h1>Calcul de l'aumône sur les biens monétaires et commerciaux</h1>

le minimum imposable (nissab) est (actuellement) de 1.610.099 francs CFA
</p>
                            </div>
                        </div>
                      <?php break;

            case "vache" :?>
                            <div class="row-fluid">
                            <div class="col-md-12">
                                <p><h1>calcul de la Zakat sur les bovins</h1>
   
   Le nissab est de 30 vaches </p>
                            </div>
                        </div> 

                           <?php break;

            case "mouton" : ?>
                                <div class="row-fluid">
                            <div class="col-md-12">
                                <p><h1>Calcul de la Zakat sur le bétail</h1>

le calcul de la zakat se fait de la même maniere aussi bien chez les moutons que les chevres.
les moutons et les chévres se comptent ensemble dans un meme troupeau.

Le nissab est de 40 bêtes </p>
                            </div>
                        </div>
                    <?php        break;
            case "recoltes" : ?>
                        <div class="row-fluid">
                            <div class="col-md-12">
                                <p><h1> calcul de la zakat sur les recoltes </h1>
       
       Le minimum imposable sur les est de 612kg</p>
                            </div>
                        </div>
                
                <?php  break;
            
            case "chameaux" : ?>
                            <div class="row-fluid">
                                <div class="col-md-12">
                                <p><h1>Calcul de la zakat sur les chameaux </h1>
           Le nissab est de 5 chameaux </p>
                                </div>
                            </div>
            <?php      break;
            
            case "traitement" : ?>
                                <div class="row-fluid">
                                    <div class="col-md-12">
                                    <p>De préférence ,l'aumône doit être l'aliment le plus consommé dans le pays que ce soit le riz,les dattes 
              ou les lentilles .Les savants on approuvé la possibilité de s'acquitter de l'aumône de la rupture du jeûne
              par la sommme équivalente d'argent.</p>
                                    </div>
                                </div>

              <?php    break;
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
    <?php
    require "include/style.php";
    $kind="";
    if(isset($_GET['kind'])){
    $kind = $_GET['kind'];
    }

    function generate_formulaire($cat,$label,$autre){
       ?>
	    <div class="row-fluid row-center">
            <form class="col-md-8 col-xs-12 col-sm-12 col-lg-8">
                <label for="<?php  echo $cat; ?>" style="color:white;">Renseigner le montant :</label>
                <input class="form-control" type="text"  placeholder="<?php echo $label;?>" id="<?php echo $cat;?>" required>
                <?php echo $autre;?>
                <input type="submit" class="btn btn-block btn-success"style="margin-top:12px;" id="calculer" value="valider">
            </form>
            <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4 jumbotron" style="margin-top: 1.89%;">
                <p style="font-size: medium" id="zakat"></p>
            </div>
        </div>
    <?php
    
    }
    ?>
    <title>Calculer votre zakat avec  <?php echo $kind;?></title>
</head>
<body>
<?php
include "include/header.php";
?>

<div class="container-fluid" style="padding-bottom:50px;">
    <?php remplissage($kind); ?>
    <br><br><br><br>
        <?php
        /**
         * Cette partie nous permet de faire la genration du formulaire en fonctiond e la requette qui
         * sera soumis
         * elle fait appelle a la fonction generate formulaire
         */
        switch ($kind){
            case "money" :  generate_formulaire("fortune","Renseigner le montant de votre fortune","");
                            break;

            case "vache" :  generate_formulaire("vache", "Renseigner le nombre de vaches que vous avez","");
                            break;

            case "mouton" : generate_formulaire("mouton","Renseigner le nombre de moutons que vous avez","");
                            break;
            case "recoltes" : 
                  $a="<input class='form-control' type='text'  placeholder='renseigner le nombre de jours ou vous avez payé pour l'arrosage' id='jpayer' required><input class='form-control' type='text'  placeholder='Entrez le nombre de jours ou le champs est arrosé par la pluie' id='jpluies' required>";         
                  generate_formulaire("recolte","Entrer la quantitée recoltée en kg(s)",$a);
                  break;
            
            case "chameaux" : 
                  generate_formulaire("chameaux","Donner le nombre de chameax que vous avez","");
                  break;
            
            case "traitement" : 
                  generate_formulaire("traitement"," Entrez le nombre d'individus dont vous êtes chargés d'acquittter la zakat d'el Fitr","");
                  break;
            

            default : echo "desole nous ne pouvons pas traiter ce cas";
                            break;
        }
        ?>
</div>

<script>
    var motif = "<?php echo $kind;?>"
    $(function(){
        switch (motif) {
            case "traitement":
                // cas traitement
                $("#calculer").click(function (e) {
                    e.preventDefault()
                    var $nombre = parseInt($("#traitement").val());
                    var $zakat = $("#zakat");
                    $zakat.html("la quantité a donné en aumône est de :" + $nombre * 2.176)
                })
                break;

            case 'vache' :
                //cas des vaches
                $("#calculer").click(function (e) {
                    e.preventDefault()
                    var $fortune = parseInt($("#vache").val());
                    var $zakat = $("#zakat");
                    if ($fortune < 30) {
                        $zakat.html("Vous n'avez pas de zakat à sortir")
                    }
                    else if ($fortune < 40) {
                        $zakat.html("1 bête de 2ans accomplis")
                    }
                    else if ($fortune < 60) {
                        $zakat.html("1 bête de trois ans accomplis")
                    }
                    else if ($fortune < 70) {
                        $zakat.html("1 bête de trois ans accomplis ou bien 2 bêtes de deux ans accomplis")
                    }
                    //choix entre deux modes de prélèvement
                    else if ($fortune > 70) {
                        $zakat.html("(" + $fortune / 30 + ") bêtes de deux ans accomplis ou (" + ($fortune / 40) + ") bêtes de trois ans accomplis")
                    } else {

                    }
                })
                break;
            case 'money' :
                $("#calculer").click(function (e) {
                    e.preventDefault()
                    if ($("#fortune").val() > 0) {
                        if ($("#fortune").val() > 1672698) {
                            var $fortune = parseInt($("#fortune").val());
                            var $zakat = $fortune / 40;
                            $("#zakat").html("Le montant de votre aumone est de " + $zakat + " en Francs CFA ");
                        } else {
                            $("#zakat").html("Vous n'êtes pas soumis a la zakat ");
                        }
                    } else {
                        $("#zakat").html("Veuillez saisir un montant superieur à zero SVP ! ");
                    }
                })
                break;

            // cas des moutons
            case 'mouton' :
                $("#calculer").click(function (e) {
                    e.preventDefault()
                    var $fortune = parseInt($("#mouton").val());
                    var $zakat = $("#zakat");
                    if ($fortune < 40) {
                        $zakat.html("Vous n'avez pas de Zakat à sortir")

                    }
                    else if ($fortune >= 30 && $fortune <= 120) {
                        $zakat.html(" la quantité a donné en aumône est de 1 bête")
                    }
                    else if ($fortune >= 121 && $fortune <= 200) {
                        $zakat.html("La quantité a donné en aumône est de :2 bêtes")
                    }
                    else if ($fortune >= 201 && $fortune <= 399) {
                        $zakat.html("La quantité a donné en aumône est de : 3 bêtes")
                    }
                    else if ($fortune >= 400) {
                        $zakat.html("La quantité a donné en aumône est de : (" + $fortune / 100 + ") bêtes")
                    }
                })
                break;
            //cas des chameaux
            case 'chameaux' :
                $("#calculer").click(function (e) {
                    e.preventDefault()
                    var $fortune = parseInt($("#chameaux").val());
                    var $zakat = $("#zakat");
                    if ($fortune < 5) {
                        $zakat.html("Vous n'avez pas de Zakat à sortir")
                    }
                    else if ($fortune >= 5 && $fortune <= 9) {
                        $zakat.html("Votre Zakat est de 1 mouton ou chèvre")
                    }
                    else if ($fortune >= 10 && $fortune <= 14) {
                        $zakat.html("Votre Zakat est de 2 moutons ou chèvres")
                    }
                    else if ($fortune >= 15 && $fortune <= 19) {
                        $zakat.html("Votre Zakat est de 3 moutons ou chèvres")
                    }
                    else if ($fortune >= 20 && $fortune <= 24) {
                        $zakat.html("Votre Zakat est de 4 moutons ou chèvres")
                    }
                    else if ($fortune >= 25 && $fortune <= 35) {
                        $zakat.html("Votre Zakat est de 1 chamelle agée 1 an accompli")
                    }
                    else if ($fortune >= 36 && $fortune <= 45) {
                        $zakat.html("Votre Zakat est de 1 chamelle agée 2 ans accompli")
                    }
                    else if ($fortune >= 46 && $fortune <= 60) {
                        $zakat.html("Votre Zakat est de 1 chamelle agée 3 ans accompli")
                    }
                    else if ($fortune >= 61 && $fortune <= 75) {
                        $zakat.html("Votre Zakat est de 1 chamelle agée 4 ans accompli")
                    }
                    else if ($fortune >= 76 && $fortune <= 90) {
                        $zakat.html("Votre Zakat est de 2 chamelles agées 2 ans accompli")
                    }
                    else if ($fortune >= 91 && $fortune <= 120) {
                        $zakat.html("Votre Zakat est de 2 chamelles agées 3 an accompli")
                    }
                    else if ($fortune > 121 && $fortune <= 129) {
                        $zakat.html("Votre Zakat est de 2 chamelles agées 3 ans accompli")
                    }
                    else if ($fortune >= 130) {
                        $zakat.html("Votre Zakat est de (" + Math.round($fortune / 40) + ") chamelles agées 2 ans accomplis ou de (" + Math.round($fortune / 50) + ") chamelles agées de 3 ans accomplis.")
                    }
                })
                break;
            //cas des recoltes
            case 'recoltes' :
                $("#calculer").click(function (e) {
                    e.preventDefault()
                    var $quantite = parseInt($("#recolte").val())
                    var $jpayer = parseInt($("#jpayer").val())
                    var $jpluies = parseInt($("#jpluies").val())
                    var $zakat = $("#zakat")
                    var $aumone = 0
                    if ($quantite < 612) {
                        $zakat.html("Vu la quantite de votre recolte vous  n'etes pas soumis a la Zakat")
                    }
                    else {
                        $aumone = $quantite * (0.05 * $jpayer / ($jpayer + $jpluies) + 0.1 * $jpluies / ($jpayer + $jpluies))
                        $zakat.html("la quantité à donner en aumône est de : " + Math.round($aumone) + " en kilogrammes")
                    }
                })
                break;
            default :
                break;
        }
    })
</script>
<?php include "include/footer.php";
?>
</body>
</html>
