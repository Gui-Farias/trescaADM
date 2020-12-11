<?php include 'head.php' ?>
<body>

    <?php include 'header.php' ?>

    <div class="section is-hero has-gradient position-relative overflow-hidden is-subpage">
        <div class="container position-relative">
            <div class="col block-centered text-align-center lg-7 md-12">
                <h1>Entre em contato</h1>
                <div class="is-heading-color">Quer saber como alavancar seu negócio? Entre em contato conosco, nós temos a solução ideal.</div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container is-narrow">
            <div class="col lg-12">
                <div class="w-form">
                    <form id="email-form" name="email-form" data-name="Email Form" form action="enviar.php" method="post">
                        <div class="container container-nested">
                            <div class="col lg-4 md-12">
                                <div class="size-h3">Sobre Você</div>
                            </div>
                            <div class="col lg-8 md-12">
                                <label for="name-2" class="form-label">Nome *</label>
                                <input type="text" class="form-input-text w-input" maxlength="256" name="name" data-name="Name" id="name" required="">
                                <label for="name-2" class="form-label">Assunto *</label>
                                <input type="text" class="form-input-text w-input" maxlength="256" name="assunto" data-name="assunto" id="assunto" required="">
                                <label for="email-5" class="form-label">Email *</label>
                                <input type="email" class="form-input-text w-input" maxlength="256" name="email-5" data-name="Email 5" id="email-5" required="">
                                <label for="Phone" class="form-label">Numero de celular *</label>
                                <input type="tel" maxlength="256" name="Phone" data-name="Phone" id="Phone" class="form-input-text w-input">
                            </div>
                        </div>
                        <div class="container container-nested">
                            <div class="col lg-4 md-12">
                                <div class="size-h3">Sua Mensagem *</div>
                            </div>
                            <div class="col lg-8 md-12">
                                <textarea data-name="Message" maxlength="5000" id="Message" name="Message" class="form-textarea margin-bottom-quad w-input"></textarea>
                                <input type="submit" value="Enviar" data-wait="Please wait..." class="button-primary w-button"></div>
                        </div>
                    </form>
                    <div class="w-form-done">
                        <div>Obrigado, sua Mensagem nos foi enviada!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Algo deu errado ao enviar a mensagem.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mapaContato" >
            <div class="contatoTxt">
                <p>
                    (11) 99628-5086 </br>

(11) 4385-7749</br>

Onde estamos</br>

Estrada São Francisco, 1850 -  2° Andar - Jardim Henriqueta
                </p>
            </div>
            <div class="contatoMaps">
                <iframe width="100%" height="330" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=330&amp;hl=en&amp;q=Estrada%20S%C3%A3o%20Francisco,%201850%20-%20%202%C2%B0%20Andar%20-%20Jardim%20Henriqueta+(TRESCAADM)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>
    </div>
<?php include 'footer.php' ?>