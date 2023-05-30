@extends('pages.index')

@section('content')

@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}

</div>
@endif

 <div class="haut">
    <h2>Ajouter un evénement !</h2>
 </div>

 <main>
  
    <form action="{{ route('enregistrer') }}"  method="POST" class="form-group">
        @csrf
        <div class="mb-3 mt-5">
          <label for="text" class="form-label"> Title </label>
          <input type="text" class="form-control" id="title" placeholder="Title" name="title">
        </div>
        <div class="mb-3 mt-3">
            <label for="texte" class="form-label"> Description </label>
            <input type="texte" class="form-control" id="title" placeholder="Ajouter une Description" name="description">
          </div>
          <div class="mb-3 mt-3">
            <label for="texte" class="form-label">Start date</label>
            <input type="date" class="form-control" id="start date" placeholder="Title" name="start_date">
          </div>
          <div class="mb-3 mt-3">
            <label for="texte" class="form-label"> End date</label>
            <input type="date" class="form-control" id="end_date" placeholder="Title" name="end_date">
          </div>
       
        <button type="submit" class="btn btn-success">Ajouter</button>
      </form>
 

 </main>
    
@endsection