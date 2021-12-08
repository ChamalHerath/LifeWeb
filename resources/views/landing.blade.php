<!DOCTYPE html>
<html lang="en">

<head>
    <title>Landing Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans|Roboto:300,700');

        /* Loader Popup */
        /* .promo-box-container {
            position: relative;
            margin: auto;
            display: block;
            margin-top: 3%;
            margin-bottom: 3%;
            width: 100%;
            height: 100%;
            z-index: 1;
            -webkit-box-shadow: 4px 4px 4px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 4px 4px 4px 0px rgba(0, 0, 0, 0.2);
            box-shadow: 4px 4px 4px 0px rgba(0, 0, 0, 0.2);
        }

        .promo-box-container img {
            object-fit: contain;
            height: 100%;
            width: 100%;
        }

        .promo-box-container .title span.lighter {
            font-weight: 300;
        }

        @media all and (max-width: 600px) {
            .promo-box-container {
                position: relative;
                margin: auto;
                display: block;
                margin-top: 1.6rem;
                margin-bottom: 1.6rem;
                width: 300px;
                height: 200px;
                z-index: 1;
                color: #000;
            } */
        }
    </style>
</head>

<body>

    <script>
        $(document).ready(function () {

            $.confirm({
                title: '',
                content: `
    <div class="promo-box-container">
        <img src="assets/img/special.jpg" alt="">
    </div>
            `,
                type: 'dark',
                typeAnimated: true,
                columnClass: 'col-md-8',
                buttons: {
                    close: function () {
                    }
                }
            });

        });
    </script>
</body>

</html>