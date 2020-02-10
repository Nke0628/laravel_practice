<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/loading.js') }}"></script>
    <script src="{{ asset('js/dialog.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<input type="text" id="datepicker">

<div id="div1" style="display:none;">
</div>
<input type="button" id="button1" value="ボタン1" />

<div id="loading"></div>

<body>

</body>
<script>
    $(function() {
        $("#button1").on('click', function() {
            console.log($);
            var data = {};
            var dialog = new dialogLib();
            var loading = new loadingLib();
            loading.showLoading();
            dialog.ajaxOpen(data);
            setTimeout(function() {
                loading.hideLoading();
            }, 3000)
        })
    });
</script>

</html>