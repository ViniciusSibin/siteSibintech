<script>
if (window.location.href === "https://www.sibintech.com.br/contato.html") {
    window.location.href = "https://www.sibintech.com.br/index.php?pagina=contato.html";
  }
</script>
<?php
    require_once 'assets/funcoes.php';

    if(isset($_POST['enviarFormulario'])){
        $enviado = false;
        $nome_completo = filter_input(INPUT_POST, 'nome_completo', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
        $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

        $corpo_do_email = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Formulário de Contato - sibintech.com.br</title>
        </head>
        <body style="font-size: 15px; font-family: Arial, sans-serif; margin: 0; padding: 0;">
        
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center">
                        <table width="600" border="0" cellspacing="0" cellpadding="15" style="margin: 20px 0; background-color: #DCDCDC; border: 2px solid #000; border-radius: 25px; box-shadow: 0 25px 32px rgba(0, 0, 0, 0.8);">
                            <tr>
                                <td align="center">
                                    <h1 style="color: #000000;"><strong>Formulário de contato do site sibintech.com.br</strong></h1>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="color: #000;"><strong>Mensagem do usuário:</strong></p>
                                    <p style="color: #292626;">' . $mensagem . '</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p style="color: #000;"><strong>Informações do cliente:</strong></p>
                                    <p style="color: #292626;"><strong>Nome:</strong> ' . $nome_completo . '</p>
                                    <p style="color: #292626; text-decoration: none;"><strong>Email:</strong> ' . $email . '</p>
                                    <p style="color: #292626;"><strong>Celular:</strong> ' . $celular . '</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        
        </body>
        </html>
        ';

        // Verificar se todos os campos foram preenchidos corretamente
        if($nome_completo && $email && $celular && $mensagem){
            if(enviarEmail('vinisibim@gmail.com', 'Formulario de contato - SIBINTECH Monitoring', $corpo_do_email)){
                $enviado = true;
                $_POST = false;
                
            } else{
                $enviado = false;
            }            
        }else{
            $enviado = false;
        }
    }
?>
<section id="contato">
    <div class="container p-4">
        <div class="row contato-row p-5">
            <div class="col-3 contato-colunas">
                <h2><i class="fa-solid fa-phone icone-telefone-contato"></i></h2>
                <h3>Fale conosco!</h3>
            </div>
            <div class="col-lg-3 contato-colunas">
                <h4 class="titulo-contatos">Whatsapp<a href="https://api.whatsapp.com/send?phone=5544999620459&text=Ol%C3%A1,%20tudo%20bem?" target="_blank" title="Whatsapp"><img src="assets/icones/whatsapp.png" alt="Icone whatsapp" oncontextmenu="return false" class="wpp-contato-icone ml-2 pb-1"></a></h4>
                <h5><a href="https://api.whatsapp.com/send?phone=5544999620459&text=Ol%C3%A1,%20tudo%20bem?" target="_blank" title="Whatsapp">(44) 99909-1762</a></h5>
            </div>
            <div class="col-lg-3 contato-colunas">
                <h4 class="titulo-contatos">E-Mail</h4>
                <h5 class="email-ctt"><a href="mailto:contato@sibintech.com.br">contato@sibintech.com.br</a></h5>
            </div>
        </div>
    </div><!--AREA DE CONTATO-->
    <div class="container p-4 pb-5">
        <div class="row contato-row p-5">
            <div class="col-3 contato-colunas">
                <h2><i class="fa-solid fa-envelope icone-telefone-contato"></i></h2>
                <h3>Deixe uma mensagem!</h3>
            </div>
            <form class="formulario_contato" action="" method="post"> 
                <input type="text" name="nome_completo" placeholder="Nome completo" id="nome_completo" value="<?php if(isset($_POST['nome_completo'])) echo $nome_completo; ?>">
                <input type="email" name="email" placeholder="exemplo@gmail.com" id="email" value="<?php if(isset($_POST['email'])) echo $email; ?>">
                <input type="text" name="celular" placeholder="(44)98765-4321" id="celular" value="<?php if(isset($_POST['celular'])) echo $celular; ?>">

                <label>Mensagem</label><br>
                <textarea name="mensagem" minlength="5" cols="55" rows="5" required><?php if(isset($_POST['mensagem'])) echo $mensagem; ?></textarea>

                <?php if(isset($enviado) && $enviado){ ?>
                    <p class="alert alert-success">Sua mensagem foi enviada com sucesso.</p>
                <?php } elseif(isset($enviado) && !$enviado) { ?>
                    <p class="alert alert-danger">Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente.</p>
                <?php }?>

                <button id="submit" name="enviarFormulario">Enviar</button>
            </form>
        </div>
    </div><!--AREA DE CONTATO-->
</section><!--CONTATO-->
