$(document).ready(function()
{
    $('#search').keyup(function(e) {
        if (e.which === 13) {
            var searchtxt = $("#search").val();
            var url = $("#urlsearch").val();
            var type = $("#type_id option:selected").val();
            url = url + "=" + searchtxt + "/" + type;
            searchtxt = trim(searchtxt);
            if (searchtxt === null || searchtxt === "")
            {
                toastr.error("Vui lòng nhập chuỗi cần tìm kiếm!");
            }
            else
            {
                location.href = url;
            }
        }
    });
    $('#btnsearch').click(function() {
        var searchtxt = $("#search").val();
        var url = $("#urlsearch").val();
        var type = $("#type_id option:selected").val();
        url = url + "=" + searchtxt + "/" + type;
        searchtxt = trim(searchtxt);
        if (searchtxt === null || searchtxt === "")
        {
            toastr.error("Vui lòng nhập chuỗi cần tìm kiếm!");
        }
        else
        {
            location.href = url;
        }
        //  search(url);
    });
    $("#type_id").change(function() {
        var url = $("#urlchosen").val();
        var type = $("#type_id option:selected").val();
        location.href = url+"/"+type;
    });

    function trim(str)
    {
        return  str.replace(/^[\s]+/, '').replace(/[\s]+$/, '').replace(/[\s]{2,}/, ' ');
    }

});