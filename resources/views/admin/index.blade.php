@extends('admin.admin')
@section('content')
<table  class="table table-striped table-hover container" id="example">
    <thead>
       <h1 class="text-center">LISTES DES Personnes inscrcits pour ce vaccine</h1>
             <th >Matricule</th>
             <th >NOM</th>
             <th >Prenom</th>
             <th >adress</th>
             <th >email</th>
             <th >telephone</th>
             <th >age</th>
             <th >type Vaccin</th>
             <th > genre   </th>
         


     </thead>
     <tbody>
@foreach($inscription as $person)
<tr>
    
<td> {{$person->id}}</td>
<td> {{$person->nom}}</td>
<td> {{$person->prenom}}</td>
<td> {{$person->adress}}</td>
<td> {{$person->email}}</td>
<td> {{$person->telephone}}</td>
<td> {{$person->age}}</td>
<td> {{$person->typeVaccin}}</td>
<td> {{$person->genre}}</td>


</tr>
 @endforeach
 </tbody>
 </table>
@endsection