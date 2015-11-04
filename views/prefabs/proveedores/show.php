<div ng-controller="ProveedoresController" ng-init="getAllProveedores()">
Ver proveedores
<a href="#/proveedores/create">Nuevo</a>
	<table>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Teléfono</th>
				<th>Correo</th>
				<th>Dirección</th>
			</tr>
		</thead>
		<tbody>
			<tr ng-repeat="proveedor in proveedores">
				<td>{{proveedor.prv_nombre}}</td>
				<td>{{proveedor.prv_tel}}</td>
				<td>{{proveedor.prv_email}}</td>
				<td>{{proveedor.prv_direccion}}</td>
			</tr>
		</tbody>
	</table>
</div>