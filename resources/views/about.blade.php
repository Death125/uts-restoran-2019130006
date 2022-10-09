{{-- Menampilkan halaman informasi perusahaan --}}
@extends('layouts.master')

@section('title', 'About')

@section('carousel')
@endsection

@section('content')
    @component('components.titlebox')
        @slot('title')
            About Us
        @endslot
    @endcomponent

    <div class="container text-justify">
        <div class="row-3 font-verdana">
            <p> Our restaurant opened in 2018, it's been 5 years since our restaurant was founded, from a small restaurant
                to
                grow to be this big, there were so many problems we faced when the restaurant was first established such as
                empty of visitors, rotten food ingredients due to long unused and lack of workers in our restaurant.

            </p>
        </div>
        <div class="row-3 font-verdana">
            <p>After a few months passed, our restaurant lowered the prices of the food and drinks we sell, but still the
                changes did not make any significant changes, instead there were fewer and fewer visitors day by day and our
                restaurant suffered losses, because the food and drinks we sell does not cover the development costs needed
                by restaurants such as wifi and water.</p>
        </div>
        <div class="row-3 font-verdana">
            <p>
                In 2019 our restaurant almost went bankrupt, because we lacked a lot of money to buy existing food
                ingredients as well as to pay workers' salaries. But we didn't just give up, we tried to change our food and
                drink menu. We make our food and drinks as attractive as possible to attract visitors, then we also try our
                best to put up attractive posters about our restaurant. after we made a lot of changes to our restaurant,
                visitors began to arrive one by one, they were interested in one of our menus, namely Milkshake, we also
                managed to get through a critical period and even made our restaurant more developed than before. day by day
                our restaurant is getting more and more crowded with visitors, even big officials also visit our restaurant,
                we are very grateful because we did not give up when our restaurant was almost bankrupt, but we continue to
                try to develop our restaurant and make something different that can attract visitors to come to our
                restaurant.
            </p>
        </div>

        <div class="row-3 font-verdana">
            <p>Currently our restaurant has a lot of menus ranging from fish, the main menu such as chicken, steak, mutton,
                dessert, various kinds of drinks and we also sell lots of cakes, of course all the menus we provide are of
                high quality because some are taken from abroad too. Our food ingredients come from Japan, Malaysia,
                Singapore and even Taiwan, apart from coming from these countries, we also provide some of the famous foods
                in these countries ranging from sushi, laksa, hokkien, chili crab and many others. After going through a
                long
                journey, our restaurant became very famous in Asia and our restaurant was never empty of visitors. </p>
        </div>
    </div>
    <br />
@endsection
