<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <meta name="viewport" content="width=device-width"/>

    <title>ElevDB</title>

    <!-- Halfmoon CSS -->
    <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet"/>
</head>
<body class="with-custom-webkit-scrollbars with-custom-css-scrollbars" data-dm-shortcut-enabled="true"
      data-sidebar-shortcut-enabled="true" data-set-preferred-mode-onload="true">
<!-- Page wrapper start -->
<div class="page-wrapper">
    <!-- Content wrapper start -->
    <div class="content-wrapper">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
                    <form action="{{ route('checkin') }}" method="post">
                        @csrf

                        @error('card_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="form-group">
                            <label for="card_id">Kort Nr.</label>
                            <input type="text" class="form-control" name="card_id" id="card_id" autofocus>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                Temporary!
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Content wrapper end -->

</div>
<!-- Page wrapper end -->

<!-- Halfmoon JS -->
<script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>
</body>
</html>

