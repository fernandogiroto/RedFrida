<?php wp_footer(); ?>
<!-- Footer -->
<section>
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126" style="enable-background:new 0 0 1440 126;" xml:space="preserve">
    <path class="st0" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z" />
  </svg>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-3 mb-4 mb-md-2">
          <?php dynamic_sidebar('footer-sidebar-first'); ?>
        </div>
        <div class="col-12 col-md-3 mb-4 mb-md-2">
          <?php dynamic_sidebar('footer-sidebar-second'); ?>
          <!--
            <h4>
              Menu
            </h4>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link pl-0 text-dark active" href="sobre.html">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-0 text-dark " href="portfolio.html">Portfólio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-0 text-dark " href="contacto.html">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link pl-0 text-dark " href="#">Loja Online</a>
              </li>
            </ul>
            !-->
        </div>
        <div class="col-12 col-md-3 mb-4 mb-md-2">
          <?php dynamic_sidebar('footer-sidebar-third'); ?>
        </div>
        <div class="col-12 col-md-3 mb-4 mb-md-2">
          <h4>
            Newsletter
          </h4>
          <form>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com">
            </div>
            <button type="submit" class="btn btn-block btn-color">Inscrever-me</button>
          </form>
        </div>
        <div class="col-12 text-center">
          <p class="pt-4 mt-4 border-top">Mundo Digital - 2020 ©Todos os direitos reservados | Design by <a href="#" class="text-color">@fernandoportugal</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Como podemos ajudar?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom01">First name</label>
              <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationCustom02">Last name</label>
              <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom01">First name</label>
              <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationCustom02">Last name</label>
              <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button class="btn btn-color py-2 px-3 title" type="submit"> <i class="far fa-paper-plane pr-1"></i>Enviar
              Formulário</button>
          </div>
        </form>

        <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function() {
            'use strict';
            window.addEventListener('load', function() {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();
        </script>
      </div>

    </div>
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url') ?>/assets/js/typewriter.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://kit.fontawesome.com/7f3259ccfc.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>

</html>

