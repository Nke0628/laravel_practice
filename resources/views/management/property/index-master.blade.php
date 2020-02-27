<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* http://meyerweb.com/eric/tools/css/reset/ 
        v2.0 | 20110126
        License: none (public domain)
        */

        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        /* HTML5 display-role reset for older browsers */
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol,
        ul {
            list-style: none;
        }

        blockquote,
        q {
            quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        /** ページ */
        .contents {
            color: #444;
        }

        /**　コンテンツヘッダー */
        .header {
            padding: 20px 0;
            background: #fff;
        }

        .header-container {
            width: 70%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
        }

        .header__title {
            font-size: 1.5em;
        }

        .header__post {
            background: #0094c8;
            padding: 10px 15px;
            -webkit-border-radius: 5px;
            /* for Safari and Chrome */
            -moz-border-radius: 5px;
            /* for Firefox */
            -o-border-radius: 5px;
            /* for opera */
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
        }

        /** メインコンテンツ */
        .main-contens {
            padding: 20px 0;
            /* background: #e9e9e9; */
            height: 100vh;
        }

        .main-contents-container {
            width: 70%;
            margin: 0 auto;
        }

        .condition {
            display: flex;
            justify-content: space-between;
        }

        /**　検索条件 */
        .condition-button input {
            display: none;
        }

        .condition-button {
            display: flex;
        }

        .condition-button label {
            display: block;
            cursor: pointer;
            width: 100px;
            margin: 0;
            padding: 10px;
            background: #bdc3c7;
            color: #869198;
            font-size: 16px;
            text-align: center;
            line-height: 1;
            transition: .2s;
        }

        .condition-button label:first-of-type {
            border-radius: 3px 0 0 3px;
        }

        .condition-button label:last-of-type {
            border-radius: 0 3px 3px 0;
        }

        .condition-button input[type="radio"]:checked+.condition-button__switch-1 {
            background-color: #0094c8;
            color: #fff;
        }

        .condition-button input[type="radio"]:checked+.condition-button__switch-2 {
            background-color: #0094c8;
            color: #fff;
        }

        /** 検索キーワード */
        .search-form {
            position: relative;
            max-width: 300px;
        }

        .search-form__input {
            /* position: absolute;
            left: 0;
            top: 0; */
            -webkit-border-radius: 5px;
            /* for Safari and Chrome */
            -moz-border-radius: 5px;
            /* for Firefox */
            -o-border-radius: 5px;
            /* for opera */
            border-radius: 5px;
            outline: 0;
            background: #fff;
            font-size: 16px;
            padding: 10px;
            border: 1px solid rgba(0, 0, 0, 0.3);
        }

        .search-form__input::placeholder {
            color: #acacac;
        }

        .search-form__button {
            -webkit-border-radius: 5px;
            /* for Safari and Chrome */
            -moz-border-radius: 5px;
            /* for Firefox */
            -o-border-radius: 5px;
            /* for opera */
            border-radius: 5px;
            outline: 0;
            background: #fff;
            font-size: 10px;
            padding: 10px;
            border: 1px solid rgba(0, 0, 0, 0.3);
        }

        /** リスト */

        .property-list {
            margin-top: 20px;
        }

        .property-list__item-header th {
            padding-bottom: 15px;
        }

        .property-list__item {
            background: #fff;
            height: 8vh;
            line-height: 8vh;
            border-top: 1px solid rgba(0, 0, 0, 0.3);
            /* box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); */
        }

        .property-list__table {
            width: 100%;
        }

        .property-list__item td,
        .property-list__item th {
            padding-left: 10px;
        }

        th {
            padding-left: 5px;
        }

        .property-list__item-button {
            padding: 5px 10px;
            -webkit-border-radius: 5px;
            /* for Safari and Chrome */
            -moz-border-radius: 5px;
            /* for Firefox */
            -o-border-radius: 5px;
            /* for opera */
            border-radius: 5px;
            border: 1px solid #0094c8;
            color: #0094c8;
            cursor: pointer;
            font-size: .8em;
            outline: 0;
        }

        @media(max-width: 900px) {
            .header__title {}

            .header-container {
                width: 90%;
                display: block;
            }

            .condition {
                flex-direction: column;
            }
        }

        /** コンテンツ */
    </style>
</head>

<body>
    <div class="contents">
        <div class="header">
            <div class="header-container">
                <div class="header__title">
                    <h3>プロパティマスタメンテナンス</h3>
                </div>
                <div class="header__post">+新規登録</div>
            </div>
        </div>
        <div class="main-contens">
            <div class="main-contents-container">
                <div class="condition">
                    <div class="condition__filter">
                        <div class="condition-button">
                            <input type="radio" name="s2" id="condition-button__1" value="1" checked="">
                            <label for="condition-button__1" class="condition-button__switch-1">登録済み</label>
                            <input type="radio" name="s2" id="condition-button__2" value="0">
                            <label for="condition-button__2" class="condition-button__switch-2">削除</label>
                        </div>
                    </div>
                    <div class="condition__search">
                        <form class="search-form" action="#" method="get">
                            <input class="search-form__input" name="s" type="text" placeholder="フリーワードを入力" />
                            <button class="search-form__button" type="submit">検索<i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="property-list">
                    <form action="/management/propertymaster/destory" method="post">
                        @method('delete')
                        @csrf
                        <div style="text-align: right">
                            <button type="submit" class="property-list__item-button">チェックした項目を一括削除する
                            </button>
                        </div>
                        <table class="property-list__table">
                            <tr class="property-list__item-header">
                                <th></th>
                                <th align="left">app_key</th>
                                <th align="left">note</th>
                                <th align="left">更新時間</th>
                                <th>
                                </th>
                            </tr>
                            @foreach($properties as $propertie)
                            <tr class="property-list__item">
                                <td>
                                    <input type="checkbox" name="chk[]" value="{{$propertie->id}}">
                                </td>
                                <td>{{$propertie->app_key}}</td>
                                <td>{{$propertie->note}}</td>
                                <td>{{$propertie->created_at}}</td>
                                <td>
                                    <button class="property-list__item-button">編集</button>
                                    <button class="property-list__item-button">削除</button>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>