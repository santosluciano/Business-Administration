<?php
/* Smarty version 3.1.30, created on 2019-08-19 20:03:01
  from "/opt/lampp/htdocs/proyectos/Business-Administration/templates/company.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d5ae4558c7cb5_41753163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f265752e9793e9835f3bd7149c3531c3ed750ab' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/Business-Administration/templates/company.tpl',
      1 => 1566237764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5ae4558c7cb5_41753163 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
<h1 class="text-center">Listado de empleados</h1>
<table class="table table-hover table-dark">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre y Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Tipo</th>
            <th scope="col">Especialidad</th>
            <th scope="col"><button type="button" class="btn btn-primary btn-company" data-id="<?php echo $_smarty_tpl->tpl_vars['company']->value->getId();?>
" data-companyname="<?php echo $_smarty_tpl->tpl_vars['company']->value->getName();?>
">Agregar empleado</button></th>
        </tr>            
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['company']->value->getEmployees(), 'employee');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['employee']->value) {
?>
        <tr>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['employee']->value->getId();?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['employee']->value->getFullName();?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['employee']->value->getAge();?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['employee']->value->getTypeSpecialty()->getEmployeeType()->getName();?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['employee']->value->getTypeSpecialty()->getName();?>
</td>
            <td><button type="button" class="btn btn-primary btn-company" data-id="<?php echo $_smarty_tpl->tpl_vars['company']->value->getId();?>
" data-companyname="<?php echo $_smarty_tpl->tpl_vars['company']->value->getName();?>
">Editar</button>
            <button type="button" class="btn btn-danger btn-delete" data-id="<?php echo $_smarty_tpl->tpl_vars['employee']->value->getId();?>
" data-action="delete-employee">Eliminar</button></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tbody>
</table>
<?php }
}
