<?php
/* Smarty version 3.1.32, created on 2018-10-24 14:08:34
  from 'D:\OpenServer\domains\smarty\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd052b2df8d53_95620895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c11655e192623ffbd6d1594fb3e0da2b79953ff4' => 
    array (
      0 => 'D:\\OpenServer\\domains\\smarty\\templates\\search.tpl',
      1 => 1540379314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd052b2df8d53_95620895 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="catalog">
    <table  style="border: solid; font-size: larger; width: 930px">
        <tr bgcolor="aqua" style="font-family: 'Comic Sans MS'">
            <th>№</th>
            <th>model</th>
            <th>Photo</th>
            <th>Price</th>
            <th>Подробнее</th>
        </tr>
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['search']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <tr bgcolor="#7fffd4" align="center">
                <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
</td>
                <td width="200px"><img src="images/<?php echo $_smarty_tpl->tpl_vars['search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['img'];?>
" style="width: 100%"></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
 $</td>
                <td><a href="out_item.php?idt=<?php echo $_smarty_tpl->tpl_vars['search']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">подробне</a></td>
            </tr>
        <?php
}
}
?>
    </table>
</div><?php }
}
