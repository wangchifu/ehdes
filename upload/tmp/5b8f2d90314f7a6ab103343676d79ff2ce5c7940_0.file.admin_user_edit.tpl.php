<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-17 09:37:51
  from '/home/wang/html/ehdes/admin_user_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e99086f484464_22641097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b8f2d90314f7a6ab103343676d79ff2ce5c7940' => 
    array (
      0 => '/home/wang/html/ehdes/admin_user_edit.tpl',
      1 => 1587087470,
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
function content_5e99086f484464_22641097 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php echo $_smarty_tpl->tpl_vars['select_user']->value['name'];?>
(<?php echo $_smarty_tpl->tpl_vars['select_user']->value['username'];?>
) 的帳號編輯
      </h2>
    </div>
    <div class="container">
      <div class="row text-left">
        <div class="col-md-12">
          <form action="admin_action.php" method="post" id="this_form">
            <div class="form-group">
              <label for="admin">模組管理權</label>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="calendar" name="calendar" <?php echo $_smarty_tpl->tpl_vars['calendar_check']->value;?>
>
                <label class="form-check-label" for="calendar">校務行事曆</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="meeting" name="meeting" <?php echo $_smarty_tpl->tpl_vars['meeting_check']->value;?>
>
                <label class="form-check-label" for="meeting">會議文稿</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="file" name="file" <?php echo $_smarty_tpl->tpl_vars['file_check']->value;?>
>
                <label class="form-check-label" for="file">內部文件</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="report" name="report" <?php echo $_smarty_tpl->tpl_vars['report_check']->value;?>
>
                <label class="form-check-label" for="report">線上調查</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="fix" name="fix" <?php echo $_smarty_tpl->tpl_vars['fix_check']->value;?>
>
                <label class="form-check-label" for="fix">資訊設備報修</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="lunch" name="lunch" <?php echo $_smarty_tpl->tpl_vars['lunch_check']->value;?>
>
                <label class="form-check-label" for="lunch">教職員午餐</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="reward" name="reward" <?php echo $_smarty_tpl->tpl_vars['reward_check']->value;?>
>
                <label class="form-check-label" for="reward">月考獎狀</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="sport" name="sport" <?php echo $_smarty_tpl->tpl_vars['sport_check']->value;?>
>
                <label class="form-check-label" for="sport">運動會報名</label>
              </div>
            </div>
            <div class="form-group">
              <label>排序</label>
              <input type="text" class="form-control" name="order_by" value="<?php echo $_smarty_tpl->tpl_vars['select_user']->value['order_by'];?>
" placeholder="請輸入排序" id="order_by" autofocus>
              <small class="form-text text-muted">排序編號可以在某些模組下進行排序</small>
            </div>
            <div class="form-group">
              <label>在職狀態*</label>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="in" name="disable" value="" <?php echo $_smarty_tpl->tpl_vars['disable_check1']->value;?>
>
                <label class="form-check-label text-success" for="in">在職</label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="out" name="disable" value="1" <?php echo $_smarty_tpl->tpl_vars['disable_check2']->value;?>
>
                <label class="form-check-label text-danger" for="out">離職</label>
              </div>
            </div>
            <div class="form-group">
              <label for="admin">職務群組</label>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exec" name="exec" <?php echo $_smarty_tpl->tpl_vars['exec_check']->value;?>
>
                <label class="form-check-label" for="exec">行政人員</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="classtea" name="classtea" <?php echo $_smarty_tpl->tpl_vars['classtea_check']->value;?>
>
                <label class="form-check-label" for="classtea">級任老師</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="subtea" name="subtea" <?php echo $_smarty_tpl->tpl_vars['subtea_check']->value;?>
>
                <label class="form-check-label" for="subtea">科任老師</label>
              </div>
            </div>
            <div class="form-group">
              <label for="system_admin">系統管理者</label>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="system_admin" name="admin" <?php echo $_smarty_tpl->tpl_vars['admin_check']->value;?>
>
                <label class="form-check-label" for="system_admin">是</label>
              </div>
            </div>
            <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['select_user']->value['id'];?>
">
            <input type="hidden" name="action" value="user_update">
            <a href="admin.php" class="btn btn-secondary">返回</a>
            <button type="submit" class="btn btn-primary">送出</button>
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
