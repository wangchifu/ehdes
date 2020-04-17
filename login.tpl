<!DOCTYPE html>
<html>
<head>
  {{include 'header.tpl' page_title='登入'}}
<body class="sub_page">
  <div class="hero_area">
    {{include 'nav.tpl'}}
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
                  <span class="text-danger">{{$error}}</span>
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

    {{include 'footer.tpl'}}

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  </script>


</body>

</html>