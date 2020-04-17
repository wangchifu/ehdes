<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-17 08:21:44
  from '/home/wang/html/ehdes/fix_show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e98f698bc01e1_40059003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55872b60945393876bd3bfd28c6932b3882071c5' => 
    array (
      0 => '/home/wang/html/ehdes/fix_show.tpl',
      1 => 1587082904,
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
function content_5e98f698bc01e1_40059003 (Smarty_Internal_Template $_smarty_tpl) {
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
          <hr>
          <h2>
            <?php echo $_smarty_tpl->tpl_vars['fix']->value['title'];?>

            <small class="text-secondary">
              <?php if ($_smarty_tpl->tpl_vars['fix']->value['situation'] == 1) {?>
                [處理完畢]
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['fix']->value['situation'] == 2) {?>
                [處理中]
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['fix']->value['situation'] == 3) {?>
                [申報中]
              <?php }?>
            </small>
          </h2>
          <hr>
          <p class="lead">
            <?php if ($_smarty_tpl->tpl_vars['fix']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value['id'] || $_smarty_tpl->tpl_vars['admin']->value) {?>
              <a href="fix_action.php?action=fix_destroy&id=<?php echo $_smarty_tpl->tpl_vars['fix']->value['id'];?>
" id="fix_destroy" onclick="bbconfirm_link('fix_destroy','確定刪除？')"><i class="fas fa-times-circle text-danger"></i></a>
            <?php }?>
            張貼者 <?php echo $_smarty_tpl->tpl_vars['fix']->value['name'];?>
 <small>張貼日期： <?php echo $_smarty_tpl->tpl_vars['fix']->value['created_at'];?>
</small>
          </p>
          <hr>
          <div style="border:2px #ccc solid;border-radius:10px;background-color:#eee;padding:10px;">
            <p style="font-size: 1.2rem;" >
              <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </p>
          </div>
          <hr>
          <?php if ($_smarty_tpl->tpl_vars['fix']->value['reply'] != '') {?>
          <h4 class="text-danger">管理員回覆：</h4>
          <p style="font-size: 1.2rem;" class="text-danger">
            <?php echo $_smarty_tpl->tpl_vars['fix']->value['reply'];?>

          </p>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
            <div class="card my-4">
              <h3 class="card-header">管理員回應</h3>
              <div class="card-body">
                <form action="fix_action.php" method="post" id="this_form">
                  <div class="form-group">
                    <label for="situation">處理狀況*</label>
                    <select name="situation" class="form-control">
                      <option value="2" <?php echo $_smarty_tpl->tpl_vars['select2']->value;?>
>
                        處理中
                      </option>
                      <option value="1" <?php echo $_smarty_tpl->tpl_vars['select1']->value;?>
>
                        處理完畢
                      </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="reply"><strong>回覆*</strong></label>
                    <textarea name="reply" id="content" class="form-control" required><?php echo $_smarty_tpl->tpl_vars['fix']->value['reply'];?>
</textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">
                      <i class="fas fa-save"></i> 儲存設定
                    </button>
                  </div>
                  <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['fix']->value['id'];?>
">
                  <input type="hidden" name="action" value="fix_admin">
                </form>
              </div>
            </div>
          <?php }?>
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
