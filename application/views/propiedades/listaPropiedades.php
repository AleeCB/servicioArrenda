<div class="container">
	<table class="table table-striped table-border">
		<thead> 
			<th>Nombre</th>
			<th>Ubicación</th>
			<th>Número de habitantes</th>
			<th>Precio</th>
			<th>Estatus</th>
			<th>Amueblado</th>
			<th>Tipo propiedad</th>
			<th>Foto</th>
		</thead>
		<tbody>
			<tr>
				 <!-- ciclo para renderizar los datos  -->
				 <?php foreach ($propiedades as $key): ?>
				<!--  	fila por cada producto -->

				 	<tr>
				 		<!-- imprimir la variable key, haciendo refrencia al atributo de la tabla  -->
				 		<td> <?=$key->idPropiedad ?></td>
				 	</tr>
				 <?php endforeach ?>
			</tr>
		</tbody>

	</table>
</div>