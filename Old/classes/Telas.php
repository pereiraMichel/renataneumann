<?php


/**
 * Description of telas
 *
 * @author Debug
 */
class Telas {
    
    public function imagemLogo(){
        echo "<img src='images/LogomarcaDocumentos.png' title='Renata Neumann - Psicóloga' width='250' height='150' />";
//        echo "<img src='images/logoPaulaDesign.png' title='Paula Design Floral' width='250' height='120' />";
    }
    
    public function telaServicos(){

        //echo "<meta http-equiv='refresh' content='5;url=index.php?m=servicos'>";

        echo "<div id='home-slider' class='carousel slide carousel-fade' data-ride='carousel' style='position: static;'>";
        echo "  <div class='carousel-inner'>";
        echo "      <div class='item active' style='background-image: url(images/slider/bosque.jpg);'>";
        echo "          <div class='col-sm-2'>";
        echo "              &nbsp;";
        echo "          </div>";
        echo "          <div class='col-sm-8' style='padding-top: 500px;'>";
        echo "              <div class='caption'>";
        echo "                  <h1 class='animated fadeInLeftBig' style='font-size: 30px;'>";
        echo "                      <img src='images/team/perfil.jpg' alt='Renata Neumann Psicóloga' title='Renata Neumann - Psicóloga' class='img-circle' width='200px' height='200px'><br><br>";
        echo "                          Renata Neumann<br> <h3 style='color: #fff;'>Psicóloga Clínica | Psicopedagoga</h3>";
        echo "                  </h1>";
        echo "                  <p>";
//        echo "                      Cursos realizados: Interpretação de desenho infantil, Sandplay Therapy - Avaliação pela caixa de areia, Técnicas de atendimento psicoterápico a criança e Psicopatologia infantil";
        echo "                  </p>";
        echo "                  <p class='animated fadeInRightBig' style='text-transform: none;'>";
        echo "                          <p style='height: 0px;'>&nbsp;</p>";
        echo "                          <span style='font-family: sans-serif; font-size: 16px; color: #fff; text-transform: none;  line-height: 2em;'>";
        echo "                              Sou Psicóloga Clínica e utilizo como base teórica para o meu trabalho a <b>Gestalt- Terapia</b>.";
        echo "                              O atendimento clínico é individual, a crianças, adolescentes e adultos que necessitem de acompanhamento em psicoterapia.<br> 
                                            O objetivo da psicoterapia é dar ao indivíduo uma qualidade de vida, ajudando-o a compreender-se melhor, aos seus problemas e as pessoas que vivem ao seu redor. A saúde não está relacionada diretamente com a ausência de doenças, mas sim com o bem estar físico, mental e social.<br>";
        echo "                              As sessões tem duração de 50 minutos, semanalmente, sempre no mesmo dia da semana e horário.<br><br>";
        echo "                              Especializações direcionadas ao atendimento clínico infantil:<br>";
        echo "                              Desnvolvimento infantil | ";
        echo "                              Psicopatologia infantil | ";
        echo "                              O desenho infantil | ";
        echo "                              Mediação escolar | ";
        echo "                              Caixa de areia | ";
        echo "                              Psicopedagogia clínica e institucional";
        echo "                          </span>";
        echo "                  </p>";
        echo "              </div>";//caption
        echo "          </div>";//div sm-12
        echo "          <div class='col-sm-2'>";
        echo "              &nbsp;";
        echo "          </div>";
        echo "      </div>";//item active
        echo "  </div>";//carrousel
        echo "</div>";



/*        echo "<div class='col-sm-1'>";
        echo "  &nbsp;";
        echo "</div>";

        echo "<div class='col-sm-10'>";
        echo "<div class='sessaoFundo' style='height: auto; padding-top: 50px;'>";
        echo "  <div class='slogan' id='sessao'>";
        echo "      <div class='caption'>";
        echo "          <img src='images/team/perfil.jpg' alt='Renata Neumann Psicóloga' title='Renata Neumann - Psicóloga' class='img-circle' width='200px' height='200px'><br><br>";
        echo "              <span style='font-family: sans-serif; font-size: 18px; color: #fff; font-weight: normal; padding-left: 10px; padding-right: 10px; text-align: center;'>";
        echo "                  Renata Neumann<br> Psicóloga | Psicopedagoga";
        echo "              </span>";

        echo "          <p class='animated fadeInRightBig'>";
        echo "              <p style='height: 0px;'>&nbsp;</p>";
        echo "              <span style='font-family: sans-serif; font-size: 18px; color: #fff; font-weight: normal; padding-left: 10px; padding-right: 10px;'>";
        echo "  Sou Psicóloga Clínica e utilizo como base teórica para o meu trabalho a <b>Gestalt- Terapia</b>.<br><br>";
        echo "  O atendimento clínico é individual, a crianças, adolescentes e adultos que necessitem de acompanhamento em psicoterapia.<br> O objetivo da psicoterapia é dar ao indivíduo uma qualidade de vida, ajudando-o a compreender-se melhor, aos seus problemas e as pessoas que vivem ao seu redor.<br><br>A saúde não está relacionada diretamente com a ausência de doenças, mas sim com o bem estar físico, mental e social.<br>";
        echo "  As sessões tem duração de 50 minutos, semanalmente, sempre no mesmo dia da semana e horário.<br>";
        echo "  Especializações direcionadas ao atendimento clínico infantil:<br><br>";
        echo "  - Desnvolvimento infantil<br><br>";
        echo "  - Psicopatologia infantil<br><br>";
        echo "  - O desenho infantil<br><br>";
        echo "  - Mediação escolar<br><br>";
        echo "  - Caixa de areia<br><br>";
        echo "  - Psicopedagogia clínica e institucional";
        echo "              </span>";
        echo "          </p>";
        echo "      </div>";//fecha a div caption
        echo "  </div>";//fecha a div slogan
        echo "</div>";//fecha a div sessaoFundo
        echo "</div>";

        echo "<div class='col-sm-1'>";
        echo "  &nbsp;";
        echo "</div>";
*/

    }

