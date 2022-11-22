<?php
/* Smarty version 3.1.32, created on 2019-03-15 00:57:51
  from 'D:\Program\OpenServer\domains\smarty\admin\templates\zakaz.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c8ace5f0bcba8_12153037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd70c16e077f97c32fe8407380d6b61d0597fc712' => 
    array (
      0 => 'D:\\Program\\OpenServer\\domains\\smarty\\admin\\templates\\zakaz.tpl',
      1 => 1541603833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8ace5f0bcba8_12153037 (Smarty_Internal_Template $_smarty_tpl) {
?><div align="center">
    <table align="center" border='1px' style="border: solid; font-size: larger; width: 900px; border='1px'">
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['zakaz']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

            <?php if ($_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_k'] != $_smarty_tpl->tpl_vars['smena']->value) {?>
        <tr align="center"  style='border: black; font-size: 30px; background-color: skyblue'>
            <th>№</th>
            <th>fio</th>
            <th>phone</th>
            <th>email</th>
            <th>adres</th>
            <th>prem</th>
            <th>data_zakaza</th>
            <th>Удалить</th>
            <th>Выполнить</th></tr>

        <tr align="center" style='border: black'>
            <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tel'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['adres'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['prem'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['data_z'];?>
</td>
            <td><a href="del_zakaz.php?id_k=<?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_k'];?>
">X</a></td>
            <td><a href="run_zakaz.php?id_k=<?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_k'];?>
">>>></a></td></tr>

        <tr align="center" style='border: black'>
            <th>PHOTO</th>
            <th>MODEL</th>
            <th>Price</th>
            <th>Kolvo</th>
            <th>Count items</th>
            <th>Stoimost</th>
            <th>Haract</th></tr>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('smena', $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_k']);?>

            <tr align="center" style='border: black'>
            <td><img width="100" src="/images/<?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['img'];?>
"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
 $</td>
                <td><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['kolvo'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['stoimost'];?>
 $</td>
            <td><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['comment'];?>
</td></tr>

<?php if ($_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['stroka'] == $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rows']) {?>
        <tr align="center" style='font-family: Candara; font-size: 35px; border: red; background-color: aquamarine'>
            <td colspan='7'>Общaя стоимость:</td>
            <td colspan='3'><?php echo $_smarty_tpl->tpl_vars['zakaz']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['totalsum'];?>
 $</td></tr>
<?php }?>
    <?php
}
}
?>
    </table>



    <table style="font-size: 20px; margin-top: 10px; width: 100%"><tr>

            <?php if (($_smarty_tpl->tpl_vars['active_page']->value == 1)) {?>
                <td bgcolor='#7fffd4' style="text-decoration: none; color: black" > Первая </td>
            <?php } else { ?>
                <td> <a href='zakaz.php?page=1' style="text-decoration: none; color: black"> Первая </a></td>
                <td> <a href='zakaz.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value-1;?>
' style="text-decoration: none; color: black"> <<< </a></td>
            <?php }?>

            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['count_page']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['count_page']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                <?php if (($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['active_page']->value)) {?>
                    <td bgcolor='#7fffd4'>...</td>
                <?php } else { ?>
                    <td><a href='zakaz.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' style="text-decoration: none; color: black; display: block; width: 55px"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></td>
                <?php }?>
            <?php }
}
?>

            <?php if (($_smarty_tpl->tpl_vars['active_page']->value == $_smarty_tpl->tpl_vars['count_page']->value)) {?>
                <td bgcolor='#7fffd4'> Последняя </td>
            <?php } else { ?>
                <td> <a href='zakaz.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value+1;?>
' style="text-decoration: none; color: black"> >>> </a></td>
                <td> <a href='zakaz.php?page=<?php echo $_smarty_tpl->tpl_vars['count_page']->value;?>
' style="text-decoration: none; color: black"> Последняя </a></td>
            <?php }?>

        </tr></table></div><?php }
}
