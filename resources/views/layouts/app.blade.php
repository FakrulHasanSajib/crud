<!doctype html>
<html lang="bn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'Products' }}</title>
  <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
  <style>
    header, footer { text-align: center; }
    table td { vertical-align: top; }
    .row-actions { display:flex; gap:.5rem; margin-top:.5rem; flex-wrap: wrap; }
  </style>
</head>
<body>
<header>
  <h1>{{ $title ?? 'Products' }}</h1>
</header>
<main>
  @if (session('status'))
    <p><mark>{{ session('status') }}</mark></p>
  @endif

  @if ($errors->any())
    <details open>
      <summary>Validation errors</summary>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </details>
  @endif

  {{ $slot }}
</main>
<footer>© {{ date('Y') }}</footer>
</body>
</html>