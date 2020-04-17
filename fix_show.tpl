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
          <hr>
          <h2>
            {{$fix['title']}}
            <small class="text-secondary">
              {{if $fix['situation']==1}}
                [處理完畢]
              {{/if}}
              {{if $fix['situation']==2}}
                [處理中]
              {{/if}}
              {{if $fix['situation']==3}}
                [申報中]
              {{/if}}
            </small>
          </h2>
          <hr>
          <p class="lead">
            {{if $fix['user_id'] == $user['id'] || $admin}}
              <a href="fix_action.php?action=fix_destroy&id={{$fix['id']}}" id="fix_destroy" onclick="bbconfirm_link('fix_destroy','確定刪除？')"><i class="fas fa-times-circle text-danger"></i></a>
            {{/if}}
            張貼者 {{$fix['name']}} <small>張貼日期： {{$fix['created_at']}}</small>
          </p>
          <hr>
          <div style="border:2px #ccc solid;border-radius:10px;background-color:#eee;padding:10px;">
            <p style="font-size: 1.2rem;" >
              {{$content}}
            </p>
          </div>
          <hr>
          {{if $fix['reply'] != ""}}
          <h4 class="text-danger">管理員回覆：</h4>
          <p style="font-size: 1.2rem;" class="text-danger">
            {{$fix['reply']}}
          </p>
          {{/if}}

          {{if $admin}}
            <div class="card my-4">
              <h3 class="card-header">管理員回應</h3>
              <div class="card-body">
                <form action="fix_action.php" method="post" id="this_form">
                  <div class="form-group">
                    <label for="situation">處理狀況*</label>
                    <select name="situation" class="form-control">
                      <option value="2" {{$select2}}>
                        處理中
                      </option>
                      <option value="1" {{$select1}}>
                        處理完畢
                      </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="reply"><strong>回覆*</strong></label>
                    <textarea name="reply" id="content" class="form-control" required>{{$fix['reply']}}</textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">
                      <i class="fas fa-save"></i> 儲存設定
                    </button>
                  </div>
                  <input type="hidden" name="id" value="{{$fix['id']}}">
                  <input type="hidden" name="action" value="fix_admin">
                </form>
              </div>
            </div>
          {{/if}}
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