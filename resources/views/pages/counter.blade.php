<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Counter</title>
    <style>
        .counter {
            color: #f27f21;
            font-family: 'Open Sans', sans-serif;
            text-align: center;
            height: 190px;
            width: 190px;
            padding: 30px 25px 25px;
            margin: 0 auto;
            border: 3px solid #f27f21;
            border-radius: 20px 20px;
            position: relative;
            z-index: 1;
        }

        .counter:before,
        .counter:after {
            content: "";
            background: #f3f3f3;
            border-radius: 20px;
            box-shadow: 4px 4px 2px rgba(0, 0, 0, 0.2);
            position: absolute;
            left: 15px;
            top: 15px;
            bottom: 15px;
            right: 15px;
            z-index: -1;
        }

        .counter:after {
            background: transparent;
            width: 100px;
            height: 100px;
            border: 15px solid #f27f21;
            border-top: none;
            border-right: none;
            border-radius: 0 0 0 20px;
            box-shadow: none;
            top: auto;
            left: -10px;
            bottom: -10px;
            right: auto;
        }

        .counter .counter-icon {
            font-size: 35px;
            line-height: 35px;
            margin: 0 0 15px;
            transition: all 0.3s ease 0s;
        }

        .counter:hover .counter-icon {
            transform: rotateY(360deg);
        }

        .counter .counter-value {
            color: #555;
            font-size: 30px;
            font-weight: 600;
            line-height: 20px;
            margin: 0 0 20px;
            display: block;
            transition: all 0.3s ease 0s;
        }

        .counter:hover .counter-value {
            text-shadow: 2px 2px 0 #d1d8e0;
        }

        .counter h3 {
            font-size: 17px;
            font-weight: 700;
            text-transform: uppercase;
            margin: 0 0 15px;
        }

        .counter.blue {
            color: rgba(43, 174, 102, 0.412);
            border-color: rgba(43, 174, 102, 0.412);
        }

        .counter.blue:after {
            border-bottom-color: rgba(43, 174, 102, 0.412);
            border-left-color: rgba(43, 174, 102, 0.412);
        }

        @media screen and (max-width:990px) {
            .counter {
                margin-bottom: 40px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <span class="counter-value">57</span>
                    <h3>Branches</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter blue">
                    <div class="counter-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <span class="counter-value">100</span>
                    <h3>Service Centers</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter">
                    <div class="counter-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <span class="counter-value">500</span>
                    <h3>Specialized Sales Force</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="counter blue">
                    <div class="counter-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <span class="counter-value">250</span>
                    <h3>Permanent Employees</h3>
                </div>
            </div>
        </div>
    </div><br><br>


    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.counter-value').each(function () {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        });
    </script>
</body>

</html>