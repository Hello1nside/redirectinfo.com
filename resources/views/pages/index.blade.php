@extends('layouts.app')

{{--@section('meta_title', $home['seo']['metaTitle'])--}}
{{--@section('meta_description', $home['seo']['metaDescription'])--}}

@section('content')
    <section class="flex justify-center mt-20 mb-20">
        <div class="text-center p-4 sm:justify-between sm:p-12 bg-primary-100 rounded-md">
            <h1 class="text-4xl font-bold text-primary-500 mb-5">URL Redirect Checker</h1>
            <div class="text-2xl font-semibold flex justify-center">
    {{--            <div class="text-gray-900">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>--}}
    {{--            <div class="text-primary-500">Start your Free Trial.</div>--}}
                <input class="rounded-md px-4 focus:outline-none border border-gray-500 focus:border-primary-600" type="text" placeholder="https://domain.com">
                <button class="bg-primary-600 hover:bg-primary-700 text-white rounded-md px-4 py-2 cursor-pointer ml-5">Trace URL</button>
            </div>

        </div>
    </section>

    @isset($redirects)
    <section class="bg-gray-100 mt-20 py-5">
        <div class="container mx-auto mt-5 mb-5 flex justify-center space-x-20">
            <div class="apache-redirects-wrapper space-y-4 mr-5">
                <h2>List of frequently used redirects in Apache</h2>

                <div class="apache-redirects flex flex-col">
{{--                    @foreach($redirects as $redirect)--}}
{{--                    <div class="apache-redirect border border-primary-600 rounded-md px-4 py-4 mb-5">--}}
{{--                        <a href="/redirect/apache/{{ $redirect['slug'] }}" class="text-primary-500 flex">--}}
{{--                            <img src="{{ asset('images/apache-48x48.jpg') }}" class="mr-2" width="24" height="24" alt="apache logo">--}}
{{--                            <h3>{{ $redirect['title'] }}</h3>--}}
{{--                        </a>--}}
{{--                        <p>{{ $redirect['author']['name'] }}</p>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
                </div>

            </div>


            <div class="nginx-redirects-wrapper space-y-4">
                <h2>List of frequently used redirects in Nginx</h2>

                <div class="nginx-redirects flex flex-col">
{{--                    @foreach($redirects as $redirect)--}}
{{--                        <div class="nginx-redirect border border-primary-600 rounded-md px-4 py-4 mb-5">--}}
{{--                            <a href="/redirect/nginx/{{ $redirect['slug'] }}" class="text-primary-500 flex">--}}
{{--                                <img src="{{ asset('images/nginx-48x48.jpg') }}" class="mr-2" width="24" height="24" alt="nginx logo">--}}
{{--                                <h3>{{ $redirect['title'] }}</h3>--}}
{{--                            </a>--}}
{{--                            <p>{{ $redirect['author']['name'] }}</p>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
                </div>

            </div>
        </div>
    </section>
    @endisset

    <section class="container mx-auto space-y-4 mt-5 mb-5">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget dolor a lacus egestas pulvinar. Nulla mauris augue, dignissim non quam nec, congue luctus velit.
            Duis ac ligula dictum, sagittis ligula congue, rhoncus nulla. Morbi iaculis magna arcu, et tempor ante ornare quis. Nulla consequat risus eu consectetur feugiat.
            Cras fermentum justo at quam dapibus, non tincidunt mi suscipit. Nunc ut tortor ac tellus malesuada sagittis at id lectus. Morbi vitae blandit nulla. Suspendisse
            facilisis lobortis bibendum.</p>

        <p>Morbi hendrerit mi nunc, nec molestie diam lacinia quis. Mauris eu varius ligula. Pellentesque condimentum mattis libero a vehicula. Proin finibus augue et orci
            congue tempus. Sed aliquet vitae urna eget posuere. Donec porttitor ligula efficitur, feugiat velit a, maximus orci. Nunc dapibus ex et lorem cursus, sit amet
            mollis leo commodo. Vivamus id lacinia mi. Quisque ultrices ex non congue pellentesque. Quisque vehicula lorem euismod quam efficitur pharetra. Praesent enim eros,
            ullamcorper et libero eu, volutpat ultricies lacus. Proin sagittis iaculis justo sit amet ultrices. In sem leo, pretium vitae fringilla non, vestibulum eget ligula.
            Mauris molestie eros a interdum pulvinar. Sed eu facilisis felis.</p>

        <p>Suspendisse eu felis bibendum, ultrices erat nec, volutpat dui. Nunc ut eros volutpat, tincidunt turpis ac, bibendum lacus. Curabitur elementum pulvinar metus,
            sit amet malesuada odio volutpat eu. Donec risus leo, faucibus a sodales nec, rhoncus ut nulla. Nam eu mi quis nulla pulvinar tincidunt. Maecenas ut aliquam urna.
            Etiam et mauris vitae urna egestas aliquam in id metus. Aenean sed gravida quam. Aenean lectus nibh, rhoncus et aliquam eu, vulputate eu augue. Morbi ultricies
            tempus neque id hendrerit. Pellentesque feugiat venenatis orci eget lobortis. Proin placerat lorem eget augue tristique, nec tincidunt orci condimentum.
            Duis pulvinar est ut mauris imperdiet, vel posuere ligula efficitur. Nulla eros felis, laoreet dignissim nisi id, sodales rhoncus elit. Aliquam ac felis at
            erat euismod dictum.</p>
    </section>
@endsection
