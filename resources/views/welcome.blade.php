<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>QUploader Error Reproduction</title>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js" integrity="sha256-aXHOBRCjmgqoEhY6VBWs3Bc+E3447Iuywezt+nkgeZk=" crossorigin="anonymous"></script>
    </head>
    <body>
    <div id="app" style="margin: auto; width: 905px;">
        <example-component></example-component>
    </div>

    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
    <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
