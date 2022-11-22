<?php
/* Smarty version 3.1.32, created on 2019-03-15 00:58:52
  from 'D:\Program\OpenServer\domains\smarty\admin\templates\update_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c8ace9cb09a76_12283422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b50c1d08ff2b9ff6c6a60b9a29d72cb8aa1ddf61' => 
    array (
      0 => 'D:\\Program\\OpenServer\\domains\\smarty\\admin\\templates\\update_page.tpl',
      1 => 1542035496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c8ace9cb09a76_12283422 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="update_page.php">
    <h3>Редактирование meta_title</h3>
    <textarea name="meta_title"><?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
</textarea>

    <h3>Редактирование meta_keywords</h3>
    <textarea name="meta_keywords"><?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
</textarea><br>

    <h3>Редактирование meta_description</h3>
    <textarea name="meta_description"><?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
</textarea><br>

    <h3>Редактирование title</h3>
    <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><br>
    <h3>Редактирование content</h3>

    <textarea name="content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea><br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="send" >
</form><?php }
}
