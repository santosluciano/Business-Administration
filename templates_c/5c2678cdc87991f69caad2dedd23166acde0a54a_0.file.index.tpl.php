<?php
/* Smarty version 3.1.30, created on 2019-08-20 13:57:12
  from "/opt/lampp/htdocs/proyectos/Business-Administration/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d5be018cba435_27548560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c2678cdc87991f69caad2dedd23166acde0a54a' => 
    array (
      0 => '/opt/lampp/htdocs/proyectos/Business-Administration/templates/index.tpl',
      1 => 1566302230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5d5be018cba435_27548560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Gestion de empresas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto menu">
      <li class="nav-item active">
        <a class="nav-link nav-ajax" href="#" data-action="companies">Empresas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Tipos de empleados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Especialidades</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link fas fa-arrow-circle-left fa-lg d-none nav-return" href="#"></a>
      </li>
    </ul>    
  </div>
</nav>
<div class="container-fluid bodyPage">
    
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
