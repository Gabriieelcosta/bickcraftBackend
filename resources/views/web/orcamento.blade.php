<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Orçamento | Bikcraft</title>
  <meta name="description" content="Orçamento.">

  <link rel="icon" href="{{ url('assets/favicon.svg')}}" type="image/svg+xml">
  <link rel="preload" href="{{ url('assets/css/style.min.css')}}" as="style">
  <link rel="stylesheet" href="{{ url('assets/css/style.min.css')}}">
  <script>document.documentElement.classList.add('js');</script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body id="orcamento">
  <header class="header-bg">
    <div class="header container">
      <a href="./">
        <img src="{{ url('assets/img/bikcraft.svg')}}" alt="Bikcraft">
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
        <p class="font-2-l-b cor-5">Cotações no seu email</p>
        <h1 class="font-1-xxl cor-0">solicite um orçamento<span class="cor-p1">.</span></h1>
      </div>
    </div>

    <form class="orcamento container" action="./enviar.php" method="post">
      <div class="orcamento-produto">
        <h2 class="font-1-xs cor-5">Bikcraft ou Seguro?</h2>

        <input type="radio" name="tipo" value="bikcraft" id="bikcraft">
        <label for="bikcraft">Bikcraft</label>

        <input type="radio" name="tipo" value="seguro" id="seguro">
        <label for="seguro">Seguro</label>

        <div class="orcamento-conteudo" id="orcamento-bikcraft">
          <h2 class="font-1-xs cor-5">Escolha a sua</h2>

          <input type="radio" name="produto" value="nimbus" id="nimbus">
          <label for="nimbus">Nimbus Stark <span>R$ 4999</span></label>
          <div class="orcamento-detalhes">
            <ul class="font-1-xs cor-8">
              <li><img src="{{ url('assets/img/icones/eletrica.svg')}}" alt=""> Motor Elétrico</li>
              <li><img src="{{ url('assets/img/icones/carbono.svg')}}" alt=""> Fibra de Carbono</li>
              <li><img src="{{ url('assets/img/icones/velocidade.svg')}}" alt=""> 50 km/h</li>
              <li><img src="{{ url('assets/img/icones/rastreador.svg')}}" alt=""> Rastreador</li>
            </ul>
            <img src="{{ url('assets/img/bicicletas/nimbus.jpg')}}" alt="Bicicleta preta">
          </div>

          <input type="radio" name="produto" value="magic" id="magic">
          <label for="magic">Magic Might <span>R$ 2499</span></label>
          <div class="orcamento-detalhes">
            <ul class="font-1-xs cor-8">
              <li><img src="{{ url('assets/img/icones/eletrica.svg')}}" alt=""> Motor Elétrico</li>
              <li><img src="{{ url('assets/img/icones/carbono.svg')}}" alt=""> Fibra de Carbono</li>
              <li><img src="{{ url('assets/img/icones/velocidade.svg')}}" alt=""> 45 km/h</li>
              <li><img src="{{ url('assets/img/icones/rastreador.svg')}}" alt=""> Rastreador</li>
            </ul>
            <img src="{{ url('assets/img/bicicletas/magic.jpg')}}" alt="Bicicleta preta">
          </div>

          <input type="radio" name="produto" value="nebula" id="nebula">
          <label for="nebula">Nebula Cosmic <span>R$ 3999</span></label>
          <div class="orcamento-detalhes">
            <ul class="font-1-xs cor-8">
              <li><img src="{{ url('assets/img/icones/eletrica.svg')}}" alt=""> Motor Elétrico</li>
              <li><img src="{{ url('assets/img/icones/carbono.svg')}}" alt=""> Fibra de Carbono</li>
              <li><img src="{{ url('assets/img/icones/velocidade.svg')}}" alt=""> 40 km/h</li>
              <li><img src="{{ url('assets/img/icones/rastreador.svg')}}" alt=""> Rastreador</li>
            </ul>
            <img src="{{ url('assets/img/bicicletas/nebula.jpg')}}" alt="Bicicleta branca">
          </div>

        </div>

        <div class="orcamento-conteudo" id="orcamento-seguro">
          <h2 class="font-1-xs cor-5">Escolha o plano</h2>

          <input type="radio" name="produto" value="prata" id="prata">
          <label for="prata">Prata <span>R$ 199</span></label>

          <input type="radio" name="produto" value="ouro" id="ouro">
          <label for="ouro">Ouro <span>R$ 299</span></label>
        </div>
      </div>
      <div class="orcamento-dados form">
        <h2 class="font-1-xs cor-9 col-2">dados pessoais</h2>
        <div>
          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome">
        </div>
        <div>
          <label for="sobrenome">Sobrenome</label>
          <input type="text" id="sobrenome" name="sobrenome">
        </div>
        <div class="col-2">
          <label for="cpf">CPF</label>
          <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00">
        </div>
        <div class="col-2">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </div>
        <h2 class="font-1-xs cor-9 col-2">entrega</h2>
        <div>
          <label for="cep">CEP</label>
          <input type="text" id="cep" name="cep">
        </div>
        <div>
          <label for="numero">Número</label>
          <input type="text" id="numero" name="numero">
        </div>
        <div>
          <label for="logradouro">Logradouro</label>
          <input type="text" id="logradouro" name="logradouro">
        </div>
        <div>
          <label for="bairro">Bairro</label>
          <input type="text" id="bairro" name="bairro">
        </div>
        <div>
          <label for="cidade">Cidade</label>
          <input type="text" id="cidade" name="cidade">
        </div>
        <div>
          <label for="estado">Estado</label>
          <input type="text" id="estado" name="estado">
        </div>
        <button class="botao col-2">Solicitar Orçamento</button>
      </div>
    </form>
  </main>

  <footer class="footer-bg">
    <div class="footer container">
      <img src="{{ url('assets/img/bikcraft.svg')}}" alt="Bikcraft">
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
            <img src="{{ url('assets/img/redes/instagram.svg')}}" alt="Instagram">
          </a>
          <a href="./">
            <img src="{{ url('assets/img/redes/facebook.svg')}}" alt="Facebook">
          </a>
          <a href="./">
            <img src="{{ url('assets/img/redes/youtube.svg')}}" alt="Youtube">
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
  <script src="{{ url ('assets/js/formulario.js')}}"></script>
</body>

</html>