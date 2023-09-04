<x-layout>
    <div class="container">
        <div class="row">
            <h3>Dashboard</h3>
            <h4>Tutti i film</h4>
        </div>
        <div class="row">
            <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Regista</th>
                        <th scope="col">Anno</th>
                        <th scope="col">Genere</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($films as $film)
                        <tr>
                            <th scope="row">{{ $film->id }}</th>
                            <td>{{ $film->title }}</td>
                            <td>{{ $film->director }}</td>
                            <td>{{ $film->year }}</td>
                            <td>{{ $film->genre }}</td>
                            <td>
                                <a href="{{ route('film.edit', $film) }}" class="btn btn-secondary">modifica</a>
                                    <form action="{{ route('film.delete', $film) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">cancella</button>
                                    </form> 
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row">
            <h4>Tutti gli utenti</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ruolo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }} ({{ $user->profile->role }})</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <form action="{{ route('admin.changeUserRole', $user) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-primary">User</button>
                                        <input type="hidden" value="user" name="role">
                                    </form>
                                   
                                    <form action="{{ route('admin.changeUserRole', $user) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-secondary">Admin</button>
                                        <input type="hidden" value="admin" name="role">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>