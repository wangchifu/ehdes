<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-17 08:29:16
  from '/home/wang/html/ehdes/bootbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e98f85c94a6a4_86973982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '419cb3d61e92155d921a07dff9beb85635ca5052' => 
    array (
      0 => '/home/wang/html/ehdes/bootbox.tpl',
      1 => 1587083355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e98f85c94a6a4_86973982 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="include/bootbox/bootbox.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="include/bootbox/bootbox.locales.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $('#this_form').submit(function(e) {
        var currentForm = this;
        e.preventDefault();
        bootbox.confirm({
            title: '再確認',
            message: '請你確定一下',
            buttons: {
                confirm: {
                    label: '確定送出',
                    className: 'btn-success'
                },
                cancel: {
                    label: '我按錯了',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result) {
                    currentForm.submit();
                }
            }
        });
    });

    function bbconfirm_link(id,title) {
        link = document.getElementById(id).href;
        document.getElementById(id).href='#';
        bootbox.confirm({
            title: '請你確定一下',
            message: title,
            buttons: {
                confirm: {
                    label: '我很確定',
                    className: 'btn-success'
                },
                cancel: {
                    label: '我按錯了',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result) {
                    location.href = link;
                }else{
                    document.getElementById(id).href=link;
                }
                console.log('This was logged in the callback: ' + result);
            }
        });
    }
<?php echo '</script'; ?>
><?php }
}
