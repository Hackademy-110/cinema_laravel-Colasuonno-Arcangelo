<x-layout>
  
  
      {{-- schedefilm --}}
      <div class="container bg-dark " style="margin-top:40px">
        <div class="row justify-content-center">
            @foreach($movies as $movie)
            <x-card  
            movieTitle="{{$movie['title']}}"
            movieImg="{{$movie['img']}}"
            moviePlot="{{$movie['plot']}}"
            movieId="{{$movie['id']}}"
            >
             


            </x-card>
            @endforeach
        </div>
      </div>



      {{-- fineschedefilm --}}

      
      {{-- inzio footer --}}
    
    
    
    
    
    
    
    </x-layout>