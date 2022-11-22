<?php
/* Smarty version 3.1.32, created on 2019-03-06 22:02:58
  from 'D:\Program\OpenServer\domains\smarty\templates\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c801962757383_66862202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6095540c01407fafff8999664ec08f91e0c406a' => 
    array (
      0 => 'D:\\Program\\OpenServer\\domains\\smarty\\templates\\order.tpl',
      1 => 1541604294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c801962757383_66862202 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="order">
    <?php if (isset($_smarty_tpl->tpl_vars['order']->value)) {?>
    <form action="order.php" method="post"><table border="solid" style="background-color: #4f7a8b" width="700px">
            <tr>
                <th>№</th>
                <th>Model</th>
                <th>Image</th>
                <th>Price</th>
                <th>count</th>
                <th>Stoimost</th>
                <th>Del</th></tr>
            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['order']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
</td>
                    <td width="100px"><img src="images/<?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" style="width: 100%"></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
$</td>
                    <td><input type="number" min="<?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['min_count'];?>
" max="<?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['max_count'];?>
" name="count<?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
"></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['stoimost'];?>
$</td>
                    <td><a href="basket.php?id=<?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&mod=del" style="color: darkred">X</a></td></tr>
            <?php
}
}
?>
            <tr>
                <td colspan="4">Итого:</td>
                <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['totalsum']->value;?>
$</td></tr>
            <tr>
                <td colspan='3'><a href='basket.php?mode=clear'>Очистить</a></td>
                <td colspan='4'><a href='order2.php'>Заказать</a></td>
            <tr><td colspan='7'><input type='submit' name='send'></td></tr></table>
        <?php }?>
    </form></div><?php }
}
