<div class="container">
<h2>Edit User</h2>
<div class="row">
    
<?php 
         //NOTIFIACIONES ERROR
         echo validation_errors('<div class="alert alert-warnig">','</div>');
    
         //notificacion del login
         if($this->session->flashdata('sukses')){
             echo '<div class="alert alert-warning">';
             echo $this->session->flashdata('sukses'); 
             echo '</div>';
         }
        // para hacer el update cambiar esta direccion
        echo form_open(base_url('home/updatedata' ),'class="form-horizontal" entype="multipart/formdata"');
        ?>
        


<input type="text" name="descripcion" value="<?=$data->descripcion?>"><br>
<input type="text" name="unidad_medida" value="<?=$data->unidad_medida?>"><br>
<input type="text" name="saldo" value="<?=$data->saldo?>"><br>
<input type="text" name="precio_base" value="<?=$data->precio_base?>"><br>





<!-- file lama -->

<!-- ID -->
<input type="hidden" name="id_producto" value="<?=$data->id_producto?>">

<input type="submit" name="submit" value="Submit" class="btn btn-default">
</form>
<?php echo form_close(); ?>
</div>
</div>