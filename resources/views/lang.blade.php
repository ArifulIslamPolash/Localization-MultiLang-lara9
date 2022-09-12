
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Multilang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body>

    <div class="container text-center">
        <h1>Multilanguage Website Lravel 9</h1>
        <hr>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <strong>Select lnguage</strong>
                <select name="viewport" id="" class="form-control lang-change">
                    <option value="en" {{ session()->get('lang_code') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="bn" {{ session()->get('lang_code') == 'bn' ? 'selected' : '' }}>Bangla</option>
                    <option value="hi" {{ session()->get('lang_code') == 'hi' ? 'selected' : '' }}>Hindi</option>
                    <option value="ar" {{ session()->get('lang_code') == 'ar' ? 'selected' : '' }}>Arabic</option>
                    <option value="sp" {{ session()->get('lang_code') == 'sp' ? 'selected' : '' }}>Spanish</option>
                    <option value="zh" {{ session()->get('lang_code') == 'zh' ? 'selected' : '' }}>Chinese</option>
                </select>
            </div>
        </div>
        <div class="mt-5">{{ __('textlang.content') }}</div>
        {{-- __( thats doubble underscore function call string translate function in laravel )  --}}
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script type="text/javascript">

        var url = "{{ route('lang-change') }}";

        $('.lang-change').change(function(){
            let lang_code = $(this).val();
            window.location.href = url + "?lang=" + lang_code ;
        });

    </script>

  </body>

</html>
