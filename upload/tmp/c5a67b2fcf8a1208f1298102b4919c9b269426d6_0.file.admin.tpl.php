<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-17 08:37:03
  from '/home/wang/html/ehdes/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e98fa2fc91642_21598791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5a67b2fcf8a1208f1298102b4919c9b269426d6' => 
    array (
      0 => '/home/wang/html/ehdes/admin.tpl',
      1 => 1587083822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e98fa2fc91642_21598791 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page_title'=>'系統管理'), 0, false);
?>
<body class="sub_page">
  <div class="hero_area">
    <?php $_smarty_tpl->_subTemplateRender('file:nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>

  <!-- section  -->
  <section class="portfolio_section layout_padding">
    <div class="container">
      <h2>
        系統管理
      </h2>
    </div>
    <div class="container">
      <div class="row text-left">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="#">帳號管理</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_group.php">群組管理</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>

        <div class="col-md-12">
          <table class="table table-striped">
            <tr>
              <th>
                姓名(帳號)
              </th>
              <th>
                職稱
              </th>
              <th>
                管理
              </th>
              <th>
                排序
              </th>
              <th>
                狀態
              </th>
              <th>
                動作
              </th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
              <tr>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['v']->value['admin'] == 1) {?>
                  <i class="fas fa-crown text-warning"></i>
                  <?php }?>
                  <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
(<?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
)
                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>

                </td>
                <td>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module_name']->value, 'v2', false, 'k2');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k2']->value => $_smarty_tpl->tpl_vars['v2']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['data_power']->value[$_smarty_tpl->tpl_vars['v']->value['id']][$_smarty_tpl->tpl_vars['k2']->value] != '') {?>
                      <?php echo $_smarty_tpl->tpl_vars['data_power']->value[$_smarty_tpl->tpl_vars['v']->value['id']][$_smarty_tpl->tpl_vars['k2']->value];?>
<br>
                    <?php }?>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </td>
                <td>
                  <?php echo $_smarty_tpl->tpl_vars['v']->value['order_by'];?>

                </td>
                <td>
                  <?php if ($_smarty_tpl->tpl_vars['v']->value['disable'] == 1) {?>
                  <span class="text-danger">已離職</span>
                  <?php } else { ?>
                  <span class="text-success">在職</span>
                  <?php }?>
                </td>
                <td>
                  <a href="admin_user_edit.php?user_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="btn btn-primary btn-sm">編輯</a>
                  <a href="admin_action.php?action=delete_user&user_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="btn btn-danger btn-sm" id="user<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="bbconfirm_link('user<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
','確定刪除帳號 <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
？')">刪除</a>
                </td>
              </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </table>
        </div>
      </div>
    </div>
  </section>


    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php echo '<script'; ?>
>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  <?php echo '</script'; ?>
>


</body>

</html><?php }
}
