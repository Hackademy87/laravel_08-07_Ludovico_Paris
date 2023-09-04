<div class="card_generale" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{!! $film->title !!}</h5>
      <p class="card-text text-truncate">{!! $film->plot !!}</p>
      <p class="card-text">Regista: {!! $film->director !!}</p>
      <a href="{{ route('film.show', $film) }}" class="btn btn-primary">Dettagli</a>
      {{-- <a href="{{ route('film.edit', $film) }}" class="btn btn-secondary">modifica</a>
      <form action="{{ route('film.delete', $film) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">cancella</button>
      </form> --}}
    </div>
    <div class="card-footer">
        <div class="d-flex justify-content-between">
          <p class="card-text">Anno: {{ $film->year }}</p>
          <p class="card-text">Genere: {{ $film->genre }}</p>
        </div>
    </div>
  </div>