<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharmative &mdash; Colorlib Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <style>
    .modal {
      display: none;
      position: fixed;
      z-index: 1000;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background: rgba(255, 255, 255, .8) url('http://i.stack.imgur.com/FhHRx.gif') 50% 50% no-repeat;
    }

    /* When the body has the loading class, we turn
   the scrollbar off with overflow:hidden */
    body.loading .modal {
      overflow: hidden;
    }

    /* Anytime the body has the loading class, our
   modal element will be visible */
    body.loading .modal {
      display: block;
    }
  </style>
  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

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
              <a href="index.html" class="js-logo-clone"><strong class="text-primary">Pag</strong>Mota</a>
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
            <a href="cart.html" class="icons-btn d-inline-block bag">
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
          <div class="col-md-12 mb-0">
            <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Checkout</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="bg-light rounded p-3">
              <p class="mb-0">Precisa de ajuda? <a href="#" class="d-inline-block">Entre em contato</a></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Detalhes da compra</h2>
            <div class="p-3 p-lg-5 border">

              @if (!isset($buyerInfo[0]))
              <h5>Dados adicionais</h5>
              <h6>Você só preencherá esses dados uma vez.</h6>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_lname" class="text-black">CPF <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="cpf" name="cpf">
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">DDD <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="ddd" name="ddd">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Celular <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="celular" name="celular">
                </div>
              </div>
              <div class="form-group row mb-5">
                <div class="col-md-12">
                  <button type="button" class="btn btn-primary" id="saveUserInfos" style="width: 100%">Salvar</button>
                </div>
              </div>
              @else
              @endif

              @if (!isset($buyerAddress[0]))
              <h5>Dados de entrega</h5>
              <h6>Você só preencherá o endereço uma vez.</h6>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="rua" class="text-black">Endereço <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <input type="text" class="form-control" id="numero" placeholder="Número">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="bairro" placeholder="Bairro">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black">Cidade <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="cidade" name="cidade">
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Estado <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="estado" name="estado">
                </div>
              </div>
              <div class="form-group row mb-5">
                <div class="col-md-12">
                  <button type="button" class="btn btn-primary" id="saveUserAddress" style="width: 100%">Salvar</button>
                </div>
              </div>
              @else
              <h5>Seu endereço</h5>
              <p style="margin:0px">{{$buyerAddress[0]->street}}, {{$buyerAddress[0]->number}}</p>
              <p style="margin:0px">{{$buyerAddress[0]->neighborhood}}</p>
              <p style="margin:0px">{{$buyerAddress[0]->city}}, {{$buyerAddress[0]->state}}</p>
              <div class="form-group">
                <label for="c_ship_different_address" class="text-black" data-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address">
                  Cadastrar outro endereço</label>
                <div class="collapse" id="ship_different_address">
                  <div class="py-2">
                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="street" class="text-black">Endereço <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="street" name="street" placeholder="Rua">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Número">
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Bairro">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="c_state_country" class="text-black">Cidade <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                      </div>
                      <div class="col-md-6">
                        <label for="c_postal_zip" class="text-black">Cep <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                      </div>
                    </div>

                  </div>

                </div>
              </div>

              @endif




              <div class="form-group">
                <label for="c_order_notes" class="text-black">Observações do pedido</label>
                <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Escreva suas notas sobre o pedido aqui. P.e: Entregar entre as 15:00 e 20:00"></textarea>
              </div>

            </div>
          </div>
          <div class="col-md-6">



            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Sua Compra</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Produto</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      @php $total = 0; @endphp
                      @foreach ($products as $product)
                      @php $localTotal = $product->price * $product->quantity; @endphp
                      <tr>
                        <td>{{ $product->name }} <strong class="mx-2">x</strong> {{ $product->quantity }}</td>
                        <td>R$ {{ $localTotal }}</td>
                      </tr>
                      {{ $total += $localTotal }}
                      @endforeach

                      <td class="text-black font-weight-bold"><strong>Subtotal do carrinho</strong></td>
                      <td class="text-black">R${{$total}}</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Total da compra</strong></td>
                        <td class="text-black font-weight-bold"><strong>R${{$total}}</strong></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="border mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Boleto Bancário</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2 px-4">

                        <p class="mb-0">Clique no botão abaixo para gerar o boleto referente à seu pedido.</p>
                        <!-- redirecionar pra thank you dps -->
                      </div>
                      <div class="form-group" style="padding-left: 10px; padding-right: 10px">
                        <button class="btn btn-primary btn-lg btn-block" id="makeOrder">Finalizar
                          Compra</button>
                      </div>
                    </div>
                  </div>

                  <div class="border mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cartão de Crédito</a></h3>

                    <div class="collapse" id="collapsecheque">
                      <div class="py-2 px-4">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                          payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>

                  <div class="border mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Cartão de débito</a></h3>

                    <div class="collapse" id="collapsepaypal">
                      <div class="py-2 px-4">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                          payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>



                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- </form> -->
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
    <div class="modal">
      <!-- Place at bottom of page -->
    </div>
  </div>
  <script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>

  <script>
    $(document).ready(function() {
      $('#saveUserInfos').click(function() {
        $.ajax({
          type: 'POST',
          url: '/addUserInfos',
          data: {
            'cpf': $('#cpf').val(),
            'ddd': $('#ddd').val(),
            'celular': $('#celular').val()
          },
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(response) {
            const Toast = Swal.mixin({
              position: 'center',
              showConfirmButton: false,
              timer: 1000,
              timerProgressBar: true,
            })

            Toast.fire({
              icon: 'success',
              title: 'Informações cadastradas com sucesso'
            })
            setTimeout(() => {
              window.location.href = "/checkout";

            }, 1000);

          },
          error: function() {
            alert("erro");
          }
        });
      });

      $('#saveUserAddress').click(function() {
        $.ajax({
          type: 'POST',
          url: '/addUserAddress',
          data: {
            'rua': $('#rua').val(),
            'numero': $('#numero').val(),
            'bairro': $('#bairro').val(),
            'cidade': $('#cidade').val(),
            'estado': $('#estado').val(),
          },
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function(response) {
            const Toast = Swal.mixin({
              position: 'center',
              showConfirmButton: false,
              timer: 1000,
              timerProgressBar: true,
            })

            Toast.fire({
              icon: 'success',
              title: 'Informações cadastradas com sucesso'
            })
            setTimeout(() => {
              window.location.href = "/checkout";

            }, 1000);

          },
          error: function() {
            alert("erro");
          }
        });
      });

      function proccesCheckout() {
        if (<?php echo Auth::check() ?>) {
          $body = $("body");
          $body.addClass("loading");
          var settings = {
            "url": "https://ws.sandbox.pagseguro.uol.com.br/sessions?email=thiagomotax@gmail.com&token=DDABBCEA50DD4426B7E488661F35DB69",
            "method": "POST",
            "timeout": 0,
          };

          $.ajax(settings).done(function(xml) {
            $(xml).find('session').each(function() {
              $(this).find("id").each(function() {
                var sessionID = $(this).text();
                PagSeguroDirectPayment.setSessionId(sessionID);
              });
            });;
          });

          var hash;
          PagSeguroDirectPayment.onSenderHashReady(function(response) {
            if (response.status == 'error') {
              console.log(response.message);
              return false;
            }
            hash = response.senderHash; //Hash estará disponível nesta variável.
          });


          //verifica se ja tem endereço e infos pessoais cadastradas antes de definir
          $.ajax({
            'method': 'GET',
            'url': '/verifyUsersAddressInfos',
            success: function(response) {
              console.log(response);
              <?php if (isset($buyerAddress[0])) { ?>
                var settings = {
                  "url": "https://ws.sandbox.pagseguro.uol.com.br/v2/transactions?email=thiagomotax@gmail.com&token=DDABBCEA50DD4426B7E488661F35DB69",
                  "method": "POST",
                  "timeout": 0,
                  "data": {
                    "paymentMode": "default",
                    "paymentMethod": "boleto",
                    "receiverEmail": "thiagomotax@gmail.com",
                    "currency": "BRL",
                    "notificationURL": "https://sualoja.com.br/notifica.html",
                    "reference": "REF1234",
                    "senderName": "{{Auth::user()->name}}",
                    "senderCPF": "{{$buyerInfo[0]->cpf}}",
                    "senderAreaCode": "{{$buyerInfo[0]->area_code}}",
                    "senderPhone": "{{$buyerInfo[0]->phone_number}}",
                    "senderEmail": "c82092657538328714582@sandbox.pagseguro.com.br",
                    "senderHash": hash,
                    "shippingAddressStreet": "{{$buyerAddress[0]->street}}",
                    "shippingAddressNumber": "{{$buyerAddress[0]->number}}",
                    "shippingAddressDistrict": "{{$buyerAddress[0]->neighborhood}}",
                    "shippingAddressPostalCode": "36660000",
                    "shippingAddressCity": "{{$buyerAddress[0]->city}}",
                    "shippingAddressState": "{{$buyerAddress[0]->state}}",
                    "shippingAddressCountry": "BRA",
                  }
                };

                //array de entrada dos items para gerar o boleto

                $.ajax({
                  'url': '/getCart',
                  'method': 'GET',
                  'headers': {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  success: function(response) {
                    var i = 1;
                    var dados = JSON.parse(response);
                    for (var j = 0; j < dados.length; j++) {
                      //BUG DE NAO ADICIONAR TODOS OS PRODUTOS NO BOLETO -- fixed
                      //gerando 2 boletos
                      // console.log(i, dados[i]['pivot']['product_id']);
                      var ItemId = "itemId" + i;
                      var ItemDescription = "itemDescription" + i;
                      var itemAmount = "itemAmount" + i;
                      var itemQuantity = "itemQuantity" + i;
                      settings['data'][ItemId] = dados[j]['pivot']['product_id'];
                      settings['data'][ItemDescription] = dados[j]['description'].slice(0, 99);
                      settings['data'][itemAmount] = dados[j]['price'] + '.00';
                      settings['data'][itemQuantity] = dados[j]['quantity'];
                      i++;
                    }
                    $.ajax(settings).done(function(response) {
                      $body.removeClass("loading");

                      console.log(response);
                      var link;
                      var code = [];
                      $(response).find('transaction').each(function() {

                        $(this).find("paymentLink").each(function() {
                          link = $(this).text();
                          console.log(link);
                        });
                        $(this).find("code").each(function() {
                          code.push($(this).text());
                          console.log(code);
                        });
                      });

                      //remover do carrinho
                      //salvar a ordem
                      return window.location.href = "/confirmation?link=" + link + "&code=" + code[0];
                      //send data to another page
                    });
                  },
                  error: function() {
                    console.log(JSON.parse(response));
                  }
                });
              <?php } else { ?>
                return alert("Preencha seu endereço e informações pessoais");
              <?php } ?>
            }
          });

        }
      }

      $('#makeOrder').click(async function() {
        var boleto = proccesCheckout();
      });

    });
  </script>
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