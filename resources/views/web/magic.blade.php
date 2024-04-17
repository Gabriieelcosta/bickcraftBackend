
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Magic | Bikcraft</title>
  <meta name="description" content="Magic.">

  <link rel="icon" href="{{ url ('assets/favicon.svg')}}" type="image/svg+xml">
  <link rel="preload" href="{{ url ('assets/css/style.min.css')}}" as="style">
  <link rel="stylesheet" href="{{ url ('assets/css/style.min.css')}}">
  <script>document.documentElement.classList.add('js');</script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body id="bicicleta">
  <header class="header-bg">
    <div class="header container">
      <a href="../">
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

  <main class="titulo-bg">
    <div>
      <div class="titulo container">
        <p class="font-2-xl cor-5">R$ 2499</p>
        <h1 class="font-1-xxl cor-0">Magic Might<span class="cor-p1">.</span></h1>
      </div>
    </div>
    <div class="bicicleta container">
      <div class="bicicleta-imagens">
        <img src="{{ url ('assets/img/bicicleta/nimbus2.jpg')}}" alt="Bicicleta 1">
        <img src="{{ url ('assets/img/bicicleta/nimbus1.jpg')}}" alt="Bicicleta 2">
        <img src="{{ url ('assets/img/bicicleta/nimbus3.jpg')}}" alt="Bicicleta 3">
      </div>
      <div class="bicicleta-conteudo">
        <p class="font-2-l cor-5">A Magic Might é a melhor Bikcraft já criada pela nossa equipe. Ela vem equipada com os melhores acessórios, o que garante maior velocidade.</p>
        <div class="bicicleta-comprar">
          <a class="botao" href="{{route('orcamento')}}">Comprar Agora</a>
          <span class="font-1-xs cor-6"><img src="{{ url ('assets/img/icones/entrega.svg')}}" alt=""> entrega em 5 dias</span>
          <span class="font-1-xs cor-6"><img src="{{ url ('assets/img/icones/estoque.svg')}}" alt=""> 18 em estoque</span>
        </div>

        <h2 class="font-1-xs cor-0">Informações</h2>
        <ul class="bicicleta-informacoes">
          <li>
            <img src="{{ url ('assets/img/icones/eletrica.svg')}}" alt="">
            <h3 class="font-1-m cor-0">Motor Elétrico</h3>
            <p class="font-2-xs cor-5">Permite você viajar distâncias inimaginaveis com a sua bike.</p>
          </li>
          <li>
            <img src="{{ url ('assets/img/icones/velocidade.svg')}}" alt="">
            <h3 class="font-1-m cor-0">45 km/h</h3>
            <p class="font-2-xs cor-5">A mais rápida bicicleta elétrica disponível hoje no mercado.</p>
          </li>
          <li>
            <img src="{{ url ('assets/img/icones/rastreador.svg')}}" alt="">
            <h3 class="font-1-m cor-0">Rastreador</h3>
            <p class="font-2-xs cor-5">Rastreador e sistema anti-furto para garantir o seu sossego.</p>
          </li>
          <li>
            <img src="{{ url ('assets/img/icones/carbono.svg')}}" alt="">
            <h3 class="font-1-m cor-0">Fibra de Carbono</h3>
            <p class="font-2-xs cor-5">Maior proteção possível para a sua Bikcraft com fibra de carbono.</p>
          </li>
        </ul>
        <h2 class="font-1-xs cor-0">Ficha Técnica</h2>
        <ul class="bicicleta-ficha font-2-s cor-4">
          <li>Peso <span>9 kg</span></li>
          <li>Altura <span>60 cm</span></li>
          <li>Largura <span>120 cm</span></li>
          <li>Profundidade <span>10 cm</span></li>
          <li>Marchas <span>16</span></li>
          <li>Roda <span>29</span></li>
        </ul>
      </div>
    </div>
  </main>

  <article class="bicicletas-lista container">
    <h2 class="font-1-xxl">escolha a sua<span class="cor-p1">.</span></h2>

    <ul>
      <li>
        <a href="{{route('nimbus')}}">
          <img src="{{ url ('assets/img/bicicletas/nimbus.jpg')}}" alt="Bicicleta preta">
          <h3 class="font-1-xl">Nimbus Stark</h3>
          <span class="font-2-m cor-8">R$ 4999</span>
        </a>
      </li>
      <li>
        <a href="{{route('nebula')}}">
          <img src="{{ url ('assets/img/bicicletas/nebula.jpg')}}" alt="Bicicleta preta">
          <h3 class="font-1-xl">Nebula Cosmic</h3>
          <span class="font-2-m cor-8">R$ 3999</span>
        </a>
      </li>
    </ul>
  </article>

  <article class="seguro-bg">
    <div class="seguro container">
      <div class="seguro-imagem">
        <img src="{{ url ('assets/img/fotos/seguros.jpg')}}" alt="Pessoa parada em cima de uma bicicleta.">
      </div>
      <div class="seguro-conteudo">
        <h2 class="font-1-xxl cor-0">Pedale mais tranquilo com o nosso <span class="cor-p1">seguro.</span></h2>
        <p class="font-2-l cor-5">Inscreva-se em um dos planos do nosso seguro Bikcraft e aproveite diversos benefícios.</p>
        <a class="botao" href="{{route('seguro')}}">Conheça Mais</a>
      </div>
    </div>
  </article>

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
          <a href="../">
            <img src="{{ url ('assets/img/redes/instagram.svg')}}" alt="Instagram">
          </a>
          <a href="../">
            <img src="{{ url ('assets/img/redes/facebook.svg')}}" alt="Facebook">
          </a>
          <a href="../">
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