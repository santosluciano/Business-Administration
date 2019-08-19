<?php
/* Smarty version 3.1.30, created on 2019-08-19 20:05:20
  from "/opt/lampp/htdocs/proyectos/Business-Administration/templates/companies.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d5ae4e0046343_28314143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aed7f35baef2eeec12cc08506ccb5e44aba621bf' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/Business-Administration/templates/companies.tpl',
      1 => 1566237919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5ae4e0046343_28314143 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1 class="text-center">Listado de empresas</h1>
<table class="table table-hover table-dark">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col" colspan="2">Nombre</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
?>
        <tr>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['company']->value->getId();?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['company']->value->getName();?>
</td>
            <td></td>
            <td><button type="button" class="btn btn-primary btn-company" data-id="<?php echo $_smarty_tpl->tpl_vars['company']->value->getId();?>
" data-companyname="<?php echo $_smarty_tpl->tpl_vars['company']->value->getName();?>
">Gestionar empresa</button></td>
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
