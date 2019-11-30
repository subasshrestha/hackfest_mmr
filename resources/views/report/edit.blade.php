
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>register1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div class="register-photo">
        <div class="form-container">
            <form method="POST" action='{{ route('report.update',$report->id) }}'>
                <h2 class="text-center"><strong>Edit</strong> your report</h2>
            <div class="form-group"><input class="form-control" type="text" name="uname" placeholder="Name" value='{{$report->title}}'></div>
                <div class="form-group"><input class="form-control" type="text" name="description"  value='{{$report->description}}'></div>

                <div class="form-group">
             </div>
             <div class="form-group"><button class="btn btn-primary" type="submit">Submit</button></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>