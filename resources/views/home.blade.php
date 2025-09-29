<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
  <section class="container">
    <div class="row">
      <div class="col-12">
        <table class="table">
          <thead>
              <tr>
                <td colspan="8"><h2>Confirmações nas útlimas 24 hrs</h2></td>
              </tr>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Evento</th>
                <th scope="col">Data Inscrição</th>
                <th scope="col">Data Confirmação</th>
                <th scope="col">Status</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($inscricoes as $inscricao)
              <tr>
                <th scope="row"><span>{{ $inscricao->id }}</span></th>
                <td><span>{{ $inscricao->nome }}</span></td>
                <td><span>{{ $inscricao->evento }}</span></td>
                <td><span>{{ $inscricao->data_evento }}</span></td>
                <td><span></span></td>
                <td><span>{{ $inscricao->status }}</span></td>
                <td><a class="btn btn-warning" href="{{ route('editar_inscricao', [$inscricao->id]) }}">Editar</a></td>
                <td><a class="btn btn-danger" href="{{ route('excluir_inscricao', [$inscricao->id]) }}">Excluir</a></td>
              </tr>
            @endforeach
            <tr>
              <td colspan="2"><a class="btn btn-info" href="{{ route('confirmar') }}">Confirmar Incrições</a></td>
              <td colspan="2"><a class="btn btn-secondary" href="{{ route('inscrever') }}">Realizar Inscrição</a></td>
              <td colspan="4"></td>
            </tr>
          </tbody>
        </table>
        <table class="table">
          <thead>
            <tr>
              <td colspan="6"><h2>Total de Inscritos por evento</h2></td>
            </tr>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Evento</th>
              <th scope="col">Pessoas inscritas</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"><span>1</span></th>
              <td><span>Semana da Ciência e Tecnologia</span></td>
              <td><span></span></td>
            </tr>
            <tr>
              <th scope="row"><span>2</span></th>
              <td><span>SEMICT 2025</span></td>
              <td><span></span></td>
            </tr>
            <tr>
              <th scope="row"><span>3</span></th>
              <td><span>Hackaton de Desenvolvimento</span></td>
              <td><span></span></td>
            </tr>
            <tr>
              <th scope="row"><span>4</span></th>
              <td><span>Feira de Empreendedorismo</span></td>
              <td><span></span></td>
            </tr>
            <tr>
              <th scope="row"><span>5</span></th>
              <td><span>Paseata contra aulas no sábado</span></td>
              <td><span></span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
