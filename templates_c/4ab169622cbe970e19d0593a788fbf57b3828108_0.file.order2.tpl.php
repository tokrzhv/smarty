<?php
/* Smarty version 3.1.32, created on 2021-01-14 16:11:59
  from 'D:\OpenServer\domains\smarty\templates\order2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_6000431f2f6827_93011651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ab169622cbe970e19d0593a788fbf57b3828108' => 
    array (
      0 => 'D:\\OpenServer\\domains\\smarty\\templates\\order2.tpl',
      1 => 1553013148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6000431f2f6827_93011651 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="order2">
    <?php if (isset($_smarty_tpl->tpl_vars['send']->value)) {?> <h2 align="center"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</h2> <?php } else { ?>
        <form method="post" action="order2.php">
        <h2 align="center">Введите свои данные</h2>
        <input type="text" name="name" placeholder="ФИО"><br>
        <input type="tel" name="tel" placeholder="tel"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="text" name="adres" placeholder="add your adress"><br>
        <textarea name="prem" placeholder="add prem"></textarea><br>
        <input type="submit" name="send"><br>
    </form>

        <table  style="border: solid; font-size: larger" width="530px">
        <tr><th colspan="7"><h2>Ваш заказ</h2></th></tr>
        <tr bgcolor="aqua" style="font-family: 'Comic Sans MS'">
            <th>№</th>
            <th>Photo</th>
            <th>Model</th>
            <th>Price</th>
            <th>Count</th>
            <th>Стоимость</th>
        </tr>
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['order2']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <tr bgcolor="#7fffd4" align="center">
            <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
            <td><img width="50px" src='images/<?php echo $_smarty_tpl->tpl_vars['order2']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
'></td>
            <td><?php echo $_smarty_tpl->tpl_vars['order2']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order2']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order2']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['order2']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['stoimost'];?>
</td>
            </tr><?php
}
}
?>
        <tr bgcolor="#7fffd4" align="center">
            <td colspan="4">Итого:</td>
            <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['totalsum']->value;?>
$</td>
        </tr>
        </table><?php }?>

</div><?php }
}
