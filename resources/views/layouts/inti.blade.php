<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Muhammad Fikri">
    <meta name="keywords" content="">
    <meta name="generator" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title Page-->
    <title>CRUD Laravel Contoh</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="icon" href="{{asset('/favicon/journalist.png')}}" sizes="180x180" type="image/png">
    <link rel="icon" href="{{asset('/favicon/journalist.png')}}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{asset('/favicon/journalist.png')}}" sizes="16x16" type="image/png">
    <link rel="icon" href="{{asset('/favicon/journalist.png')}}">
    <meta name="theme-color" content="#7952b3">

    <!-- Icons font CSS-->
    <link href="{{asset('/dashboard/template/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/dashboard/template/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    
    <!-- Vendor CSS-->
    <link href="{{asset('/dashboard/template/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('/dashboard/template/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('/dashboard/template/css/main.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('/css/beranda/beranda.css')}}">
    <link rel="stylesheet" href="{{asset('/css/home/home.css')}}">

    <!-- Icons -->
    <link href="{{asset('/css/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link href="{{asset('/css/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

    <!-- Argon CSS -->
    {{-- <link type="text/css" href="{{asset('/css/css/argon.css?v=1.0.0')}}" rel="stylesheet"> --}}

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jsoneditor/9.2.0/jsoneditor.min.js"></script>

</head>

<body>

    <!-- header -->
    @section('header')
        @include('layouts.template.home.header')
    @show
    
    <!-- main -->
    @yield('content')

    <!-- Footer -->
    @section('footer')
        @include('layouts.template.home.footer')
    @show


    <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
        -->
    
    <!-- Jquery JS-->
        <script src="{{asset('/dashboard/template/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Vendor JS-->
        <script src="{{asset('/dashboard/template/vendor/select2/select2.min.js')}}"></script>
        <script src="{{asset('/dashboard/template/vendor/datepicker/moment.min.js')}}"></script>
        <script src="{{asset('/dashboard/template/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
        <script src="{{asset('/dashboard/template/js/global.js')}}"></script>

    <script>
        // if ($("#contactUsForm").length > 0) {
        //     $("#contactUsForm").validate({
        //         rules: {
        //             category: {
        //                 required: true,
        //                 // maxlength: 50
        //             },
        //             title: {
        //                 required: true,
        //                 // maxlength: 50,
        //                 // title: true,
        //             },  
        //             content: {
        //                 required: true,
        //                 // maxlength: 300
        //             },   
        //         },
                
        //         messages: {
        //             category: {
        //                 required: "Please Choose Category",
        //                 // maxlength: "Your name maxlength should be 50 characters long."
        //             },
        //             title: {
        //                 required: "Please enter title",
        //                 // title: "Please enter title",
        //                 // maxlength: "The email name should less than or equal to 50 characters",
        //             },   
        //             content: {
        //                 required: "Please enter content",
        //                 // maxlength: "Your message name maxlength should be 300 characters long."
        //             },
        //         },
                
        //         submitHandler: function(form) {
        //             var category    = $('#category').val();
        //             var title       = $('#title').val();
        //             var content     = $('#content').val();

        //             $.ajaxSetup({
        //                 headers: {
        //                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //                 }
        //             });
        //             $('#submit').html('Please Wait...');
        //             $("#submit").attr("disabled", true);
                    
        //             $.ajax({
        //                 url: "{{route('article.store')}}",
        //                 type: "POST",
        //                 dataType: 'json'
        //                 data: {category:category, title:title, content:content},
        //                 success: function(response) {
        //                     $('#submit').html('Submit');
        //                     $("#submit").attr("disabled", false);
        //                     alert('Ajax form has been submitted successfully');
        //                     document.getElementById("contactUsForm").reset(); 
        //                 },
        //                 error: function(error){
        //                     $(#categoryError).text(error.responseJSON.errors.name);
        //                     $(#titleError).text(error.responseJSON.errors.title);
        //                     $(#contentError).text(error.responseJSON.errors.content);
        //             });
        //         }
                

        //     })
        // }

        // FORM Validation Untuk Create
            function validateForm() {
                if( document.contactUsForm.category.value == "" ) {
                    alert( "Tolong Pilih Kategori!" );
                    return false;
                }
                
                if( document.contactUsForm.title.value == "" ) {
                    alert( "Tolong Isi Judul!" );
                    document.contactUsForm.title.focus() ;
                    return false;
                }

                if( document.contactUsForm.content.value == "" ) {
                    alert( "Tolong Isi Artikel!" );
                    document.contactUsForm.content.focus() ;
                    return false;
                }

                if( document.contactUsForm.path.value == "" ) {
                    alert( "Tolong Upload Gambar!" );
                    document.contactUsForm.path.focus() ;
                    return false;
                }
                
                return( true );
            }

            // function eraseText() {
            //     document.getElementById("output").value = "";
            //     document.getElementById("nd").value = "";
            //     document.getElementById("nb").value = "";
            //     document.getElementById("email").value = "";
            // }


            function konfirmasi()
            {
                tanya = confirm("Anda Yakin Akan Menghapus Data ?");
                if (tanya == true) return true;
                else return false;
            }
            

            // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()

    function previewFile(input){
        var file=$("input[type=file]").get(0).files[0];
        if(file)
        {
            var reader = new FileReader();
            reader.onload = function(){
                $('#previewImg').attr("src",reader.result);
            }
            reader.readAsDataURL(file);
        }
    }

    // function display(input) {
    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();
    //         reader.onload = function(event) {
    //             $('#previewImg').attr('src', event.target.result);
    //         }
    //             reader.readAsDataURL(input.files[0]);
    //         }
    // }

    // $("#image").change(function() {
    //     display(this);
    // });

    </script>

    </body>

</html>
<!-- end document-->

