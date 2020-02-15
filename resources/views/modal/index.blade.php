<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/modal/modal.js') }}"></script>
    <title>Document</title>
    <style>
        .modal-thumb__item {
            padding: 0;
            list-style: none;
        }

        #modal {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: auto;
            width: 80%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
            border-radius: 6px;
            overflow: hidden;
            z-index: 10;
        }

        #modal__container {
            position: relative;
            background: #fff;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        #modal__contents {
            width: 100%;
            height: 100%;
        }

        #modal__close,
        #modal__prev,
        #modal__next {
            position: absolute;
            top: 10px;
            padding: 8px;
            font-size: 8px;
            line-height: 1;
            border-radius: 50%;
            background: #fff;
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.4);
            cursor: pointer;
        }

        #modal__close {
            background: #ff6353;
            right: 10px;
        }

        #modal__prev {
            right: 80px;
        }

        #modal__next {
            right: 50px;
        }

        #modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4)
        }

        #modal__contents img {
            max-width: 100%;
            height: auto;
            vertical-align: bottom;
        }

        .modal-thumb__item {
            display: inline-block;
            width: 160px;
            margin-left: 5px;
            margin-bottom: 5px;
        }

        .modal-thumb__item img {
            width: 100%;
        }
    </style>
</head>

<body>
    <div id="cotainer">
        <ul id="modal-thumb">
            <li class="modal-thumb__item">
                <a href="images/photo1.jpg" data-index="0">
                    <img src="images/photo1.jpg" alt="">
                </a>
            </li>
            <li class="modal-thumb__item">
                <a href="images/photo2.jpg" data-index="1">
                    <img src="images/photo2.jpg" alt="">
                </a>
            </li>
            <li class="modal-thumb__item">
                <a href="images/photo3.jpg" data-index="2">
                    <img src="images/photo3.jpg" alt="">
                </a>
            </li>
        </ul>
    </div>
    <div style="height: 1000px"></div>
    <div id="modal">
        <div id="modal__container">
            <div id="modal__contents"></div>
            <div id="modal__close"><span>✖︎</span></div>
            <div id="modal__prev"><span>←</span></div>
            <div id="modal__next"><span>→</span></div>
        </div>
    </div>
    <div id="modal-overlay"></div>
    <script>
        $(function() {
            var modal = new Modal('.modal-thumb__item a')
        });
    </script>
</body>

</html>