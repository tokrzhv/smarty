<?php
/* Smarty version 3.1.32, created on 2019-03-15 00:57:14
  from 'D:\Program\OpenServer\domains\smarty\admin\templates\update_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c8ace3a98a8d9_33332745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7bf32a178d4366d2ad7b5bebfdc5a2fcdd0f235' => 
    array (
      0 => 'D:\\Program\\OpenServer\\domains\\smarty\\admin\\templates\\update_item.tpl',
      1 => 1540388996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8ace3a98a8d9_33332745 (Smarty_Internal_Template $_smarty_tpl) {
?><form name="item" method="post" action="update_item.php" enctype="multipart/form-data">
       <h1>Update This Model</h1>
       <input  type="text" name="model" value="<?php echo $_smarty_tpl->tpl_vars['model']->value;?>
">
       <h1>Update Data</h1>
       <input type="date" name="data" value="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
">
       <h1>Update count items</h1>
       <input type="number" name="count" value="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
">
       <h1>Update Image</h1>
       <table><tr><td><img src="../images/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"><input type="hidden" name="oldphoto" value="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"></td></tr></table>
       <input type="file" name="photo" >
    <h1>Update Categories</h1>
    <select name="id_cat">
        <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php if ($_smarty_tpl->tpl_vars['categories']->value == $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id']) {?>
                <option selected value="<?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
</option>
                <?php } else { ?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['model'];?>
</option>
            <?php }?>
        <?php
}
}
?>
    </select>
        <h1>Update price</h1>
        <input type="number" name="price" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
">
        <h1>Update Comment</h1>
        <input type="text" name="comment" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><br>
        <input type="submit" name="send" placeholder="send">
</form><?php }
}
