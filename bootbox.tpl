<script src="include/bootbox/bootbox.min.js"></script>
<script src="include/bootbox/bootbox.locales.min.js"></script>
<script>
    $('#this_form').submit(function(e) {
        var currentForm = this;
        e.preventDefault();
        bootbox.confirm({
            title: '再確認',
            message: '請你確定一下',
            buttons: {
                confirm: {
                    label: '確定送出',
                    className: 'btn-success'
                },
                cancel: {
                    label: '我按錯了',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result) {
                    currentForm.submit();
                }
            }
        });
    });

    function bbconfirm_link(id,title) {
        link = document.getElementById(id).href;
        document.getElementById(id).href='#';
        bootbox.confirm({
            title: '請你確定一下',
            message: title,
            buttons: {
                confirm: {
                    label: '我很確定',
                    className: 'btn-success'
                },
                cancel: {
                    label: '我按錯了',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result) {
                    location.href = link;
                }else{
                    document.getElementById(id).href=link;
                }
                console.log('This was logged in the callback: ' + result);
            }
        });
    }
</script>