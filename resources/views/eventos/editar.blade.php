<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscriões</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
  <section class="container">
    <div class="row">
      <div class="col-12">
        <a class="btn btn-secondary my-4" href="{{ route("home") }}">Voltar</a>
        {{-- Formulário --}}
        <form method="POST" action="{{route('inscricao')}}">
          @csrf
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input value="{{ $inscricao->nome }}" type="text" class="form-control" id="nome" name="nome" disabled>
          </div>
          <div class="mb-3">
            <label for="evento" class="form-label">Evento</label>
            <select name="evento" id="evento" class="form-select">
              <option selected>Selecione a Situação</option>
              <option value="Semana da Ciência e Tecnologia">Semana da Ciência e Tecnologia</option>
              <option value="SEMICT">SEMICT</option>
              <option value="Hackaton de Desenvolvimento">Hackaton de Desenvolvimento</option>
              <option value="Feira de Empreendedorismo">Feira de Empreendedorismo</option>
              <option value="Passeata contra aulas no sábado">Passeata contra aulas no sábado</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="data_evento" class="form-label">Data Inscrição</label>
            <input value="{{ $inscricao->data_evento }}" type="date" class="form-control" id="data_evento" name="data_evento" disabled>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
              <option selected>Selecione a Situação</option>
              <option value="Confirmado">Confirmado</option>
              <option value="Pendente">Pendente</option>
              <option value="Cancelado">Cancelado</option>
            </select>
          </div>

          <button type="submit" class="btn btn-success">Salvar</button>
        </form>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
