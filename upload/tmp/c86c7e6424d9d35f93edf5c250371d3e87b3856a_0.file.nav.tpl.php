<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-09 10:03:12
  from '/home/wang/html/ehdes/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8e8260140af9_23770360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c86c7e6424d9d35f93edf5c250371d3e87b3856a' => 
    array (
      0 => '/home/wang/html/ehdes/nav.tpl',
      1 => 1586397790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8e8260140af9_23770360 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- header section strats -->
<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php">
            <span>
              和東國小 E 化行政網
            </span>
            </a>

            <div class="navbar-collapse" id="">
                <div class="d-none d-lg-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['admin'] == 1) {?>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">
                                <span><i class="fas fa-cogs"></i> 系統管理</span>
                            </a>
                        </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['username'] == '') {?>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value === "/ehdes/login.php") {?>
                            <li class="nav-item">
                                <a class="nav-link" href="https://gsuite.chc.edu.tw" target="_blank">
                                    <img src="images/signup.png" alt="" />
                                    <span>註冊</span>
                                </a>
                            </li>
                            <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">
                                    <img src="images/login.png" alt="" />
                                    <span>登入</span></a>
                            </li>
                            <?php }?>
                        <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link">
                                <span><i class="fas fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['user']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php" id="logout" onclick="bbconfirm_link('logout','確定要登出嗎？')">
                                <img src="images/signup.png" alt="" />
                                <span>登出</span>
                            </a>
                        </li>
                        <?php }?>
                        <li>
                            <span>　　　　　</span>
                        </li>
                    </ul>
                </div>

                <div class="custom_menu-btn">
                    <button onclick="openNav()">
                <span class="s-1">

                </span>
                        <span class="s-2">

                </span>
                        <span class="s-3">

                </span>
                    </button>
                </div>
                <div id="myNav" class="overlay">
                    <div class="overlay-content">
                        <a href="index.php">首頁</a>
                        <a href="calendar.php">校務行事曆</a>
                        <a href="meeting.php">會議文稿</a>
                        <a href="file.php">內部文件</a>
                        <a href="report.php">線上調查</a>
                        <a href="fix.php">資訊設備報修</a>
                        <a href="lunch.php">教職員午餐</a>
                        <a href="reward.php">月考獎狀</a>
                        <a href="sport.php">運動會報名</a>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['admin'] == 1) {?>
                        <a href="admin.php">[系統管理]</a>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['username'] == '') {?>
                        <?php if ($_smarty_tpl->tpl_vars['page']->value === "/ehdes/login.php") {?>
                        <a href="https://gsuite.chc.edu.tw" target="_blank">[註冊]</a>
                        <?php } else { ?>
                        <a href="login.php">[登入]</a>
                        <?php }?>
                        <?php } else { ?>
                        <span class="text-white"><i class="fas fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['user']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
<br></span>
                        <a href="logout.php" onclick="return confirm('確定要登出嗎？')">[登出]</a>
                        <?php }?>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- end header section --><?php }
}
