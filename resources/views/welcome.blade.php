<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E SPP Payment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('welcome/css/style.css')}}">
</head>
<body>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">E SPP Payment</a>
        </nav>
    </section>

    <section id="form">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="card">
                        <form>
                            <div class="form-group row">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label">NIS</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="colFormLabelSm">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">NISN</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="colFormLabel">
                                </div>
                              </div>
                            <button type="submit" class="btn btn-primary">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <img src="welcome/img/wave2.png" class="bottom">
    </section>
</body>
</html>