<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-17 08:04:17
  from '/home/wang/html/ehdes/fix_create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e98f281e0c902_21942853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6df4872695424ffdd715df6223b4d17498b93184' => 
    array (
      0 => '/home/wang/html/ehdes/fix_create.tpl',
      1 => 1587081857,
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
function content_5e98f281e0c902_21942853 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page_title'=>'資訊設備報修'), 0, false);
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
        資訊設備報修
      </h2>
    </div>
    <div class="container layout_padding2-top ">
      <div class="row text-left">
        <div class="col-md-12">
          <a href="fix.php" class="btn btn-outline-dark btn-sm"><i class="fas fa-list"></i> 全部列表</a>
          <a href="fix1.php" class="btn btn-outline-success btn-sm"><i class="fas fa-check-square"></i> 處理完畢列表</a>
          <a href="fix2.php" class="btn btn-outline-warning btn-sm"><i class="fas fa-exclamation-triangle"></i> 處理中列表</a>
          <a href="fix3.php" class="btn btn-outline-danger btn-sm"><i class="fas fa-phone-square"></i> 申報中列表</a>
          <a href="fix_create.php" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> 新增</a>
          <button class="btn btn-secondary btn-sm" onclick="history.back()"><i class="fas fa-backward"></i> 返回</button>

          <div class="card my-4">
            <h3 class="card-header">報修資料</h3>
            <div class="card-body">
              <div class="form-group">
                <form action="fix_action.php" method="post" id="this_form">
                <label for="title"><strong>標題*</strong></label>
                <input type="text" name="title" id="title" class="form-control" placeholder="請輸入標題" required>
              </div>
              <div class="form-group">
                <label for="content"><strong>內文*</strong></label>
                <textarea name="content" id="content" class="form-control" required>設備地點：
待修狀況：</textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-secondary btn-sm" onclick="history.back()"><i class="fas fa-backward"></i> 返回</button>
                <button type="submit" class="btn btn-primary btn-sm">
                  <i class="fas fa-save"></i> 儲存設定
                </button>
              </div>
              <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
              <input type="hidden" name="action" value="fix_store">
              </form>
            </div>
          </div>

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
