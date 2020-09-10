<?php include('include/header.php'); ?>
    <!-- end header -->
    <br>
  <div class="jumbotron">
    <div class="container">
      <h4>Contato</h4>
    </div>
  </div>  
  <section id="content">
    <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=pt-Br&amp;q=Rua%20Doutor%20Armando%20Salles%20de%20Oliveira%2C%20311%20%20Centro%20%20Araras%20-%20SP%20+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="container">
      <div class="row">
        <br>
        <br>
        <div class="span8">
          <h4>Entre em contato</h4>



          <form id="contactform" action="config/grava_comentario.php" method="post" role="form" class="contactForm">

            <!--<div id="sendmessage"></div>
            <div id="errormessage"></div>-->

            <div class="row">
              <div class="span4 field form-group">
                <label>Nome*</label>
                <input type="text" name="name" placeholder="Digite seu nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                <div class="validation"></div>
              </div>
              <div class="span4 field form-group">
                <label>Email*</label>
                <input type="text" name="email" placeholder="Digite seu email" data-rule="email" data-msg="Please enter a valid email" required />
                <div class="validation"></div>
              </div>
              <div class="span8 margintop10 field form-group">
                <label>Assunto*</label>
                <input type="text" name="assunto" placeholder="Digite o assunto" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
                <div class="validation"></div>
              </div>
              <div class="span8 margintop10 field form-group">
                <label>Mensagem Contato*</label>
                <textarea rows="12" name="text_contato" class="input-block-level" placeholder="" data-rule="required" data-msg="Please write something" required></textarea>
                <div class="validation"></div>

                <p>
                  <button class="btn btn-color margintop10 pull-left" type="submit">Enviar mensagem</button>
                  <span class="pull-right margintop20">* Campos Obrigatorios</span>
                </p>
              </div>
            </div>
          </form>
        </div>
        <div class="span4">
          <div class="clearfix"></div>
          <aside class="right-sidebar">

            <div class="widget">
              <h5 class="widgetheading">Contato Informações<span></span></h5>

              <ul class="contact-info">
                <li><label>Endereço</label> ETEC Pref. Alberto Feres Extensão Cesário Coimbra <br />Rua Doutor Armando Salles de Oliveira, 311 </li>
                <i class="icon-phone"></i> (19) 3541-2819 ou (19) 3551-4012 <br>
                <i class="icon-envelope-alt"></i> secretaria@albertoferes.com.br
              </ul>

            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
<?php include('include/footer.php'); ?>