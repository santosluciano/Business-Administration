<?php
/* Smarty version 3.1.30, created on 2019-08-19 16:57:10
  from "/opt/lampp/htdocs/proyectos/Business-Administration/templates/companies.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d5ab8c65b1a45_74067179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aed7f35baef2eeec12cc08506ccb5e44aba621bf' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/Business-Administration/templates/companies.tpl',
      1 => 1566226621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5ab8c65b1a45_74067179 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
?>
    <?php echo $_smarty_tpl->tpl_vars['company']->value->getId();?>
 - <?php echo $_smarty_tpl->tpl_vars['company']->value->getName();?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
