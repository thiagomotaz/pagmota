<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pag &mdash; Mota</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('/fonts/icomoon/style.css') }}">

  <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/fonts/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css') }}">


  <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>
      <!-- {@foreach ($products as $user)
      <p>This is user {{ $user->id }}</p>
      @endforeach} -->
      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone"><strong class="text-primary">pag</strong>Mota</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="shop.html">Store</a></li>
                <li class="has-children">
                  <a href="#">Products</a>
                  <ul class="dropdown">
                    <li><a href="#">Supplements</a></li>
                    <li class="has-children">
                      <a href="#">Vitamins</a>
                      <ul class="dropdown">
                        <li><a href="#">Supplements</a></li>
                        <li><a href="#">Vitamins</a></li>
                        <li><a href="#">Diet &amp; Nutrition</a></li>
                        <li><a href="#">Tea &amp; Coffee</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Diet &amp; Nutrition</a></li>
                    <li><a href="#">Tea &amp; Coffee</a></li>

                  </ul>
                </li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="cart.html" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>


    <div class="owl-carousel owl-single px-0">
      <div class="site-blocks-cover overlay" style="background-image: url('images/hero_bg.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0"><strong class="text-primary">Farmácia</strong> Aberta 24 Horas</h1>

                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex perspiciatis non quibusdam vel quidem.</p>
                  </div>
                </div>

                <p><a href="#" class="btn btn-primary px-5 py-3">Compre agora</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url('images/hero_bg_2.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0">Novos Medicamentos <strong class="text-primary">Sempre</strong></h1>
                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex perspiciatis non quibusdam vel quidem.</p>
                  </div>
                </div>
                <p><a href="#" class="btn btn-primary px-5 py-3">Compre agora</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>



    <div class="site-section py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-24-hours-drugs-delivery"></span>
              <h3><a href="#">Entrega grátis</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque labore .</p>
              <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Ver mais</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-medicine"></span>
              <h3><a href="#">Variedade de medicamentos</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque labore .</p>
              <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Ver mais</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-test-tubes"></span>
              <h3><a href="#">Menor preço</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque labore .</p>
              <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Ver mais</span> <span class="icon-keyboard_arrow_right"></span></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2>Mais <strong class="text-primary">Vendidos</strong></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
              @foreach ($products as $product)
              

              <div class="text-center item mb-4 item-v2">
                <span class="onsale">Oferta</span>
                <a href="product/{{ $product->id }}"> <img src="{{ $product->image }}" alt="Image" height=350px></a>
                <h3 class="text-dark"><a href="product/{{ $product->id }}">{{ $product->name }}</a></h3>
                <p class="price">R${{ $product->price }}</p>
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-7">
            <h3 class="text-white">Cadastre-se para descontos de até 55% OFF</h3>
            <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam.</p>
            <p class="mb-0"><a href="#" class="btn btn-outline-white">Cadastrar</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-6">
            <div class="title-section">
              <h2>Consumidores <strong class="text-primary">Satisfeitos</strong></h2>
            </div>
            <div class="block-3 products-wrap">
              <div class="owl-single no-direction owl-carousel">

                <div class="testimony">
                  <blockquote>
                    <img src="images/person_1.jpg" alt="Image" class="img-fluid">
                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat unde.&rdquo;</p>
                  </blockquote>

                  <p class="author">&mdash; Luiza Rosa</p>
                </div>

                <div class="testimony">
                  <blockquote>
                    <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                      obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                      unde.&rdquo;</p>
                  </blockquote>

                  <p class="author">&mdash; Pedro Mota</p>
                </div>

                <div class="testimony">
                  <blockquote>
                    <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                      obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                      unde.&rdquo;</p>
                  </blockquote>

                  <p class="author">&mdash; Mathews Azevedo</p>
                </div>

                <div class="testimony">
                  <blockquote>
                    <img src="images/person_4.jpg" alt="Image" class="img-fluid">
                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                      obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                      unde.&rdquo;</p>
                  </blockquote>

                  <p class="author">&mdash; José Silva</p>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="title-section">
              <h2 class="mb-5">Porque <strong class="text-primary">Nós</strong></h2>
              <div class="step-number d-flex mb-4">
                <span>1</span>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore</p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>2</span>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore</p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>3</span>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">Sobre <strong class="text-primary">Nós</strong></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                sed dolorum excepturi iure eaque, aut unde.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Navegação</h3>
            <ul class="list-unstyled">
              <li><a href="#">Supplements</a></li>
              <li><a href="#">Vitamins</a></li>
              <li><a href="#">Diet &amp; Nutrition</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contato</h3>
              <ul class="list-unstyled">
                <li class="address">Rua Moreira Silva, São Paulo, Brasil</li>
                <li class="phone"><a href="tel://23923929210">+55 (21)3254-7458</a></li>
                <li class="email">contato@pagmota.com.br</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script> Todoos os direitos reservados
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>