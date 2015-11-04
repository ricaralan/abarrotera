<div ng-controller="ProveedoresController">
	<form ng-submit="opcionProveedor()">
		<input type="text" placeholder="Nombre" ng-model="proveedor.prv_nombre" required/>
		<input type="text" placeholder="Teléfono" ng-model="proveedor.prv_tel" required/>
		<input type="email" placeholder="Email" ng-model="proveedor.prv_email" required/>
		<textarea placeholder="direccion" ng-model="proveedor.prv_direccion" required></textarea>
		<input type="submit" value="{{optionProveedor}}" />
	</form>
</div>