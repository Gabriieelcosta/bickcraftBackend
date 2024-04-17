<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Termos e Condições | Bikcraft</title>
  <meta name="description" content="Termos e condições.">

  <link rel="icon" href="{{ url ('assets/favicon.svg')}}" type="image/svg+xml">
  <link rel="preload" href="{{ url ('assets/css/style.min.css')}}" as="style">
  <link rel="stylesheet" href="{{ url ('assets/css/style.min.css')}}">
  <script>document.documentElement.classList.add('js');</script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body id="termos">
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
        <p class="font-2-l-b cor-5">Termos de uso</p>
        <h1 class="font-1-xxl cor-0">termos e condições<span class="cor-p1">.</span></h1>
      </div>
    </div>

    <div class="termos font-2-s cor-10 container">
      <h2 class="font-1-l cor-11">1. Política de Estorno</h2>
      <p>1.1 Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto. Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto.</p>
      <p>1.2 Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto. Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto.</p>
      <p>1.3 Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto. Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto.</p>
      <h2 class="font-1-l cor-11">2. Conta do Usuário</h2>
      <p>2.1 Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto. Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto.</p>
      <h2 class="font-1-l cor-11">3. Seguro Bikcraft</h2>
      <p>3.1 Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto. Aceitamos pagamentos parcelados em todos os cartões de crédito. Para pagamentos à vista também aceitamos PIX e Boleto.</p>
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