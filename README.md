AUTENTICAZIONE
Utilizziamo composer per installare la libreria Forify di Laravel seguendo la documentazione

INSTALLAZIONE E CONFIGURAZIONE FORTIFY
composer require laravel/fortify
-> Scarica e installa la libreria nella cartella vendor

php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
-> Aggiunge ai service providers quello di Fortify

php artisan migrate
-> Aggiunge le colonne necessarie a Fortify nella tabella users

Aggiunto al file app.php App\Providers\FortifyServiceProvider::class nello spazion dedicato ai providers delle librerie aggiunte a Laravel

REGISTRAZIONE
Addestrato Fortify ad seguire la vista auth.register nel file FortifyServiceProvider

 Fortify::registerView(function () {
     return view('auth.register');
 });
Inviare i dati tramite POST all'indirizzo della register --> route('register')

LOGOUT
eseguire una richiesta POST all'indirizzo -> route('logout')
LOGIN
Addestrare il FortifyServiceProvider per visualizzare la rotta del login

 Fortify::loginView(function () {
             return view('auth.login');
 });
Nella form della rotta inviare la richiesta POST con email e password alla rotta -> route('login')

API
Sono un sistema per distribuire servizi via internet

RELAZIONI DEL DATABASE
La relazione in un database e' il modo in cui uno o piu' record di una tabella vengono collegata ad uno o piu' record di un'altra tabella

La colonna della relazione va chiamata con modello_chiave --> user_id

CREAZIONE DELLE MIGRAZIONI
Per creare le relazioni bisogna creare la colonna user_id all'interno della tabella profiles con la migrazione

    php artisan make:migration add_user_id_column_to_profiles_table
Nella funzione UP della migrazione bisogna impostare la colonna user_id (che deve essere dello stesso tipo della colonna id della tabella users)

$table->unsignedBigInteger('user_id');
$table->foreign('user_id')->references('id')->on('users')->after('title');
Nella funzione DOWN della migrazione bisogna prima togliere il vincolo della relazione e poi e' possibile cancellare la colonna user_id

    $table->dropForeign(['user_id']);
$table->dropColumn('user_id');
Ora e' possibile effettuare la migrazione

    php artisan migrate
CREAZIONE DELLE FUNZIONI NEI MODELLI
Nei modelli e' possibile creare delle funzioni che, tramite la relazione creata, estraggano dal database i dati relativi

Nel modello User

RITORNA IL PROFILO COLLEGATO DALLA RELAZIONE 1 a 1
public function profile() {
    return $this->hasOne(Profile::class);
}

RITORNA TUTTI I FILM COLLEGATI DALLA RELAZIONE 1 a N
public function films(){
    return $this->HasMany(Film::class);
}
Nel modello Profile

RITORNA L'UTENTE COLLEGATO DALLA RELAZIONE 1 a 1
public function user(){
    return $this->hasOne(User::class);
}
Nel modello Film

RITORNA L'UTENTE COLLEGATO DALLA RELAZIONE 1 a N
public function user(){
    return $this->belongsTo(User::class);
}
1 a 1
Un record di una tabella e' in relazione con un solo record di un'altra tabella

Tabella users e tabella profiles

Un utente puo' avere solo un profilo e quindi nella tabella profiles c'e' un solo record che fa riferimento ad un singolo user

1 a Molti
Un record di una tabella e' in relazione con molti record di un'altra tabella

Tabella users e tabella films

Un singolo users puo' inserire N films nella tabella films

Molti a Molti
Molti record di una tabella sono in relazione a molti record di un'altra tabella

La chiave di relazione di chiama foreign key

DATABASE SEEDERS
Nella cartella database/seeders che il file DatabaseSeeder.php che permette di inserire dei dati di test ogni volta che viene fatto un php artisan migrate:fresh

Cosi' e' possibile partire con dei valori di default del database