 <div class="col-12 col-md-4 " style="margin-top:40px">
                <div class="card" style="">
                    <img src="{{$movieImg}}" class="card-img-top" alt="{{$movieTitle}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$movieTitle}}</h5>
                      <p class="card-text">La trama : {{$moviePlot}}</p>
                      @if (Route::currentRouteName()== 'movieIndex')
                      <a href="{{route('moviesDetail',['id'=>$movieId])}}" class="btn btn-primary">Scopri il film</a>
                       @else
                      <a href="{{route('movieIndex')}}" class="btn btn-primary">Rivediti bene tutto</a>
                       
                      @endif
                    </div>
                  </div>
            </div>