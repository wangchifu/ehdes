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
            <a class="nav-link active" href="#">帳號管理</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin_group.php">群組管理</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>

        <div class="col-md-12">
          <table class="table table-striped">
            <tr>
              <th>
                姓名(帳號)
              </th>
              <th>
                職稱
              </th>
              <th>
                管理
              </th>
              <th>
                排序
              </th>
              <th>
                狀態
              </th>
              <th>
                動作
              </th>
            </tr>
            {{foreach $users as $k=>$v}}
              <tr>
                <td>
                  {{if $v['admin'] == 1}}
                  <i class="fas fa-crown text-warning"></i>
                  {{/if}}
                  {{$v['name']}}({{$v['username']}})
                </td>
                <td>
                  {{$v['title']}}
                </td>
                <td>
                  {{foreach $module_name as $k2=>$v2}}
                    {{if $data_power[$v['id']][$k2] != ""}}
                      {{$data_power[$v['id']][$k2]}}<br>
                    {{/if}}
                  {{/foreach}}
                </td>
                <td>
                  {{$v['order_by']}}
                </td>
                <td>
                  {{if $v['disable'] == 1}}
                  <span class="text-danger">已離職</span>
                  {{else}}
                  <span class="text-success">在職</span>
                  {{/if}}
                </td>
                <td>
                  <a href="admin_user_edit.php?user_id={{$v['id']}}" class="btn btn-primary btn-sm">編輯</a>
                  <a href="admin_action.php?action=delete_user&user_id={{$v['id']}}" class="btn btn-danger btn-sm" id="user{{$v['id']}}" onclick="bbconfirm_link('user{{$v['id']}}','確定刪除帳號 {{$v['name']}}？')">刪除</a>
                </td>
              </tr>
            {{/foreach}}
          </table>
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