<?php
/* Smarty version 3.1.30, created on 2019-08-20 06:08:27
  from "/opt/lampp/htdocs/proyectos/Business-Administration/templates/searchEmployee.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d5b723bc4bbd0_59931348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c49c781256f5a6d03bcc43abebb53ee2670ca3d1' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/Business-Administration/templates/searchEmployee.tpl',
      1 => 1566270322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5b723bc4bbd0_59931348 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['employee']->value) {?>
    <div class="alert alert-success" role="alert">
    <?php echo $_smarty_tpl->tpl_vars['employee']->value->getFullName();?>
&nbsp&nbsp&nbspEdad:&nbsp<?php echo $_smarty_tpl->tpl_vars['employee']->value->getAge();?>
&nbsp&nbsp&nbspTipo:&nbsp<?php echo $_smarty_tpl->tpl_vars['employee']->value->getTypeSpecialty()->getEmployeeType()->getName();?>
 - <?php echo $_smarty_tpl->tpl_vars['employee']->value->getTypeSpecialty()->getName();?>

    </div>
<?php } else { ?>
    <div class="alert alert-warning" role="alert">
    No se encontro ningun empleado.
    </div>
<?php }
}
}
