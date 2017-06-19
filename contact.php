<?php include('header.php');?>

        <!-- main -->

        <main role="main-inner-wrapper" class="container">
            <div class="row">

            	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">

                	<article role="pge-title-content" class="contact-header">
                    	<header>
                        	<h2><span>¡Hola!</span>Envíame un correo y pongámonos en contacto.</h2>
                        </header>
                        <p><a href="tel:+56961689732"><i class="fa fa-phone" aria-hidden="true"></i> +56 9 6168 9732</a><a href="mailto:hola@constanzamorales.cl"><i class="fa fa-envelope" aria-hidden="true"></i> hola@constanzamorales.cl</a></p>
                    </article>
                </div>

                <!-- map -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="demo-wrapper">
                        	<div id="surabaya"></div>
                        </div>

                </div>
                <!-- map -->

                <div class="clearfix"></div>

               <!-- contat-from-wrapper -->
               <div class="contat-from-wrapper">
               		  <div id="message"></div>
                                <form method="post" action="php/contactfrom.php" name="cform" id="cform">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <input  name="name" id="name" type="text" placeholder="¿Cuál es tu nombre?">
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                <input  name="email" id="email" type="email"  placeholder="¿Y tu email?">
                                </div>
                            </div>

                            <div class="clearfix"></div>

                            <textarea name="comments" id="comments" cols="" rows="" placeholder="Escríbeme lo que quieras."></textarea>
                            <div class="clearfix"></div>

                            <input name="" type="submit" value="Enviar email">

                            <div id="simple-msg"></div>

                        </form>

               </div>
               <!-- contat-from-wrapper -->

            </div>
        </main>

    	<!-- main -->
<?php include('footer.php');?>
