<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="  <?= base_url(); ?>/asset/control/css/bootstrap.min.css">
    <link rel="stylesheet" href=" <?= base_url(); ?>/asset/control/css/bootstrap-toggle.min.css">
    <link rel="stylesheet" href=" <?= base_url(); ?>/asset/control/css/style.css">

    <title>Ini Control Lampu</title>
</head>

<body>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">http://</span>
                        </div>
                        <input type="text" id="host" class="form-control" placeholder="Contoh : 192.168.1.10">
                    </div>
                </div>
                <div class="form-group justify-content-center d-flex">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input pin" type="checkbox" data-toggle="toggle" data-on="D0 On" data-off="D0 OFF" value="D0">
                        <label class="form-check-label"></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input pin" type="checkbox" data-toggle="toggle" data-on="D1 On" data-off="D1 OFF" value="D1">
                        <label class="form-check-label"></label>
                    </div>
                    <!-- <div class="form-check form-check-inline">
                        <input class="form-check-input pin" type="checkbox" data-toggle="toggle" data-on="D2 On" data-off="D2 OFF" value="D2">
                        <label class="form-check-label"></label>
                    </div> -->
                    <!-- <div class="form-check form-check-inline">
                        <input class="form-check-input pin" type="checkbox" data-toggle="toggle" data-on="D3 On" data-off="D3 OFF" value="D3">
                        <label class="form-check-label"></label>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <script src=" <?= base_url(); ?>/asset/control/js/jquery.min.js"></script>
    <script src=" <?= base_url(); ?>/asset/control/js/bootstrap.min.js"></script>
    <script src=" <?= base_url(); ?>/asset/control/js/bootstrap-toggle.min.js"></script>
    <script type="text/javascript">
        $(".pin").change(function(e) {
            host = "http://" + $("#host").val() + "/";
            pin = $(this).val();
            state = this.checked ? 1 : 0;

            var data = new FormData();
            data.append('pin', pin);
            data.append('state', state);

            $.ajax({
                    url: host + 'setpin',
                    type: 'POST',
                    dataType: 'html',
                    data: data,
                    cache: false,
                    contentType: false,
                    processData: false,
                })
                .always(function() {});

        });
    </script>
</body>

</html>