<?php
class Productos extends Eloquent
{
	public $timestamps = false;
	protected $table = "productos";
	protected $primaryKey = 'idProducto';
	protected $guarded = array("*");
	protected $fillable = array("Descripcion", "Marca", "Cantidad","Precio","Proveedor");
}