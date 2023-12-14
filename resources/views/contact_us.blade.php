<x-layout>
  
    <x-partecentrale
    title="Scrivimi quello che vuoi"
    background="bg-body-tertiary"
    > </x-partecentrale>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 bg-white shadow p-4">
        <form action="{{route('contact_us_submit')}}" method="post">
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Messaggio</label>
              <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            </div>
           
            <button type="submit" class="btn btn-primary">Invio mail</button>
          </form>   
        </div>
    </div>
</div>


  </x-layout>
  