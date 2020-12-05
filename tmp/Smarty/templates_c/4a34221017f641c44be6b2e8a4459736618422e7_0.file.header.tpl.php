<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-29 18:07:00
  from '/home/gelexxi/www/story/views/default/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc3b914077895_21154342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a34221017f641c44be6b2e8a4459736618422e7' => 
    array (
      0 => '/home/gelexxi/www/story/views/default/header.tpl',
      1 => 1606662413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftColumn.tpl' => 1,
  ),
),false)) {
function content_5fc3b914077895_21154342 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo TemplateWebPath;?>
css/main.css" type="text/css"> 
    </head>
<body>
    <div id="header">
        <h1>my shop - интернет магазин</h1>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:leftColumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    
 <div id="centerColumn"><?php }
}
