<x-layout>
<div class="container">
    <div class="row justify-content-center">
        <h1>Grazie per averci scritto</h1>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-m6">
        <h1>Ecco un racconto della tua richiesta</h1>
        <ul>
            <li>Nome:{{session('name')}}</li>
            <li>Email:{{session('email')}}</li>
            <li>Messaggio:{{session('message')}}</li>


        </ul>
        </div>
    </div>
</div>
    
    </x-layout>
    