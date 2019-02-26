<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <title>Document</title>
    <script>
        $(document).ready(function () {

            $("select[name='country']").bind("change", function () {
               $.get("countryCheck.php",{country:$("select[name='country']").val()}, function (data) {
                    data = JSON.parse(data);
                    $("select[name='city']").empty();
                    for(var id in data){
                        $("select[name='city']").append($("<option value='" + id + "'>" + data[id] + "</option>"));
                    }
               });
            });

        }


//        $(".js-button").bind("click", function () {
//            $.ajax({
//                url:"check.php",
//                type:"POST",
//                data:({field:222}),
//                dataType:"html",
//                beforeSend: function () {
//                    $(".download").show();
//                }
//                success:
//            });
//        });

        );

    </script>
</head>
<body>
<label for="">CHoise u country</label>
<select name="country" id="">
    <option value="0" selected="selected"></option>
    <option value="1" selected="selected">America</option>
    <option value="2" selected="selected">Franse</option>
</select>

<label for="">Cyties</label>
<select name="city" id="">
    <option value="0" selected="selected"></option>
</select>

<br><br></br>
<input type="button" value="Загрузить данные с сервера" class="js-button">

<br></br>

<div class="download" style="visibility: hidden"><p>Подождите, идет загрузка</p>
    <img src="30.gif" alt="">
</div>


</html>



