<!DOCTYPE html>
<html>
<head>
  {{include 'header.tpl' page_title='資訊設備報修'}}
<body class="sub_page">
  <div class="hero_area">
    {{include 'nav.tpl'}}
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
              <input type="hidden" name="user_id" value="{{$user['id']}}">
              <input type="hidden" name="action" value="fix_store">
              </form>
            </div>
          </div>

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