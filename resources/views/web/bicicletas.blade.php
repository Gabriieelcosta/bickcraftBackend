<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Bicicletas | Bikcraft</title>
  <meta name="description" content="Bicicletas">

  <link rel="icon" href="{{ url ('assets/favicon.svg')}}" type="image/svg+xml">
  <link rel="preload" href="{{ url ('assets/css/style.min.css')}}" as="style">
  <link rel="stylesheet" href="{{ url ('assets/css/style.min.css')}}">
  <script>document.documentElement.classList.add('js');</script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body id="bicicletas">
  <header class="header-bg">
    <div class="header container">
      <a href="./">
        <img src="{{ url ('assets/img/bikcraft.svg')}}" alt="Bikcraft">
      </a>

      <nav aria-label="primaria">
        <ul class="header-menu font-1-m cor-0">
          <li><a href="{{route('produto')}}">Bicicletas</a></li>
          <li><a href="{{route('seguro')}}">Seguros</a></li>
          <li><a href="{{route('contato')}}">Contato</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div class="titulo-bg">
      <div class="titulo container">
        <p class="font-2-l-b cor-5">Escolha a melhor para você</p>
        <h1 class="font-1-xxl cor-0">nossas bicicletas<span class="cor-p1">.</span></h1>
      </div>
    </div>

    <div class="bicicletas container">
      <div class="bicicletas-imagem">
        <img src="{{ url ('assets/img/bicicletas/nimbus.jpg')}}" alt="Bicicleta preta">
        <span class="font-2-m cor-0">R$ 4999</span>
      </div>
      <div class="bicicletas-conteudo">
        <h2 class="font-1-xl">Nimbus Stark</h2>
        <p class="font-2-s cor-8">A Nimbus Stark é a melhor Bikcraft já criada pela nossa equipe. Ela vem equipada com os melhores acessórios, o que garante maior velocidade.</p>
        <ul class="font-1-m cor-8">
          <li>
            <img src="{{  url ('assets/img/icones/eletrica.svg')}}" alt="">
            Motor Elétrico
          </li>
          <li>
            <img src="{{  url ('assets/img/icones/carbono.svg')}}" alt="">
            Fibra de Carbono
          </li>
          <li>
            <img src="{{  url ('assets/img/icones/velocidade.svg')}}" alt="">
            50 km/h
          </li>
          <li>
            <img src="{{ url ('assets/img/icones/rastreador.svg')}}" alt="">
            Rastreador
          </li>
        </ul>
        <a class="botao seta" href="{{route('nimbus')}}">Mais Sobre</a>
      </div>
    </div>

    <div class="bicicletas-bg">
      <div class="bicicletas container">
        <div class="bicicletas-imagem">
          <img src="{{ url ('assets/img/bicicletas/magic.jpg')}}" alt="Bicicleta preta">
          <span class="font-2-m cor-0">R$ 2499</span>
        </div>
        <div class="bicicletas-conteudo">
          <h2 class="font-1-xl cor-0">Magic Might</h2>
          <p class="font-2-s cor-5">A Magic Might é a melhor Bikcraft já criada pela nossa equipe. Ela vem equipada com os melhores acessórios, o que garante maior velocidade.</p>
          <ul class="font-1-m cor-5">
            <li>
              <img src="{{  url ('assets/img/icones/eletrica.svg')}}" alt="">
              Motor Elétrico
            </li>
            <li>
              <img src="{{ url ('assets/img/icones/carbono.svg')}}" alt="">
              Fibra de Carbono
            </li>
            <li>
              <img src="{{ url ('assets/img/icones/velocidade.svg')}}" alt="">
              45 km/h
            </li>
            <li>
              <img src="{{ url ('assets/img/icones/rastreador.svg')}}" alt="">
              Rastreador
            </li>
          </ul>
          <a class="botao seta" href="{{route('magic')}}">Mais Sobre</a>
        </div>
      </div>
    </div>

    <div class="bicicletas container">
      <div class="bicicletas-imagem">
        <img src="{{ url ('assets/img/bicicletas/nebula.jpg')}}" alt="Bicicleta preta">
        <span class="font-2-m cor-0">R$ 3999</span>
      </div>
      <div class="bicicletas-conteudo">
        <h2 class="font-1-xl">Nebula Cosmic</h2>
        <p class="font-2-s cor-8">A Nebula Cosmic é a melhor Bikcraft já criada pela nossa equipe. Ela vem equipada com os melhores acessórios, o que garante maior velocidade.</p>
        <ul class="font-1-m cor-8">
          <li>
            <img src="{{ url ('assets/img/icones/eletrica.svg')}}" alt="">
            Motor Elétrico
          </li>
          <li>
            <img src="{{ url ('assets/img/icones/carbono.svg')}}" alt="">
            Fibra de Carbono
          </li>
          <li>
            <img src="{{ url ('assets/img/icones/velocidade.svg')}}" alt="">
            50 km/h
          </li>
          <li>
            <img src="{{ url ('assets/img/icones/rastreador.svg')}}" alt="">
            Rastreador
          </li>
        </ul>
        <a class="botao seta" href="{{route('nebula')}}">Mais Sobre</a>
      </div>
    </div>

  </main>

  <footer class="footer-bg">
    <div class="footer container">
      <img src="{{ url ('assets/img/bikcraft.svg')}}" alt="Bikcraft">
      <div class="footer-contato">
        <h3 class="font-2-l-b cor-0">Contato</h3>
        <ul class="font-2-m cor-5">
          <li><a href="tel:+552199999999">+55 21 9999-9999</a></li>
          <li><a href="mailto:contato@bikcraft.com">contato@bikcraft.com</a></li>
          <li>Rua Ali Perto, 42 - Botafogo</li>
          <li>Rio de Janeiro - RJ</li>
        </ul>
        <div class="footer-redes">
          <a href="./">
            <img src="{{ url ('assets/img/redes/instagram.svg')}}" alt="Instagram">
          </a>
          <a href="./">
            <img src="{{ url ('assets/img/redes/facebook.svg')}}" alt="Facebook">
          </a>
          <a href="./">
            <img src="{{ url ('assets/img/redes/youtube.svg')}}" alt="Youtube">
          </a>
        </div>
      </div>
      <div class="footer-informacoes">
        <h3 class="font-2-l-b cor-0">Informações</h3>
        <nav>
          <ul class="font-1-m cor-5">
            <li><a href="{{route('produto')}}">Bicicletas</a></li>
            <li><a href="{{route('seguro')}}">Seguros</a></li>
            <li><a href="{{route('contato')}}">Contato</a></li>
            <li><a href="{{route('termo')}}">Termos e Condições</a></li>
          </ul>
        </nav>
      </div>
      <p class="footer-copy font-2-m cor-6">Bikcraft © Alguns direitos reservados.</p>
    </div>
  </footer>
  <script src="{{ url ('assets/js/script.js')}}"></script>
</body>

</html>