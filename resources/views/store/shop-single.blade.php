<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pag &mdash; Mota</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

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
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="shop.html">Store</a></li>
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
            <a href="/cart" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>


    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a href="shop.html">Store</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{ $product->name }}</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mr-auto">
            <div class="border text-center">
              <img src="{{ $product->image }}" alt="Image" class="img-fluid p-5">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="text-black">{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>


            <p><del>R${{ 1.1*$product->price }}</del> <strong class="text-primary h4">R${{ $product->price }}</strong></p>



            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 220px;">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                </div>
                <input type="text" class="form-control text-center" value="1" id="quantity" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <div class="input-group-append">
                  <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                </div>
              </div>

            </div>
            <p><a href="#" id="addCart" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Adicionar</a></p>

            <div class="mt-5">
              <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Ordering Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Specifications</a>
                </li>

              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <table class="table custom-table">
                    <thead>
                      <th>Material</th>
                      <th>Description</th>
                      <th>Packaging</th>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>1 BT</td>
                      </tr>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>144/CS</td>
                      </tr>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>1 EA</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                  <table class="table custom-table">

                    <tbody>
                      <tr>
                        <td>HPIS CODE</td>
                        <td class="bg-light">999_200_40_0</td>
                      </tr>
                      <tr>
                        <td>HEALTHCARE PROVIDERS ONLY</td>
                        <td class="bg-light">No</td>
                      </tr>
                      <tr>
                        <td>LATEX FREE</td>
                        <td class="bg-light">Yes, No</td>
                      </tr>
                      <tr>
                        <td>MEDICATION ROUTE</td>
                        <td class="bg-light">Topical</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div>


          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: asset('images/hero_bg_2.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-7">
            <h3 class="text-white">Sign up for discount up to 55% OFF</h3>
            <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam.</p>
            <p class="mb-0"><a href="#" class="btn btn-outline-white">Sign up</a></p>
          </div>
        </div>
      </div>
    </div>
    <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About <strong class="text-primary">Pharmative</strong></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                sed dolorum excepturi iure eaque, aut unde.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Navigation</h3>
            <ul class="list-unstyled">
              <li><a href="#">Supplements</a></li>
              <li><a href="#">Vitamins</a></li>
              <li><a href="#">Diet &amp; Nutrition</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
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
              </script> All rights reserved | This template is made
              with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>
  <script src="{{ asset('/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('/js/jquery-ui.js')}}"></script>
  <script src="{{ asset('/js/popper.min.js')}}"></script>
  <script src="{{ asset('/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('/js/aos.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
  <script src="{{ asset('/js/main.js')}}"></script>

  <script>
    $(document).ready(function() {
      // localStorage.clear();
      console.log(JSON.parse(localStorage.getItem("products_cart")));
      // Cookies.set('foo', 'bar');
      console.log(Cookies.get('products_cart'));
      $('#addCart').click(function() {
        $.ajax({
          type: "GET",
          url: "/check",
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(response) {
            let products_cart = new Array()

            // alert("ok");
            if (parseInt(response) == 0) { //não está logado, armazenar o carrinho
              if (localStorage.hasOwnProperty("products_cart")) {
                products_cart = JSON.parse(localStorage.getItem("products_cart"));
              }
              if(Cookies.get("products_cart") == undefined){
                products_cartC = JSON.parse(Cookies.get('products_cart'));
                console.log("nao tem");
              }else{
                console.log("tem");
              }
             

              products_cart.push({
                'product-id': <?= $product->id ?>,
                'quantity': parseInt($('#quantity').val()), //salvar nome, foto etc tb pra listar no carrinho
                'product-price': <?= $product->price  ?>,
                'product-image': escape('<?= $product->image ?>'),
                'product-name': escape('<?= $product->name ?>')
              });

              localStorage.setItem("products_cart", JSON.stringify(products_cart));
              Cookies.set("products_cart", JSON.stringify(products_cart));
            } else {
              $.ajax({
                type: "POST",
                url: "/cart",
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                  "product-id": '{{ $product->id }}',
                  "quantity": $('#quantity').val()
                },
                success: function(response) {
                  alert(response);
                  alert("adicionado com sucesso ao carrinho"); //tratar caso já tenha adicionado no carrinho esse item
                },
                error: function(response) {
                  alert(response);
                }

              });
            }
          },
          error: function(response) {
            alert("n ok");
            alert(response);

          }
        });


        alert('');

      });
    });
  </script>
</body>

</html>