    public function telaContato(){


        echo "<section id='contact' class='contato' style='background-image: url(images/slider/bosque.jpg);'>";
        echo "  <div id='contact-us' class='parallax'>";
        echo "      <div class='container'>";
        echo "          <div class='row'>";

        echo "<div class='contact-form wow fadeIn' data-wow-duration='1000ms' data-wow-delay='600ms'>";
        echo "  <div class='row'>";
        echo "      <div class='col-sm-6'>";
        echo "          <div class='contact-info wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
        echo "              <p>";
        echo "                  Preencha todos os campos. Fique à vontade para qualquer forma de comunicação.";
        echo "              </p>";
        echo"               <ul class='address' style='font-size: 18px;'>";
        echo "                  <li><i class='fa fa-map-marker'></i> <span> Endereço:</span> Av. 28 de Setembro, 44 - Sala 609<br>Vila Isabel, Rio de Janeiro, RJ </li>";
        echo "                  <li><i class='fa fa-phone'></i> <span> Telefone:</span> +55 21 3226-8231  </li>";
        echo "                  <li>";
        echo "                      <i class='fa fa-whatsapp'></i> <span> Whatsapp:</span>";
        echo "                          +55 21 99723-2497  ";
        echo "                  </li>";
        echo "                  <li>";
        echo "                      <i class='fa fa-envelope'></i> <span> Email:</span>";
        echo "                      <a href='mailto:renataneumannpsico@gmail.com'> ";
        echo "                          renataneumannpsico@gmail.com";
        echo "                      </a>";
        echo "                  </li>";
        echo "                  <li>";
        echo "                      <i class='fa fa-globe'></i> ";
        echo "                      <span> Website:</span> ";
        echo "                          <a href='http://www.renataneumannpsico.com.br'>";
        echo "                              www.renataneumannpsico.com.br";
        echo "                          </a>";
        echo "                  </li>";
        echo "              </ul>";
        echo "          </div>";//fecha a div contact-info
        echo "              <div style='display: none;' id='sucesso'>";
        echo "                  <p class='alert alert-success' id='sucesso'>";
        echo "                      <button type='button' class='close' data-dismiss='alert'>&times;</button>";
        echo "                      Mensagem enviada com sucesso. Brevemente, entraremos em contato.";
        echo "                  </p>";
        echo "              </div>";
        echo "              <div style='display: none;' id='erro'>";
        echo "                  <p class='alert alert-danger' id='mensagemErro'>";
        echo "                      <button type='button' class='close' data-dismiss='alert'>&times;</button>";
        echo "                      Ocorreu um erro. Tente novamente mais tarde ou envie para o e-mail renata@renataneumannpsico.com.br, do seu navegador.";
        echo "                  </p>";
        echo "              </div>";
        echo "      </div>";//fecha a div col-sm-6
        echo "      <div class='col-sm-6' style='background-color: rgba(0,0,0,.7)'>";
        echo "          <p>&nbsp;</p>";
        echo "          <form id='main-contact-form' name='contact-form' method='post' action='index.php?m=contato&a=c'>";
        echo "              <div class='row wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='300ms'>";
        echo "                  <div class='col-sm-6'>";
        echo "                      <div class='form-group'>";
        echo "                          <input type='text' name='name' class='form-control' placeholder='Nome' required='required' id='corFontePlace'>";
        echo "                      </div>";
        echo "                  </div>";
        echo "                  <div class='col-sm-6'>";
        echo "                      <div class='form-group'>";
        echo "                          <input type='email' name='email' class='form-control' placeholder='Endereço de E-mail' required='required' id='corFontePlace'>";
        echo "                      </div>";
        echo "                  </div>";
        echo "              </div>";
        echo "              <div class='form-group'>";
        echo "                  <input type='text' name='titulo' class='form-control' placeholder='Assunto' required='required' id='corFontePlace'>";
        echo "              </div>";
        echo "              <div class='form-group'>";
        echo "                  <textarea name='mensagem' class='form-control' rows='4' placeholder='Digite sua mensagem' required='required' id='corFontePlace'></textarea>";
        echo "              </div>";
        echo "              <div class='form-group'>";
        echo "                  <button type='submit' class='btn-submit' onclick='javascript: ativaMensagem()'>Enviar</button>";
        echo "              </div>";
        echo "          </form>";
        echo "      </div>";//fecha a div col-sm-6
        echo "  </div>";//fecha a div row
        echo "</div>";//fecha a div contact-form

        echo "          </div>";
        echo "      </div>";
        echo "  </div>";
//                                echo "</div>";
        echo "</section>";


        error_reporting(E_ALL);
        error_reporting(E_STRICT);
        $ip = getenv("REMOTE_ADDR");
        if ($_POST) {
            $send = new sendmessage();

            $nome = filter_input(INPUT_POST, 'name');
            $email = filter_input(INPUT_POST, 'email');
            $titulo = filter_input(INPUT_POST, 'titulo');
            $mensagem = filter_input(INPUT_POST, 'mensagem');

//            echo "Nome: ".$nome;
//            echo "E-mail: ".$email;
//            echo "Título: ".$titulo;
//            echo "Mensagem: ".$mensagem;
            
            $send->setNome($nome);
            $send->setEmail($email);
            $send->setTitulo($titulo);
            $send->setMensagem($mensagem);

            $corpo = "Nome: $nome<br> E-mail: $email";
//            $send->enviaMensagem();
            $send->enviaMensagemGmail($para, $de, $de_nome, $assunto, $corpo);
        }
        
    }
    
    public function telaInicial(){

        echo "<div class='sessaoFundo'>";
        echo "  <div class='slogan' id='sessao'>";
        echo "      <div class='caption'>";
        echo "          <p class='animated fadeInRightBig'>";
        echo "              <p style='height: 35px;'>&nbsp;</p>";
        echo "                  <span style='font-family: sans-serif; font-size: 18px;'>";
        echo "                      Desenvolvimento infantil, Psicopatologia infantil, O desenho infantil, <br><br>Mediação escolar, Caixa de areia e Psicopedagogia clínica e institucional.";
        echo "                  </span>";
        echo "                  <section>";
        echo "                  </section>";
        echo "          </p>";
        echo "      </div>";//fecha a div caption
        echo "  </div>";//fecha a div slogan
        echo "</div>";//fecha a div sessaoFundo
        
    }
    
}
