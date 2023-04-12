@if ($errors->any())
  <ul>
    {!! implode('',$errors->all('<li>:message</li>')) !!}
   </ul>
@endif 
<form method="POST" action="authenticate">
    <label for="">E-Mail <input type="text" name="email"> </label>
    <label for="">Password <input type="password" name="password"> </label>
    <input type="submit" value="Login">
    @csrf
</form>