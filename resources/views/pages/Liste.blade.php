@extends('pages.index')
@section('content')

<main>
    <div class="container mt-5 ">
        <h2>liste des évènements</h2>               
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Id</th>
              <th>title</th>
              <th>Description</th>
              <th>start_date</th>
              <th>end_date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>1</td>
              <td>manger</td>
              <td>bon pour la vie</td>
              <td>03/08/1666</td>
              <td>03/08/2000</td>
              <td>
                <button type="button" class="btn btn-info">Modifier</button>
<button type="button"  class="btn btn-outline-danger">supprimer</button>
              </td>
            </tr>
           
          </tbody>
          
</main>
    
@endsection