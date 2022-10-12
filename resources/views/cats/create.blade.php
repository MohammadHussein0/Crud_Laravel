
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
<form method="POST" action="{{url("cats/store")}}">
    @csrf

    <div class="mb-3">
        <label class="form-label">Cat Name</label>
        <input type="text" id="name" class="form-control" >
      </div>

      <div class="mb-3">
        <label  class="form-label">Cat description</label>
        <textarea class="form-control" id="desc"  rows="3"></textarea>
      </div>

      <button class=" btn btn-outline-success" name="submit">submit</button>

    </form>

</body>
</html>
