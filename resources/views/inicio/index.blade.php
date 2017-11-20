@extends('layouts.app')
<!--Definicao de Jumbotron-->
@section('jumbotron')
<div class="jumbotron jumbotron-index text-center">
  <br><br><br><br>
  <h1>Ache ja, o seu prato predileto<br>Onde quer que esteja.</h1>
  
  <form class="form-inline" method="post" action="{{url('lista_de_restaurante')}}">
    <!--csrf_field-->
    {{csrf_field()}}
    <div class="input-group">
      <input type="text" class="form-control input-lg" name="txt_autocomplete" id="txt_autocomplete" size="50" placeholder="Informe o seu endereco">
      <div class="input-group-btn">
        <button type="submit" class="btn btn-success btn-lg" >Buscar</button>
      </div>
    </div>
  </form>

      <div class="row text-center" style="padding-top:180px">
        <div class="col-md-4">
          <img src='https://img.pystatic.com/home-steps/step-1-food.png' class='content_steps_img' href=''>
          <span>1. Escolha sua comida</span>
          <span>Mais de 10 restaurantes com delivery online.</span>
        </div>

        <div class="col-md-4">
           <img src='https://img.pystatic.com/home-steps/step-2-payment.png' class='content_steps_img' href=''><span class='step_title'>2. Faça seu pedido</span>
            <span class='step_subtitle'>É fácil e rápido. Você pode pagar online ou na entrega.</span>
        </div>

        <div class="col-md-4">
          <img src='https://img.pystatic.com/home-steps/step-3-delivery.png' class='content_steps_img' href=''><span class='step_title'>3. Receba sua comida</span>
          <span class='step_subtitle'>O restaurante entrega o pedido na sua porta.</span>
        </div>

      </div>

</div>
@endsection

<!--Adicao de conteudo-->
@section('conteudo')
  <div class="starter-template">
        <h1>Swakuda Software Development</h1>
        <p class="lead">Somos especialisados em desenvolvimento de software's de inovacao para o mercado actual, atualmente desenvolvemos uma plataforma que permite que qualquer pessoa possa comprar comida online e receber em sua casa sem se deslocar um centimetro se quer,veja os termos de referencia e comece a usar Swakuda.</p>
  </div>

	<div class="row">
		<div class='list-group gallery'>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="#">
                    <img class="img-responsive" alt="" src="{{asset('img/f2.jpg')}}" />
                </a>
            </div> <!-- col-6 / end -->

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="#">
                    <img class="img-responsive" alt="" src="{{asset('img/f3.jpg')}}" />
                </a>
            </div> <!-- col-6 / end -->

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="#">
                    <img class="img-responsive" alt="" src="{{asset('img/f4.jpg')}}" />
                </a>
            </div> <!-- col-6 / end -->


            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="fancybox thumbnail" rel="ligthbox" href="#">
                    <img class="img-responsive" alt="" src="{{asset('img/r5.jpg')}}" />
                </a>
            </div> <!-- col-6 / end -->            
        </div> <!-- list-group / end -->
	</div> <!-- row / end -->
@endsection


   <!-- Mapa auto-complete -->
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnOio2-38aqc86jOFG4soPgvx6lVDIPRc&libraries=places"></script>
    
    <script type="text/javascript">
      google.maps.event.addDomListener(window,'load',function(){
        var input=document.getElementById('txt_autocomplete');
        var auto=new google.maps.places.Autocomplete(input);
      });
    </script>
