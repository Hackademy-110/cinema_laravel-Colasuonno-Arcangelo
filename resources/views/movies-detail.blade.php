<x-layout>
  
  <x-partecentrale
  title="Ecco il tuo film:{{$movie['title']}}"
  background="bg-body-tertiary"
  > </x-partecentrale>
    {{-- schedefilm --}}
    <div class="container " style="margin-top:40px">
      <div class="row justify-content-center">
        
          <x-card  
          movieTitle="{{$movie['title']}}"
          movieImg="{{$movie['img']}}"
          moviePlot="{{$movie['plot']}}"
          movieId="{{$movie['id']}}"
          >
           </x-card>
     
      </div>
    </div>
</x-layout>
