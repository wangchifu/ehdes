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
        系統管理
      </h2>
    </div>
    <div class="container">
      <div class="row text-left">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link" href="admin.php">帳號管理</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">群組管理</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>


      </div>
      <div class="row text-left">
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <h4>行政人員</h4>
            </div>
            <div class="card-body">
              <table>
                <tr>
                  <th>
                    姓名
                  </th>
                </tr>
                {{foreach $user_exec as $user}}
                <tr>
                  <td>
                    {{assign var="id" value=$user['id']}}
                    {{$user['order_by']}}-{{$user['name']}} <a href="admin_action.php?action=remove_group&group=exec&user_id={{$user['id']}}" id="exec_confirm{{$user['id']}}" onclick="bbconfirm_link('exec_confirm{{$id}}','確定刪除？')"><i class="fas fa-times-circle text-danger"></i></a>
                  </td>
                </tr>
                {{/foreach}}
              </table>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <h4>級任老師</h4>
            </div>
            <div class="card-body">
              <table>
                <tr>
                  <th>
                    姓名
                  </th>
                </tr>
                {{foreach $user_classtea as $user}}
                <tr>
                  <td>
                    {{assign var="id" value=$user['id']}}
                    {{$user['order_by']}}-{{$user['name']}} <a href="admin_action.php?action=remove_group&group=classtea&user_id={{$user['id']}}" id="classtea_confirm{{$user['id']}}" onclick="bbconfirm_link('classtea_confirm{{$id}}','確定刪除？')"><i class="fas fa-times-circle text-danger"></i></a>
                  </td>
                </tr>
                {{/foreach}}
              </table>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
              <h4>科任老師</h4>
            </div>
            <div class="card-body">
              <table>
                <tr>
                  <th>
                    姓名
                  </th>
                </tr>
                {{foreach $user_subtea as $user}}
                <tr>
                  <td>
                    {{assign var="id" value=$user['id']}}
                    {{$user['order_by']}}-{{$user['name']}} <a href="admin_action.php?action=remove_group&group=subtea&user_id={{$user['id']}}" id="subtea_confirm{{$user['id']}}" onclick="bbconfirm_link('subtea_confirm{{$id}}','確定刪除？')"><i class="fas fa-times-circle text-danger"></i></a>
                  </td>
                </tr>
                {{/foreach}}
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <h4>
            指定
          </h4>
          <form action="admin_action.php" method="post" id="this_form">
            <select name="group" class="form-control">
              <option value="exec">行政人員</option>
              <option value="classtea">級任老師</option>
              <option value="subtea">科任老師</option>
            </select>
            <select name="users[]" multiple size="20" class="form-control">
            {{foreach $users as $user }}
              <option value="{{$user['id']}}">{{$user['order_by']}}-{{$user['name']}}</option>
            {{/foreach}}
            </select>
            <button class="btn btn-primary btn-sm">送出</button>
            <input type="hidden" name="action" value="admin_group">
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