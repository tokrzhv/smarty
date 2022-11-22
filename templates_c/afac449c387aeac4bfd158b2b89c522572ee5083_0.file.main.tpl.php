<?php
/* Smarty version 3.1.32, created on 2019-03-06 22:00:09
  from 'D:\Program\OpenServer\domains\smarty\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c8018b94787f9_36890764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afac449c387aeac4bfd158b2b89c522572ee5083' => 
    array (
      0 => 'D:\\Program\\OpenServer\\domains\\smarty\\templates\\main.tpl',
      1 => 1542032429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8018b94787f9_36890764 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
">
    <title><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>Проект SMARTY </h1>
</header>
<div id="main">
    <div id="menu">
        <ul>
            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['menu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['page'];?>
.php"><?php echo $_smarty_tpl->tpl_vars['menu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</a></li>
            <?php
}
}
?>
        </ul></div>
</div>
    <div id="content">
      <h2 align="center"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
        <div id="poisk">
            <form name="poisk" method="get" action="search.php">
                <input name="search" type="text" placeholder="search">
                <input name="send" type="submit">
            </form></div>
        <?php if (isset($_smarty_tpl->tpl_vars['items']->value)) {?>
                <div id="korzina">
                    <table border="solid">
                        <tr><th colspan="6">Korzina</th></tr>
                        <tr>
                            <th>№</th>
                            <th>Model</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Stoimost</th>
                            <th>Del</th></tr>
                        <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['num']->value++;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
</td>
                                <td width="100px"><img src="images/<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['image'];?>
" style="width: 100%"></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
$</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['stoimost'];?>
$</td>
                                <td><a href="basket.php?id=<?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
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
                            <td colspan="3"><a href="basket.php?mod=clear">Очистить</a></td>
                            <td colspan="3"><a href="order.php">Заказать</a></td></tr></table>
                </div>
            <?php }?>
        <div>
            <div id="cat">
                <?php
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total !== 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <a href="catalog.php?id_cat=<?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
 </a>
                <?php
}
}
?>
                <a href="catalog.php">Все</a>
            </div>
        </div>
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<footer>
    &copy; Сергей Токаржевский 2018
</footer>
</body>
</html><?php }
}
