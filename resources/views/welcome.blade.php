<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sam Rapaport</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,400;0,700;1,400&family=Source+Code+Pro:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="antialiased">
        <section class="mx-auto px-4">
            <div class="flex flex-wrap -mx-4">
                <div class="py-4 w-full md:w-1/3 md:order-last px-4">
                    <div class="flex -mx-4">
                        <div class="w-full md:w-3/4 px-4">
                            <a class="uppercase" href="/">Sam Rapaport</a>
                        </div>
                        <div class="w-full md:w-1/4 px-4">
                            <span class="text-gray">LA/GMT</span>
                        </div>
                    </div>

                    <div class="pt-8">
                        <p class="mb-4">
                            Since 2015 I have helped brands break marketing barriers online and
                            built complex infrastructure at a massive scale in big tech.
                        </p>
                        <p class="mb-4">
                            I am now on a mission to utilize my vast network of creatives and expertise in
                            modern technology to bring impossible visions into reality.
                        </p>
                        <p class="mb-4">
                            I do it for my own business as founder and creative director of
                            <a class="uppercase" href="https://fiveninesclo.com" target="_blank">Five Nines</a>.
                        </p>
                        <p class="mb-4">
                            Looking to create The Next Big Thing&trade;? Let's talk.
                        </p>
                        <hr>
                        <a class="mt-6" href="#">Email</a>
                        <br />
                        <a href="#">Instagram</a>
                        <hr>
                    </div>
                </div>

                <div class="w-full md:w-2/3 px-4">
                    <hr>
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full md:w-2/5 p-4">
                            <img src="https://via.placeholder.com/1440x1080" alt="">
                        </div>
                        <div class="w-full md:w-3/5 p-4">
                            <div class="flex flex-wrap -mx-4">
                                <div class="w-full md:w-3/4 px-4">
                                    <div class="mb-4">
                                        01 <a href="#" class="uppercase">Five Nines</a>
                                    </div>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus perferendis assumenda, aspernatur quibusdam beatae necessitatibus optio atque mollitia animi sunt, expedita inventore illum, vitae distinctio deleniti? Doloribus labore deleniti porro.
                                </div>
                                <div class="w-full md:w-1/4 px-4">FN-003-TFW</div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </section>
    </body>

    <script src="{{ mix('js/app.js') }}"></script>
</html>
