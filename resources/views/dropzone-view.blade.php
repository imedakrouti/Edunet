<!DOCTYPE html>
<html>
<head>
    <title>Upload Multiple Images using dropzone.js and Laravel</title>
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Laravel 6 multiple image upload using dropzone  - nicesnippets.com</h2><br/>
            <form method="post" action="{{ route('dropzone.store') }}" enctype="multipart/form-data"
              class="dropzone" id="image-upload">
            @csrf
            </form>
        </div>
    </div>

</div>


<script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize         :       1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
</script>


</body>
</html>
