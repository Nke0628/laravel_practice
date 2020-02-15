<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/validation/appModel.js') }}"></script>
    <title>Document</title>
    <style>
        .row {
            display: table;
        }

        .row .col {
            display: table-cell;
        }

        .row .col li {
            display: none;
        }
    </style>

</head>

<body>
    <div class="cotainer">
        <div class="row">
            <div class="col">
                <label for="">アカウントを作成</label>
            </div>
            <div class="col">
                <input type="text" placeholder="４文字以上8文字以下で入力してください" data-minlength="4" data-maxlength="8" required>
                <ul>
                    <li data-error="required">必須項目です</li>
                    <li>４文字以上で入力してください</li>
                    <li>８文字以下で入力してください</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">パスワード作成</label>
            </div>
            <div class="col">
                <input type="text" placeholder="４文字以上8文字以下で入力してください" data-minlength="4" data-maxlength="8" required>
                <ul>
                    <li data-error="required">必須項目です</li>
                    <li>４文字以上で入力してください</li>
                    <li>８文字以下で入力してください</li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            var appModel = new AppModel();
            var that = this;
            $('.container').on('load', function(e) {
                appModel.on(e, function() {});
            })
            console.log(appModel.listeners);
        });
    </script>
</body>

</html>