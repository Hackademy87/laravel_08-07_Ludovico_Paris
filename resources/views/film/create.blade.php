<x-layout>
    <div class="container">
        <div class="row">
            <h2>Inserisci un nuovo film</h2>
        </div>
        <form method="POST" action="{{route('film.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Titolo</label>
                            <input type="text" class="form-control" name="title" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Genere</label>
                            <input type="text" class="form-control" name="genre" >
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Anno</label>
                            <input type="text" class="form-control" name="year" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Regista</label>
                            <input type="text" class="form-control" name="director" >
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <label class="form-label">Trama</label>
                        <textarea class="form-control" name="plot" cols="30" rows="10"></textarea>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Aggiungi</button>
            </div>
        </form>
    </div>
</x-layout>