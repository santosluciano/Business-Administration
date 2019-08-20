<div class="row">
  <div class="col-6">
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
    <hr>
    <h1 class="text-center">Agregar empleado</h1>
        <form method="post" id="formCreate">
      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="name">Nombre</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Jonh" required>
        </div>
        <div class="form-group col-md-5">
          <label for="lastame">Apellido</label>
          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Doe" required>
        </div>
        <div class="form-group col-md-2">
          <label for="age">Edad</label>
          <input type="number" class="form-control" id="age" name="age" placeholder="30" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="employeeType">Tipo</label>
          <select id="employeeType" class="form-control" name="employeeType" required>
            {foreach from=$types item=type}
              <option value="{$type->getId()}">{$type->getName()}</option>              
            {/foreach}
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="employeeTypeSpecialty">Especialidad</label>
          <select id="employeeTypeSpecialty" class="form-control" name="employeeTypeSpecialty" required>
            {foreach from=$typesSpecialty item=typeSpecialty}
              <option hidden value="{$typeSpecialty->getId()}" data-type="{$typeSpecialty->getEmployeeType()->getId()}">{$typeSpecialty->getName()}</option>              
            {/foreach}
          </select>
        </div>
      </div>
      <input type="number" name="companyId" id="companyId" value="{$company->getId()}" hidden required>
      <button type="submit" class="btn btn-primary btn-block">Agregar</button>
    </form>
    <hr>
    <h1 class="title-margin text-center">Buscar empleado</h1>
    <form class="form-inline text-center text-center" id="searchEmployee">
      <label for="employeeId">Id del empleado:&nbsp&nbsp</label>
      <input class="form-control" type="search" placeholder="Buscar por ID" id="employeeId" name="employeeId">
      <input type="number" name="idCompany" id="idCompany" value="{$company->getId()}" hidden required>
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
    <div id="searchResult">
    </div>
  </div>
    <div class="col-6">
      <div class="employeesList">
      {include file="employees.tpl" employees=$company->getEmployees()}
      </div>
    </div>
  </div>  
</div>
<script>
$('#employeeType').val('');
$('#employeeTypeSpecialty').val('');
</script>