<?php
/* Smarty version 3.1.32, created on 2018-10-09 16:18:40
  from 'D:\OpenServer\domains\smarty\admin\templates\index_cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbcaab0a6cf82_34039300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4bee20457ea3245bd3654a5919c177d0a2a1623' => 
    array (
      0 => 'D:\\OpenServer\\domains\\smarty\\admin\\templates\\index_cat.tpl',
      1 => 1539091120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbcaab0a6cf82_34039300 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="index.php">Back</a>
<div align="center">
    <table style="border: solid; font-size: larger; width: 800px">
        <tr bgcolor="aqua" style="font-family: 'Comic Sans MS'" align="center">
            <th>№</th>
            <th>Название</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['update']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr bgcolor="#7fffd4" align="center">
            <td><?php echo $_smarty_tpl->tpl_vars['number']->value++;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['update']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
</td>
            <td> <a href="update_cat.php?id=<?php echo $_smarty_tpl->tpl_vars['update']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Update</a></td>
            <td> <a href="del_cat.php?id=<?php echo $_smarty_tpl->tpl_vars['update']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&model=<?php echo $_smarty_tpl->tpl_vars['update']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
">Delete</a></td></tr>
        <?php
}
}
?>
    </table>
</div><?php }
}
