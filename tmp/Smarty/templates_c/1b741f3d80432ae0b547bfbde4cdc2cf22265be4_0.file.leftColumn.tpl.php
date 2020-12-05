<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-26 18:02:41
  from '/home/gelexxi/www/story/views/default/leftColumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbfc39142c8b2_53216979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b741f3d80432ae0b547bfbde4cdc2cf22265be4' => 
    array (
      0 => '/home/gelexxi/www/story/views/default/leftColumn.tpl',
      1 => 1606402959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbfc39142c8b2_53216979 (Smarty_Internal_Template $_smarty_tpl) {
?>
    
  <div id="leftColumn" >
      <div id="leftMenu">
          <div class="menuCaption">Меню:</div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></br>
                
                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
?>
                        --<a href='#'><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></br>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
                <?php }?>
                
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          
      </div>
 </div>    
 <?php }
}
