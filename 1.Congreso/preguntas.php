<?php 
    $page_titulo = "Preguntas";
    include("inc/header1.inc.html");
?>

<main id="faq">
    
        <div class="container">
            
            <div class="page-header">
            <h1 class="text-center">
              <span class="wow flipInX">
               PREGUNTAS FRECUENTES
              </span>
            </h1>
            </div>
            
            <div class="row">

                <div class="col-md-10 col-md-offset-1 mar-b-30">


                    <!--////////// Accordion Toggle //////////-->
                    <div class="panel-group wow fadeInUp" id="accordion" data-wow-duration="2s">

                        <!-- PANEL 1 -->
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    ¿La entrada al evento es gratuita?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body panel-faq">
                                    <p>No, para poder asistir al evento es necesario registrarse y contratar un paquete que equivale a un boleto por persona.</p>
                                </div>
                            </div>
                        </div>

                        <!-- PANEL 2 -->
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    ¿Dondé puedo pagar mi boleto?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body panel-faq">
                                    <p>En la oficina del capitulo estudiantil SEIMIQ o en los sitios de promoción del evento.</p>
                                </div>
                            </div>
                        </div>

                        <!-- PANEL 3 -->
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    ¿A quién esta dirigido el evento?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body panel-faq">
                                    <p>En general puede asistir cualquier persona, sin embargo, el evento esta enfocado a los estudiantes de licenciatura  en ingeniería en Química.</p>
                                </div>
                            </div>
                        </div>

                        <!-- PANEL 4 -->
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-faq">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    ¿Es necesario ser alumno del ITCM para asistir al evento?
                                    </a>
                                </h4>
                            </div>

                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body panel-faq">
                                    <p>No, también se invitan a personas externas como estudiantes de otros universidades o tecnológicos.</p>
                                </div>
                            </div>
                        </div>

                </div><!-- /col-md-10 -->

            </div>
        </div>

    </main>

<?php 
    include("inc/footer1.inc.html");
?>
