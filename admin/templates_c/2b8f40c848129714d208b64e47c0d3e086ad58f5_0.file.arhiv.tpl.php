<?php
/* Smarty version 3.1.32, created on 2018-11-07 18:25:01
  from 'D:\OpenServer\domains\smarty\admin\templates\arhiv.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be303cd2234a6_93517622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b8f40c848129714d208b64e47c0d3e086ad58f5' => 
    array (
      0 => 'D:\\OpenServer\\domains\\smarty\\admin\\templates\\arhiv.tpl',
      1 => 1541603833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be303cd2234a6_93517622 (Smarty_Internal_Template $_smarty_tpl) {
?><div><table border='1' style="border: solid; font-size: larger; width: 900px; border='1px'">

        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arhiv']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>

            <?php if ($_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_k'] != $_smarty_tpl->tpl_vars['smena']->value) {?>
                <tr align="center" style='border: lime; border-bottom-color: red; font-size: 30px; background-color: #4f7a8b'>
                    <th>№</th>
                    <th>fio</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>adres</th>
                    <th>prem</th>
                    <th>data_zakaza</th>
                    <th>Вернуть</th></tr>

                <tr align="center">
                    <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['tel'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['adres'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['prem'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['data_z'];?>
</td>
                    <td><a href="run_arhiv.php?id_k=<?php echo $_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_k'];?>
"><<>></a></td></tr>

                <tr align="center">
                    <th>PHOTO</th>
                    <th>MODEL</th>
                    <th>Price</th>
                    <th>Kolvo</th>
                    <th>Count items</th>
                    <th>Stoimost</th>
                    <th>Haract</th></tr>
                <?php }?>
                    <?php $_smarty_tpl->_assignInScope('smena', $_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id_k']);?>

            <tr align="center">
                <td><img width="100" src="/images/<?php echo $_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
"></td>
                <td><?php echo $_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
 $</td>
                <td><?php echo $_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['kolvo'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['stoimost'];?>
 $</td>
                <td><?php echo $_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['comment'];?>
</td></tr>

            <?php if ($_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['stroka'] == $_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rows']) {?>
                <tr align="center" style='color: red; font-family: Comic Sans MS; font-size: 25px; border: double 2px black'>
                    <td colspan='7'>Общaя стоимость:</td>
                    <td colspan='3'><?php echo $_smarty_tpl->tpl_vars['arhiv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['totalsum'];?>
 $</td></tr>
            <?php }?>
            <?php
}
}
?>
    </table></div><?php }
}
