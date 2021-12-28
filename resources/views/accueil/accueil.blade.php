@include('css.index')
<br>
<br>
<form id="register" method="POST" action="/inscription">
    @csrf
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <input type="text" id="form6Example1" class="form-control" name="nom" required />
          <label class="form-label" for="form6Example1">nom</label>
        </div>
      </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" id="form6Example2" class="form-control" name="prenom" required/>
          <label class="form-label" for="form6Example2">prenom</label>
        </div>
      </div>
    </div>
    <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <input type="text" id="form6Example3" class="form-control"  name="adress" required />
      <label class="form-label"  for="form6Example3">Address</label>
          </div>
        </div>
        <div class="col">
          <div class="form-outline">
            <input type="tel" id="form6Example4" class="form-control" name="telephone" required/>
            <label class="form-label" for="form6Example4">Telephone</label>
          </div>
        </div>
      </div>
  
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <input type="email" id="form6Example5" class="form-control"  name="email" required/>
      <label class="form-label" for="form6Example5">Email</label>
          </div>
        </div>
        <div class="col">
          <div class="form-outline">
            <input type="number" id="form6Example6" class="form-control" name="age" required/>
      <label class="form-label" for="form6Example6">age</label>
          </div>
        </div>
      </div>
  
     
    </div>
    <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <select name="genre" id="">
                <option value="M">masculin</option>
                <option value="F">feminin</option>
            </select>
          <label class="form-label" for="form6Example7">genre</label>
          </div>
        </div>
        <div class="col">
          <div class="form-outline">

            <select name="typevaccin" id="">
                
                 {{-- @foreach ($liste as $for) --}}
                <option value="astrazeneca" >astrazeneca</option>
                <option value="jonhson" >jonhson jonhson</option>
                {{-- @endforeach --}}
            </select>
            
          <label class="form-label" for="form6Example7">typevaccin</label>
          </div>
        </div>
      </div>
   
      @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">s'incrire</button>
  </form>