<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Tutti i film</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($films as $film)
                <div class="col-12 col-md-4">
                    <x-card :film="$film" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>