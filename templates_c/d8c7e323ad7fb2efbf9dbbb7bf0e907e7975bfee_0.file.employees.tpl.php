<?php
/* Smarty version 3.1.30, created on 2019-08-19 23:38:29
  from "/opt/lampp/htdocs/proyectos/Business-Administration/templates/employees.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d5b16d50cb5b2_37706178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8c7e323ad7fb2efbf9dbbb7bf0e907e7975bfee' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/Business-Administration/templates/employees.tpl',
      1 => 1566250683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b16d50cb5b2_37706178 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employees']->value, 'employee');
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
              <td><button type="button" class="btn btn-primary fas fa-pen fa-lg" disabled></button>
              <button type="button" class="btn btn-danger fas fa-trash fa-lg" disabled></button></td>
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
