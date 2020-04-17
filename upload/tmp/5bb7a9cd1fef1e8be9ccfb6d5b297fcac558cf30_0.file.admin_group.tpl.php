<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-17 10:25:36
  from '/home/wang/html/ehdes/admin_group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9913a0b15344_02998279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bb7a9cd1fef1e8be9ccfb6d5b297fcac558cf30' => 
    array (
      0 => '/home/wang/html/ehdes/admin_group.tpl',
      1 => 1587090335,
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
function content_5e9913a0b15344_02998279 (Smarty_Internal_Template $_smarty_tpl) {
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
            <a class="nav-link" href="admin.php">帳號管理</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">群組管理</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>


      </div>
      <div class="row text-left">
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <h4>行政人員</h4>
            </div>
            <div class="card-body">
              <table>
                <tr>
                  <th>
                    姓名
                  </th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_exec']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                <tr>
                  <td>
                    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['user']->value['id']);?>
                    <?php echo $_smarty_tpl->tpl_vars['user']->value['order_by'];?>
-<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <a href="admin_action.php?action=remove_group&group=exec&user_id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" id="exec_confirm<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" onclick="bbconfirm_link('exec_confirm<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
','確定刪除？')"><i class="fas fa-times-circle text-danger"></i></a>
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

        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <h4>級任老師</h4>
            </div>
            <div class="card-body">
              <table>
                <tr>
                  <th>
                    姓名
                  </th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_classtea']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                <tr>
                  <td>
                    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['user']->value['id']);?>
                    <?php echo $_smarty_tpl->tpl_vars['user']->value['order_by'];?>
-<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <a href="admin_action.php?action=remove_group&group=classtea&user_id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" id="classtea_confirm<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" onclick="bbconfirm_link('classtea_confirm<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
','確定刪除？')"><i class="fas fa-times-circle text-danger"></i></a>
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

        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <h4>科任老師</h4>
            </div>
            <div class="card-body">
              <table>
                <tr>
                  <th>
                    姓名
                  </th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_subtea']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                <tr>
                  <td>
                    <?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['user']->value['id']);?>
                    <?php echo $_smarty_tpl->tpl_vars['user']->value['order_by'];?>
-<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 <a href="admin_action.php?action=remove_group&group=subtea&user_id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" id="subtea_confirm<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" onclick="bbconfirm_link('subtea_confirm<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
','確定刪除？')"><i class="fas fa-times-circle text-danger"></i></a>
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
        <div class="col-md-3">
          <h4>
            指定
          </h4>
          <form action="admin_action.php" method="post" id="this_form">
            <select name="group" class="form-control">
              <option value="exec">行政人員</option>
              <option value="classtea">級任老師</option>
              <option value="subtea">科任老師</option>
            </select>
            <select name="users[]" multiple size="20" class="form-control">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['order_by'];?>
-<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <button class="btn btn-primary btn-sm">送出</button>
            <input type="hidden" name="action" value="admin_group">
          </form>
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
