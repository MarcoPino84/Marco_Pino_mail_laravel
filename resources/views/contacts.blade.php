<x-layout>
    <x-header
    title="contattaci"
    />
<div class="container">
    <div class="row justify-content-center py-3">
        <div class="col-12 col-md-8 col-lg6">
            <form method="POST" action="{{route('contact.submit')}}">
                @csrf
                <div class="mb-3">
                    <label  class="form-label">Nome utente </label>
                    <input type="text" class="form-control" name="name" >
                   </div>

                <div class="mb-3">
                  <label  class="form-label">Email </label>
                  <input type="mail" class="form-control" name="email" >
                 </div>
                <div class="mb-3">
                  <label  class="form-label">Lasciaci un messaggio</label>
                <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Scrivere fa bene al cuore..."></textarea>
                </div>
           
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

        </div>
    </div>
</div>
</x-layout>