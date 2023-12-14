    <x-layout>
    {{-- inizio navbar  --}}
    
      {{-- fine navbar --}}

      {{-- inizio parte centrale --}}
      <x-partecentrale
      title='Benvenuto al THE SPACE'
      ></x-partecentrale>
      @if (session('sendEmailSuccess'))
    <div class="alert alert-success">
        {{ session('sendEmailSuccess') }}
    </div>
      @endif
    
    </x-layout>
    
    
    
    
    
   