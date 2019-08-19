<h1 class="text-center">Datos de la empresa</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cantidad de empleados</th>
      <th scope="col">Promedio de edad</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{$company->getId()}</th>
      <td>{$company->getName()}</td>
      <td>{$company->countEmployees()}</td>
      <td>{$company->avgEmployees()}</td>
    </tr>
  </tbody>
</table>
<h1 class="text-center">Listado de empleados</h1>
<table class="table table-hover table-dark">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre y Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Tipo</th>
            <th scope="col">Especialidad</th>
            <th scope="col"><button type="button" class="btn btn-primary btn-company" data-id="{$company->getId()}" data-companyname="{$company->getName()}">Agregar empleado</button></th>
        </tr>            
    </thead>
    <tbody>
        {foreach from=$company->getEmployees() item=employee}
        <tr>
            <th scope="row">{$employee->getId()}</th>
            <td>{$employee->getFullName()}</td>
            <td>{$employee->getAge()}</td>
            <td>{$employee->getTypeSpecialty()->getEmployeeType()->getName()}</td>
            <td>{$employee->getTypeSpecialty()->getName()}</td>
            <td><button type="button" class="btn btn-primary btn-company" data-id="{$company->getId()}" data-companyname="{$company->getName()}">Editar</button>
            <button type="button" class="btn btn-danger btn-delete" data-id="{$employee->getId()}" data-action="delete-employee">Eliminar</button></td>
        </tr>
        {/foreach}
    </tbody>
</table>
