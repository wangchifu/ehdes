<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-08 14:07:49
  from '/home/wang/html/ehdes/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8d6a35436e54_99298153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e50b25e21abc3842974ba512aba18c3aa7fbab1' => 
    array (
      0 => '/home/wang/html/ehdes/login.tpl',
      1 => 1586326066,
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
function content_5e8d6a35436e54_99298153 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page_title'=>'登入'), 0, false);
?>
<body class="sub_page">
  <div class="hero_area">
    <?php $_smarty_tpl->_subTemplateRender('file:nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>


  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <p>
        你必須使用
      </p>
      <h2 class="">
        彰化 GSuite 帳號登入
      </h2>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-md-7 ">
          <form action="login.php" method="post">
            <div class="contact_form-container">
              <div>
                <div>
                  <label>
                    帳號
                    <div class="input-group-prepend">
                      <input type="text"  name="username" placeholder="請輸入帳號" autofocus required />
                      <div class="input-group-text">@chc.edu.tw</div>
                    </div>
                  </label>
                </div>
                <div>
                  <label>
                    密碼
                    <input type="password" name="password" placeholder="請輸入密碼" required />
                  </label>
                  <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
                </div>
                <div class="mt-5">
                  <button type="submit">
                    登入
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-5">
          <div class="contact_img-box">
            <a href="https://gsuite.chc.edu.tw" target="_blank">
              <img src="images/gsuite_logo.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

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
