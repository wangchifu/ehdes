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
      <span>{{$p}}</span>
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
            {{foreach $fixes as $k=>$v}}
            <tr>
              <td>
                {{if $v['situation']==1}}
                <i class="fas fa-check-square text-success"></i>
                {{/if}}
                {{if $v['situation']==2}}
                <i class="fas fa-exclamation-triangle text-warning"></i>
                {{/if}}
                {{if $v['situation']==3}}
                <i class="fas fa-phone-square text-danger"></i>
                {{/if}}
              </td>
              <td>
                {{$v['created_at']}}
              </td>
              <td>
                {{$v['name']}}
              </td>
              <td>
                <a href="fix_show.php?id={{$v['id']}}">{{$v['title']}}</a>
              </td>
              <td>
                {{if $v['situation']==1 or $v['situation']==2}}
                {{$v['updated_at']}}
                {{/if}}
              </td>
            </tr>
            {{/foreach}}
            </tbody>
          </table>
          {{$paginate}}
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