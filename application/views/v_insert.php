<form action="<?=base_url()?>home/insertdata" method="post" enctype="multipart/form-data">

<div class="form-group">
<div class="col-sm-6"><label for=""> descripcion</label>
<input type="text" name="descripcion" class="form-control" placeholder="Ingrese Su descripcion" required>
</div>
<div class="col-sm-6"><label for=""> unidad_medida</label>
<input type="text" name="unidad_medida" class="form-control" placeholder="unidad_medida" required>
</div>
</div>

<div class="form-group">
<div class="col-sm-6"><label for=""> saldo</label>
<input type="text" name="saldo" class="form-control" placeholder="saldo" required>
</div>
<div class="col-sm-6"><label for=""> precio_base</label>
<input type="text" name="precio_base" class="form-control" placeholder="precio_base" required>
</div>
</div>



<div class="form-group">
<div class="col-sm-12">
<input type="submit" name="submit" value="REGISTRAR CONVOCATORIA" class="btn btn-default">
</div>
</div>
</form>