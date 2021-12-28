@extends('admin.admin')
@section('content')
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css"
  rel="stylesheet"
/>
<div class="limiter" style="text-align: center">
<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
<div class="wrap-login100 p-t-30 p-b-50">
<span class="login100-form-title p-b-41">
Veuillez remplire le formulaire ci-dessous
</span>
<form class="login100-form validate-form p-b-33 p-t-5" action="/vaccin" method="POST">
<div class="wrap-input100 validate-input" data-validate="Entrer la date de votre premiere dose">

<input class="input100" type="date" name="first" placeholder="Date Premiere Dose">
<span class="focus-input100" data-placeholder="&#xe82a;"></span>
</div>
<br>
<div class="form-group">
    <label class="input100" type="text" name="pass" placeholder="Type de vaccin">Type de vaccin</label>
    <select class="input100" type="text" name="type" placeholder="Type de vaccin">
      <option>astrazeneca</option>
      <option>Johnson  jonhson</option>
  
    </select>
    
  </div>
  <br>
<div class="wrap-input100 validate-input" data-validate="entrez le type de vaccin que vous avez pris">
</div>
<div class="wrap-input100 validate-input" data-validate="Entrez la date eventuelle de la second Dose">
<input class="input100" type="date" name="second" placeholder="Date eventuelle de la second Dose">
<span class="focus-input100" data-placeholder="&#xe80f;"></span>
</div>
<br>
<div class="form-group">
  <label class="input100" type="text" name="pass" placeholder="Type de vaccin">Personne vaccin</label>
  <select class="input100" type="text" name="id" placeholder="Type de vaccin">
    @foreach ($Inscription as $item)
    <option value="{{ $item->email }}">{{ $item->email }}</option>
    @endforeach


  </select>
  
</div>
<br>
<div class="container-login100-form-btn m-t-32">
  <br>
<button type="submit" class="login100-form-btn">
Envoyer
</button>
</div>
</form>
</div>
</div>
</div>
@endsection