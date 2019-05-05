<?php
/**
 * @author: AnwarrProgrammation
 * @date: 9/4/18
 * @time: 5:27 PM
 * @version 0.1
 */

?>
<!doctype html>
<html lang="en">
<head>
<?php require "include/style.php"; ?>
    <title>Daarazakat</title>
    <meta description="Enseignement et calcul de la zakat">
</head>
<body>
<?php
 require "include/header.php";
?>
<!-- Le contenu de la page se trouvera dans cette partie  :
 Un carousel slider , une description tres riche du site qui va permettre au user de comprendre les objectifs du site
-->

<div class="container-fluid">
    <!-- Indicators -->
    <div id="myCarousel" class="row-fluid carousel slide" data-ride="carousel" style="margin-bottom:100px;">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/6.jpg" alt="Chania">
                <div class="carousel-caption"> 
                    <h3 class="f">Daarazakat</h3>
                    <p class="z">Un site de calcul et d'enseignement de la Zakat</p>
                </div>
            </div>
            <div class="item">
                <img src="images/5.jpg" alt="Chania">
                <div class="carousel-caption">
                    <h3 class="f">La zakat </h3>
                    <p class="z">appel&eacute;e sadaqa ou aumône légal constitue le troisieme(3ieme) pilier de l'islam</p>
                </div>
            </div>
            <div class="item">
                <img src="images/9.jpg" alt="Flower">
                <div class="carousel-caption">
                    <h3 class="f">La zakat</h3>
                    <p class="z">Vous voulez la faire mais vous ne savez pas comment ! Vous &ecirc;tes au bon endroit </p>
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    </div>
</div>
    <!-- Mettre du contenu ici -->
    <div class="container-fluid">
        <div class="row-fluid" style="margin-bottom: 100px;">
            <div class="col-md-8 col-lg-8 col-xs-8 col-sm-8">
            Etant conscient de l'intêret que porte la religion sur la zakat ainsi que son attachement à tout activité économique , nous avons eu l'humble idée de conçevoir ce site web facilitant à toute personne aussi faiblement instruite en jurisprudence soit-elle, de s'acquitter de son obligation par un simple calcul.
Daara Zakat est aussi un site d'enseignement spécialisé dans la zakat, et un espace d'échange de connaissance à travers notre page facebook Daara Zakat.
            </div>
        </div>
    <br>
    <br>
    <br>
    <br>

        <div class="row-fluid">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12"  style="background: #F7F7F7;padding-bottom:40px;">
            <h2 class="text-center">Contactez nous !</h2>
                <div class="row"  style="padding-top:60px;">
                    <div class="col-lg-5 col-md-5 col-xs-12 col-sm-12">
                        <div class="info" style="text-align:center">
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p>Dakar, SENEGAL</p>
                        </div>

                        <div>
                            <i class="fa fa-envelope"></i>
                            <p>anwaarsociety17@gmail.com</p>
                        </div>

                        <div>
                            <i class="fa fa-phone"></i>
                            <p>+ 212 60 283 28 50</p></br>
                            <i class="fa fa-phone"></i>
                            <p>  + 221 77 469 89 44</p></br>
                        
                            <p><strong>Cliquez sur l'icône pour nous joindre sur Facebook</strong></p>
                        </div>
                        </div>

                        <div class="social-links" style="text-align:center">
                            <!--
                            <a class="btn btn-social-icon btn-facebook" href="#" target="_blank"> 
                                <span class="fa fa-facebook"></span> -->
                            </a>
                            <a class="btn btn-social-icon btn-whatsapp" href="https://www.facebook.com/Daara-Zakat-1795145077446416/" target="blank"><img src="images/icon1.jpg" alt="">
                               <!-- <span class="fa fa-whatsapp"></span> -->
                               <span class="fa fa-facebook"></span>
                            </a> 
                        </div>
                    </div> 

                    <div class="col-lg-7 col-md-7 col-xs-12 col-sm-12" style="padding-right:50px;">
                    <form action="mail.php" type="POST" class="form contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                            </div>
                            <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Oject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                            </div>
                            <div class="form-group">
                            <textarea class="form-control" id="message" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Commentaire"></textarea>
                            <div class="validation"></div>
                            </div>
                            <div class="text-center"><button id="mail" type="submit" class="btn btn-success pull-right">Envoyer</button></div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>


<!-- fin corps du site -->

<!--Le footer -->
 
<?php include "include/footer.php";?>
<!--Fin footer-->
<style>
    .carousel-control.left
			{
				background: none;
			}
			.carousel-control.right
			{
				background: none;
			}

			.carousel-control
			{
				position: absolute;
				top: 45%;
				bottom: 0;
				left: 0;
				width: 15%;
				font-size: auto;
				color: #fff;
				text-align: center;
				opacity: 1;
				text-shadow: none;
			}
			.carousel-control:hover
			{
				color: #000;
			}
			.carousel-indicators
			{
				bottom: 1;
			}
			.carousel-indicators li
			{
				display: inline-block;
				width: 10px;
				height: 10px;
				margin: 1px;
				text-indent: -999px;
				cursor: pointer;
				background-color: #000\9;
				background-color: rgba(0,0,0,0);
				border: 1px solid #16a085;
				border-radius: 50%;
			}
			.carousel-indicators .active
			{
				width: 12px;
				height: 12px;
				margin: 0;
				background-color: #16a085;
			}
			.carousel-caption
			{
				/**position: absolute;
				right: 0;
				bottom: 0;
				left: 0;*/
				z-index: 1;
				padding-top: 20px;
				padding-bottom: 20px;
				color: #fff;
				text-align: center;
				border-radius : 40px;
				background: rgba(0,0,0,0.9);
			}

            .item img{
                width: 100%;
                height : 500px;
            }

            .goToTop {
                position: fixed;
                top: 0;
                /* height: 80px; */
                z-index: 4;
                width: 100%;
                opacity: 0.9;
            }
</style>
<script>
$(function(){
  $(window).bind('scroll', function() {
    var navHeight = 80; // custom nav height
    ($(window).scrollTop() > navHeight) ? $('.navbar-Top').addClass('goToTop') : $('.navbar-Top').removeClass('goToTop');
  });
});
</script>
<script>
  $(function(){
        $("#mail").click(function(e){
            var ok= 0;

                    e.preventDefault();
            if(ok==0){
                    var nom = $('#name').val()
					var email = $('#email').val()
					var titre = $('#subject').val()
                    var message = $('#message').val()
                    
                    var data={
                        nom : nom,
                        email : email,
                        titre : titre,
                        message : message 
                    };
                    console.log(data)
					$.ajax({
							//type: "POST",
							url: "mail.php",
							data: data,
							success: function(data){
								 console.log(data);
                            },
                            error : function(){
                                console.log("erreur")
                            }
                    });
                    
                    $('#name').val('');
					$('#email').val('');
				    $('#subject').val('');
                    $('#message').val('');
                    ok=1;
				}else{
				
                }
				
        });
  });

</script>
</body>
</html>
