<?php
    // Importar as classes 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    // Carregar o autoloader do composer
    require 'vendor/autoload.php';
    // Instância da classe
    $mail = new PHPMailer(true);
    try
    { 
        // Configurações do servidor3
        
        $mail->isSMTP();        //Devine o uso de SMTP no envio
        
        $mail->SMTPAuth = true; //Habilita a autenticação SMTP
        $mail->Username   = 'contatotrescaadm@gmail.com';
        $mail->Password   = 'Nandos,1287';
        // Criptografia do envio SSL também é aceito
        $mail->SMTPSecure = 'tsl';

        // Informações específicadas pelo Google
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        // Define o remetente
        $mail->setFrom('contato@trescaadm.com.br', 'TrescaADM');
        // Define o destinatário
        $mail->addAddress('contato@trescaadm.com.br', 'Destinatário');
        // Conteúdo da mensagem
        $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
        $mail->SetLanguage('pt-br', './vendor/phpmailer/phpmailer/language/');
        $mail->CharSet = 'utf-8';
        $mail->Subject = $_POST['assunto'];
        $mail->Body = 
            "<table class='content' align='center' cellpadding='0' cellspacing='0' border='0'>
                <tr>
                <table width='70' align='left' border='0' cellpadding='0' cellspacing='0'>
                        <tr>
                            <td height='70' style='padding: 0 20px 20px 0;'>
                                <img src='https://trescaadm.com.br/images/logoico.png' width='80' height='80' border='0' alt='logo trescaadm' / >
                            </td>
                        </tr>
                    </table>
                    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                        <tr>
                            <td class='h1' style='padding: 5px 0 0 0;'>
                                {$_POST["name"]}
                            </td>
                        </tr>
                        <tr>
                            <td class='h2'>
                                {$_POST['assunto']}
                            </td>
                        </tr>

                    </table>

                    <tr>
                        <td class='innerpadding borderbottom'>
                            <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                                <tr>
                                    <td class='h2'>
                                        {$_POST['Message']}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
                        <tr>
                            <td class='h1' style='padding: 5px 0 0 0;'>
                                {$_POST["email-5"]}
                            </td>
                        </tr>
                        <tr>
                            <td class='h2'>
                                {$_POST['Phone']}
                            </td>
                        </tr>

                    </table>
                </tr>
            </table>
            
            <style type='text/css'>
                .header {padding: 40px 30px 20px 30px;}
                .subhead {font-size: 15px; color: #ffffff; font-family: sans-serif; letter-spacing: 10px;}
                .h1 {font-size: 33px; line-height: 38px; font-weight: bold;}
                .h1, .h2, .bodycopy {color: #153643; font-family: sans-serif;}

                @media only screen and (min-device-width: 601px) {
                .content {width: 600px !important;}
                }
            </style>";
        $mail->AltBody = 'Este é o cortpo da mensagem para clientes de e-mail que não reconhecem HTML';
        // Enviar
        $mail->send();
        ?>
        <script language="JavaScript">
            <!--
            alert("Sucesso!");
            window.location = '/index.php';
            //-->
        </script>
        <?
    }
    catch (Exception $e)
    {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}