<?php
/* Smarty version 3.1.32, created on 2019-03-06 22:00:14
  from 'D:\Program\OpenServer\domains\smarty\templates\catalog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c8018be9d2eb5_79034212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79e26785e577256307669fd3fbe0756f119cc335' => 
    array (
      0 => 'D:\\Program\\OpenServer\\domains\\smarty\\templates\\catalog.tpl',
      1 => 1541603833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8018be9d2eb5_79034212 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="catalog" ><table  style="border: solid; font-size: larger; width: 930px">
        <tr bgcolor="aqua" style="font-family: 'Comic Sans MS'">
            <th>№</th>
            <th>model</th>
            <th>Photo</th>
            <th>Price</th>
            <th>Count</th>
            <th>Подробнее</th></tr>

        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['catalog']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <tr bgcolor="#7fffd4" align="center">
            <td><?php echo $_smarty_tpl->tpl_vars['scip']->value++;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
</td>
            <td width="200px"><img src="images/<?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['img'];?>
" style="width: 100%"></td>
           <?php if (isset($_smarty_tpl->tpl_vars['active_page']->value)) {?>
            <td><a href='catalog.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
 $</td>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'] < 1) {?>
                <td>Нет на складе</td>
                <?php } else { ?>
            <td><?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['count'];?>

                <br><a href="basket.php?id=<?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
&mod=add&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">Купить</a>
            <?php }?>
            <td><a href="out_item.php?idt=<?php echo $_smarty_tpl->tpl_vars['catalog']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">подробне</a></td></tr>
        <?php
}
}
?>
    </table>

    <table style="font-size: 20px; margin-top: 10px; width: 100%"><tr>
            <?php if (($_smarty_tpl->tpl_vars['active_page']->value == 1)) {?>
                <td bgcolor='#7fffd4' style="text-decoration: none; color: black" > Первая </td>
                <td bgcolor='#7fffd4'><img src='../images/images.png' width=100px></td>
            <?php } else { ?>
                <td> <a href='catalog.php?page=1<?php if ((isset($_smarty_tpl->tpl_vars['id_cat']->value))) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;
}?>' style="text-decoration: none; color: black"> Первая </a></td>
                <td> <a href='catalog.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value-1;
if ((isset($_smarty_tpl->tpl_vars['id_cat']->value))) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;
}?>'><img src='../images/images.png' width=100px'></a></td>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['count_pages']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['count_pages']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                <?php if (($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['active_page']->value)) {?>
                    <td bgcolor='#7fffd4'>...</td>
                <?php } else { ?>
                    <td><a href='catalog.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;
if (isset($_smarty_tpl->tpl_vars['id_cat']->value)) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;
}?>' style="text-decoration: none; color: black; display: block; width: 55px"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></td>
                <?php }?>
            <?php }
}
?>
            <?php if (($_smarty_tpl->tpl_vars['active_page']->value == $_smarty_tpl->tpl_vars['count_pages']->value)) {?>
                <td bgcolor='#7fffd4'><img src='../images/download.jpg' width=100px></td>
                <td bgcolor='#7fffd4'> Последняя </td>
            <?php } else { ?>
                <td> <a href='catalog.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value+1;
if ((isset($_smarty_tpl->tpl_vars['id_cat']->value))) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;
}?>'><img src='../images/download.jpg' width=100px ></a></td>
                <td> <a href='catalog.php?page=<?php echo $_smarty_tpl->tpl_vars['count_pages']->value;
if ((isset($_smarty_tpl->tpl_vars['id_cat']->value))) {?>&id_cat=<?php echo $_smarty_tpl->tpl_vars['id_cat']->value;
}?>' style="text-decoration: none; color: black"> Последняя </a></td>
            <?php }?>
        </tr></table></div><?php }
}
