<?php
/* Smarty version 3.1.32, created on 2018-11-06 18:00:41
  from 'D:\OpenServer\domains\smarty\admin\templates\add_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be1ac990e2ec1_23910592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e45eeb47b330d242a2fea80bf06d7534b3bbe08' => 
    array (
      0 => 'D:\\OpenServer\\domains\\smarty\\admin\\templates\\add_item.tpl',
      1 => 1540388996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be1ac990e2ec1_23910592 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="index.php">Back</a>
<form name="items" method="post" action="add_items.php" enctype="multipart/form-data" >
    <input name="model" type="text" placeholder="add model"><br>
    <input name="data" type="date" placeholder="add dv"><br>
    <input name="count" type="number" placeholder="add count"><br>
    <input name="photo" type="file" placeholder="add photo"><br>
    <select name="id_cat">
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
</option>
        <?php
}
}
?>
    </select><br>
    <input type="number" name="price" placeholder="add price"><br>
    <input type="text" name="comment" placeholder="add comment"><br>
    <input type="submit" name="send" placeholder="add">
</form><?php }
}
