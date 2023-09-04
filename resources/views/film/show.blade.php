<x-layout>
    <div class="container contenitore">
        <div class="row">
            <div class="col-12">
                <h2>-{{ $film->title }}-</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <h4>Trama</h4>
                <p>{!! $film->plot !!}</p>
                <p>Regista: {{ $film->director }}</p>
                <div class="d-flex justify-content-between">
                    <p>Anno: {{ $film->year }}</p>
                    <p>Genere: {{ $film->genre }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>