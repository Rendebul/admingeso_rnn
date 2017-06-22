<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Detalle</title>
        <link rel="stylesheet" href="{{  asset(elixir('css/public.css')) }}">
        <!-- #GOOGLE FONT -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
        <style>
            button.close, .modal-footer {
                display: none;
            }
            thead {
                display: table-header-group;
            }

            tr {
                page-break-inside: avoid;
            }
			.modal-content {
				border: none !important;
				box-shadow: none !important;
			}
			html, body {
				background-color: #ffffff !important;
				background: transparent;
			}
        </style>

    </head>
    <body>
		{!! $html !!}
    </body>
</html>
