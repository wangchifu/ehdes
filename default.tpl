<!DOCTYPE html>
<html>
<head>
  {{include 'header.tpl' page_title='首頁'}}
<body class="sub_page">
  <div class="hero_area">
    {{include 'nav.tpl'}}
  </div>


  <!-- section  -->
  <section class="portfolio_section layout_padding">
    <div class="container">
      <h2>
        系統管理
      </h2>
      <p>
        這是最高權限管理者的畫面
      </p>
    </div>
    <div class="container layout_padding2-top ">
      <div class="row text-left">
        <div class="col-md-12">
          123
        </div>
      </div>
    </div>
  </section>


    {{include 'footer.tpl'}}

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  </script>


</body>

</html>