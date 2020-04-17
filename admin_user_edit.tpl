<!DOCTYPE html>
<html>
<head>
  {{include 'header.tpl' page_title='系統管理'}}
<body class="sub_page">
  <div class="hero_area">
    {{include 'nav.tpl'}}
  </div>

  <!-- section  -->
  <section class="portfolio_section layout_padding">
    <div class="container">
      <h2>
        {{$select_user['name']}}({{$select_user['username']}}) 的帳號編輯
      </h2>
    </div>
    <div class="container">
      <div class="row text-left">
        <div class="col-md-12">
          <form action="admin_action.php" method="post" id="this_form">
            <div class="form-group">
              <label for="admin">模組管理權</label>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="calendar" name="calendar" {{$calendar_check}}>
                <label class="form-check-label" for="calendar">校務行事曆</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="meeting" name="meeting" {{$meeting_check}}>
                <label class="form-check-label" for="meeting">會議文稿</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="file" name="file" {{$file_check}}>
                <label class="form-check-label" for="file">內部文件</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="report" name="report" {{$report_check}}>
                <label class="form-check-label" for="report">線上調查</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="fix" name="fix" {{$fix_check}}>
                <label class="form-check-label" for="fix">資訊設備報修</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="lunch" name="lunch" {{$lunch_check}}>
                <label class="form-check-label" for="lunch">教職員午餐</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="reward" name="reward" {{$reward_check}}>
                <label class="form-check-label" for="reward">月考獎狀</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="sport" name="sport" {{$sport_check}}>
                <label class="form-check-label" for="sport">運動會報名</label>
              </div>
            </div>
            <div class="form-group">
              <label>排序</label>
              <input type="text" class="form-control" name="order_by" value="{{$select_user['order_by']}}" placeholder="請輸入排序" id="order_by" autofocus>
              <small class="form-text text-muted">排序編號可以在某些模組下進行排序</small>
            </div>
            <div class="form-group">
              <label>在職狀態*</label>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="in" name="disable" value="" {{$disable_check1}}>
                <label class="form-check-label text-success" for="in">在職</label>
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="out" name="disable" value="1" {{$disable_check2}}>
                <label class="form-check-label text-danger" for="out">離職</label>
              </div>
            </div>
            <div class="form-group">
              <label for="admin">職務群組</label>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exec" name="exec" {{$exec_check}}>
                <label class="form-check-label" for="exec">行政人員</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="classtea" name="classtea" {{$classtea_check}}>
                <label class="form-check-label" for="classtea">級任老師</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="subtea" name="subtea" {{$subtea_check}}>
                <label class="form-check-label" for="subtea">科任老師</label>
              </div>
            </div>
            <div class="form-group">
              <label for="system_admin">系統管理者</label>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="system_admin" name="admin" {{$admin_check}}>
                <label class="form-check-label" for="system_admin">是</label>
              </div>
            </div>
            <input type="hidden" name="user_id" value="{{$select_user['id']}}">
            <input type="hidden" name="action" value="user_update">
            <a href="admin.php" class="btn btn-secondary">返回</a>
            <button type="submit" class="btn btn-primary">送出</button>
          </form>

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