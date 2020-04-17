<!-- header section strats -->
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
                        {{if $user['admin'] == 1}}
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">
                                <span><i class="fas fa-cogs"></i> 系統管理</span>
                            </a>
                        </li>
                        {{/if}}
                        {{if $user['username'] == ""}}
                            {{if $page ==="/ehdes/login.php"}}
                            <li class="nav-item">
                                <a class="nav-link" href="https://gsuite.chc.edu.tw" target="_blank">
                                    <img src="images/signup.png" alt="" />
                                    <span>註冊</span>
                                </a>
                            </li>
                            {{else}}
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">
                                    <img src="images/login.png" alt="" />
                                    <span>登入</span></a>
                            </li>
                            {{/if}}
                        {{else}}
                        <li class="nav-item">
                            <a class="nav-link">
                                <span><i class="fas fa-user"></i> {{$user.title}} {{$user.name}}</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php" id="logout" onclick="bbconfirm_link('logout','確定要登出嗎？')">
                                <img src="images/signup.png" alt="" />
                                <span>登出</span>
                            </a>
                        </li>
                        {{/if}}
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
                        {{if $user['admin'] == 1}}
                        <a href="admin.php">[系統管理]</a>
                        {{/if}}
                        {{if $user['username'] == ""}}
                        {{if $page ==="/ehdes/login.php"}}
                        <a href="https://gsuite.chc.edu.tw" target="_blank">[註冊]</a>
                        {{else}}
                        <a href="login.php">[登入]</a>
                        {{/if}}
                        {{else}}
                        <span class="text-white"><i class="fas fa-user"></i> {{$user.title}} {{$user.name}}<br></span>
                        <a href="logout.php" onclick="return confirm('確定要登出嗎？')">[登出]</a>
                        {{/if}}
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- end header section -->