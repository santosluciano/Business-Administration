  <h1 class="text-center">Listado de empleados</h1>
  <table class="table table-hover table-dark">
      <thead>
          <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre y Apellido</th>
              <th scope="col">Edad</th>
              <th scope="col">Tipo</th>
              <th scope="col">Especialidad</th>
          </tr>            
      </thead>
      <tbody>
          {foreach from=$employees item=employee}
          <tr>
              <th scope="row">{$employee->getId()}</th>
              <td>{$employee->getFullName()}</td>
              <td>{$employee->getAge()}</td>
              <td>{$employee->getTypeSpecialty()->getEmployeeType()->getName()}</td>
              <td>{$employee->getTypeSpecialty()->getName()}</td>
              <td><button type="button" class="btn btn-primary fas fa-pen fa-lg" disabled></button>
              <button type="button" data-id="{$employee->getId()}" class="btn btn-danger fas fa-trash fa-lg delete-employee"></button></td>
          </tr>
          {/foreach}
      </tbody>
  </table>
