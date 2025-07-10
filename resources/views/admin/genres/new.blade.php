<!DOCTYPE html>
<html lang="hy">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ժանր ստեղծել</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<body style="background-color: #f8f9fa;">

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
  <div class="col-md-6">
    <div class="card shadow-lg rounded-4">
      <div class="card-body p-5">
        <h3 class="text-center mb-4">Ստեղծել ժանր</h3>
        <form  method="post" class='genreCreateForm'>
          @csrf
          <div class="mb-3">
            <label for="genreid" class="form-label">Ժանրի անվանումը</label>
            <input type="text" name="genreInputName" id="genreid" class="form-control form-control-lg rounded-3" placeholder="Մուտքագրեք ժանրը" required>
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary btn-lg px-4">Ստեղծել</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<script src="{{ asset('js/admin/genre/new.js') }}"></script>
