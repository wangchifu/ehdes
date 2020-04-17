<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-10 11:24:41
  from '/home/wang/html/ehdes/fix.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8fe6f91235c5_70109101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae20f7670b1d6b066b959067ff041cf41536bd96' => 
    array (
      0 => '/home/wang/html/ehdes/fix.tpl',
      1 => 1586488865,
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
function content_5e8fe6f91235c5_70109101 (Smarty_Internal_Template $_smarty_tpl) {
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
      <span><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</span>
    </div>
    <div class="container layout_padding2-top ">
      <div class="row text-left">
        <div class="col-md-12">
          <a href="fix.php" class="btn btn-outline-dark btn-sm"><i class="fas fa-list"></i> 全部列表</a>
          <a href="fix1.php" class="btn btn-outline-success btn-sm"><i class="fas fa-check-square"></i> 處理完畢列表</a>
          <a href="fix2.php" class="btn btn-outline-warning btn-sm"><i class="fas fa-exclamation-triangle"></i> 處理中列表</a>
          <a href="fix3.php" class="btn btn-outline-danger btn-sm"><i class="fas fa-phone-square"></i> 申報中列表</a>
          <a href="fix_create.php" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> 新增</a>
          <table class="table table-striped">
            <thead class="thead-light">
            <tr>
              <th>處理狀況</th>
              <th>申報日期</th>
              <th>申報人</th>
              <th>標題</th>
              <th>處理日期</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fixes']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
              <td>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['situation'] == 1) {?>
                <i class="fas fa-check-square text-success"></i>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['situation'] == 2) {?>
                <i class="fas fa-exclamation-triangle text-warning"></i>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['situation'] == 3) {?>
                <i class="fas fa-phone-square text-danger"></i>
                <?php }?>
              </td>
              <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value['created_at'];?>

              </td>
              <td>
                <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

              </td>
              <td>
                <a href="fix_show.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
              </td>
              <td>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['situation'] == 1 || $_smarty_tpl->tpl_vars['v']->value['situation'] == 2) {?>
                <?php echo $_smarty_tpl->tpl_vars['v']->value['updated_at'];?>

                <?php }?>
              </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
          </table>
          <?php echo $_smarty_tpl->tpl_vars['paginate']->value;?>

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
