<h1> {{$modo}} Usuario </h1>

<div class="form-group">
<label for="TipoDoc"> Tipo Documento </label>
    <select id="TipoDoc" name="TipoDoc">
        <option value="" selected="selected"></option>
        <option value="CC">CC</option>
        <option value="CE">CE</option>
        <option value="TI">TI</option>
        </select>
        <br>
        <br>
        </div>
        

<div class="form-group">
    <label for="NumDoc"> Numero Documento </label>
    <input type="text" class= "form-control" name="NumDoc" value="{{isset($usuarios->NumDoc)?$usuarios->NumDoc:''}}">
</div>

<div class="form-group">
    <label for="PrimerNom"> Primer Nombre </label>
    <input type="text" class= "form-control" name="PrimerNom" value="{{isset($usuarios->PrimerNom)?$usuarios->PrimerNom:''}}">
</div>

<div class="form-group">
    <label for="SegundoNom"> Segundo Nombre </label>
    <input type="text" class= "form-control" name="SegundoNom" value="{{isset($usuarios->SegundoNom)?$usuarios->SegundoNom:''}}">
</div>

<div class="form-group">
    <label for="PrimerApe"> Primer Apellido </label>
    <input type="text" class= "form-control" name="PrimerApe" value="{{isset($usuarios->PrimerApe)?$usuarios->PrimerApe:''}}">
</div>

<div class="form-group">
    <label for="SegundoApe"> Segundo Apellido </label>
    <input type="text" class= "form-control" name="SegundoApe" value="{{isset($usuarios->SegundoApe)?$usuarios->SegundoApe:''}}">
</div>

<div class="form-group">
    <label for="Direccion_Residencia"> Direccion Residencia </label>
    <input type="text" class= "form-control" name="Direccion_Residencia" value="{{isset($usuarios->Direccion_Residencia)?$usuarios->Direccion_Residencia:''}}">
</div>

<div class="form-group">
    <label for="Telefono"> Telefono </label>
    <input type="text" class= "form-control" name="Telefono" maxlength="10" value="{{isset($usuarios->Telefono)?$usuarios->Telefono:''}}">
</div>
<br>

    <label for="Genero"> Genero </label>
    <select id="Genero" name="Genero">
        <option value="" selected="selected"></option>
        <option value="M">M</option>
        <option value="F">F</option>
        </select>
        <br>
        <br>

<div class="form-group">
    <label for="Fecha_Naci"> Fecha Nacimiento </label>
    <input type="date" class= "form-control" name="Fecha_Naci" value="{{isset($usuarios->Fecha_Naci)?$usuarios->Fecha_Naci:''}}">
</div>
<br>

    <label for="Estado_Civil"> Estado Civil </label>
    <select id="Estado_Civil" name="Estado_Civil">
        <option value="" selected="selected"></option>
        <option value="Soltero/a">Soltero/a</option>
        <option value="Casado/a">Casado/a</option>
        <option value="Viudo/a">Viudo/a</option>
        <option value="Separado/a">Separado/a</option>
        <option value="Divorciado/a">Divorciado/a</option>
        <option value="Union Libre">Union Libre</option>
        </select>
        <br>
        <br>
        

    <input type="submit" class="btn btn-success" value="{{$modo}} Usuario">
    <input type="reset" class="btn btn-primary">
    <a class="btn btn-secondary" href="{{url('usuarios/')}}"> Volver </a>