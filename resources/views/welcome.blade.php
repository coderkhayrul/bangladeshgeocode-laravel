<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="{{ asset('jquery-3.6.0.js') }}"></script>
    </head>

<body>
    <div class="container my-5">
        <h1>Geo Code Manupulation</h1>
        <form action="">
            <div class="row">
                <div class="col-md-6 my-2">
                    <label for="division">Division</label>
                    <select id="division" name="division" class="form-control">
                        <option value="0">Select Division</option>
                        @foreach ($divisions as $division)
                        <option value="{{ $division->id }}">{{ $division->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 my-2">
                    <label for="district">Districts</label>
                    <select id="district" class="form-control" name="district">
                        <option label="Select District"></option>
                    </select>
                </div>
                <div class="col-md-6 my-2">
                    <label for="thana">Thanas</label>
                    <select id="thana" name="thana" class="form-control">
                        <option label="Select Thana"></option>
                    </select>
                </div>
                <div class="col-md-6 my-2">
                    <label for="unions">Unions</label>
                    <select name="union" id="union" class="form-control">
                        <option label="Select Unions"></option>
                    </select>
                </div>
            </div>
        </form>
    </div>
    <script src="{{ asset('jquery-3.6.0.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="{{ asset('custom.js') }}"></script>
</body>

</html>
