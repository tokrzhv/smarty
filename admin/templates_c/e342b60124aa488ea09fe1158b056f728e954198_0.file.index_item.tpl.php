<?php
/* Smarty version 3.1.32, created on 2019-03-15 00:57:06
  from 'D:\Program\OpenServer\domains\smarty\admin\templates\index_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c8ace32ceedd6_56528658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e342b60124aa488ea09fe1158b056f728e954198' => 
    array (
      0 => 'D:\\Program\\OpenServer\\domains\\smarty\\admin\\templates\\index_item.tpl',
      1 => 1539091085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8ace32ceedd6_56528658 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <hr><a href="index.php">Back</a><hr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <a href="index_items.php?id_cat=<?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
</a> |
    <?php
}
}
?>
    <a href="index_items.php">Все</a><hr>
</div>
<div align="center">
    <table style="border: solid; font-size: larger; width: 800px">
        <tr bgcolor="aqua" style="font-family: 'Comic Sans MS'">
            <th>№</th>
            <th>Model</th>
            <th>Photo</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <tr bgcolor="#7fffd4" align="center">
                <td ><?php echo $_smarty_tpl->tpl_vars['number']->value++;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
</td>
                <td width="200px"><img src="/images/<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" style="width: 100%"></td>
                <td><a href="update_item.php?id=<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Update</a></td>
                <td><a href="del_item.php?id=<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&model=<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
">Delete</a></td>
            </tr>
        <?php
}
}
?>
    </table>
</div>
<?php }
}
