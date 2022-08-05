<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Send Email</title>
  </head>
  <body>
    
  </body>
</html>

<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center mt-4">Sending Email</h1>
      
      <form class="" action="send.php" method="POST">
        <div class="card mt-4 w-75 mx-auto">
          <div class="card-body">
            <!-- <div class="mb-3">
              <label>Email address</label>
              <input class="form-control" type="email" name="email" value="">
            </div> -->
            <div class="mb-3">
              <label>Name</label>
              <input class="form-control" type="text" name="name">
            </div>
            <div class="mb-3">
              <label>Pays</label>
              <input class="form-control" type="text" name="country">
            </div>
            <div class="mb-3">
              <label>Montant</label>
              <input class="form-control" type="number" name="amount">
            </div>

            <button class="btn btn-primary mt-3 w-100" type="submit" name="send">Send</button>
          </div>
        </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>