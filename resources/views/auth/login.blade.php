<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Accedi</h2>
            </div>
        </div>
        <div class="row">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Accedi</button>
            </form>
        </div>
    </div>
</x-layout>