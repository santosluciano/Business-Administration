<?php
/* Smarty version 3.1.30, created on 2019-08-20 06:06:22
  from "/opt/lampp/htdocs/proyectos/Business-Administration/templates/company.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d5b71bec835b7_28928764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f265752e9793e9835f3bd7149c3531c3ed750ab' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/Business-Administration/templates/company.tpl',
      1 => 1566271107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:employees.tpl' => 1,
  ),
),false)) {
function content_5d5b71bec835b7_28928764 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
          <th scope="row"><?php echo $_smarty_tpl->tpl_vars['company']->value->getId();?>
</th>
          <td><?php echo $_smarty_tpl->tpl_vars['company']->value->getName();?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['company']->value->countEmployees();?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['company']->value->avgEmployees();?>
</td>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value->getName();?>
</option>              
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="employeeTypeSpecialty">Especialidad</label>
          <select id="employeeTypeSpecialty" class="form-control" name="employeeTypeSpecialty" required>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typesSpecialty']->value, 'typeSpecialty');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['typeSpecialty']->value) {
?>
              <option hidden value="<?php echo $_smarty_tpl->tpl_vars['typeSpecialty']->value->getId();?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['typeSpecialty']->value->getEmployeeType()->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['typeSpecialty']->value->getName();?>
</option>              
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </select>
        </div>
      </div>
      <input type="number" name="companyId" id="companyId" value="<?php echo $_smarty_tpl->tpl_vars['company']->value->getId();?>
" hidden required>
      <button type="submit" class="btn btn-primary btn-block">Agregar</button>
    </form>
    <hr>
    <h1 class="title-margin text-center">Buscar empleado</h1>
    <form class="form-inline text-center text-center" id="searchEmployee">
      <label for="employeeId">Id del empleado:&nbsp&nbsp</label>
      <input class="form-control" type="search" placeholder="Buscar por ID" id="employeeId" name="employeeId">
      <input type="number" name="idCompany" id="idCompany" value="<?php echo $_smarty_tpl->tpl_vars['company']->value->getId();?>
" hidden required>
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
    <div id="searchResult">
    </div>
  </div>
    <div class="col-6">
      <div class="employeesList">
      <?php $_smarty_tpl->_subTemplateRender("file:employees.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('employees'=>$_smarty_tpl->tpl_vars['company']->value->getEmployees()), 0, false);
?>

      </div>
    </div>
  </div>  
</div>
<?php echo '<script'; ?>
>
$('#employeeType').val('');
$('#employeeTypeSpecialty').val('');
<?php echo '</script'; ?>
><?php }
}
