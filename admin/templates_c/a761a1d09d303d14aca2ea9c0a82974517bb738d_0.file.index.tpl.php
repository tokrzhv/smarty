<?php
/* Smarty version 3.1.32, created on 2019-03-15 00:56:57
  from 'D:\Program\OpenServer\domains\smarty\admin\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c8ace29bc7b02_44220876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a761a1d09d303d14aca2ea9c0a82974517bb738d' => 
    array (
      0 => 'D:\\Program\\OpenServer\\domains\\smarty\\admin\\templates\\index.tpl',
      1 => 1542031058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8ace29bc7b02_44220876 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="content">
    <table>
        <tr bgcolor="aqua" style="font-family: 'Comic Sans MS'">
            <th colspan="3">Редактирование страниц</th></tr>
        <tr bgcolor="#7fffd4">
            <th>№</th>
            <th>Название</th>
            <th>Редактировать</th></tr>
            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['update']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr bgcolor="#90ee90" align="center">
            <td ><?php echo $_smarty_tpl->tpl_vars['number']->value++;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['update']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
            <td><a href="update_page.php?id=<?php echo $_smarty_tpl->tpl_vars['update']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"> Редактировать</a></td></tr>
            <?php
}
}
?>
    </table></div>
<?php }
}
