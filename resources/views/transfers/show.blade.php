@extends('layouts.page', [
    'title' => 'Transfers from Split',
    'breadcrumbUrl' => route('transfers.show'),
    'imageUrl' => asset('images/static/transfers.jpg'),
])

@section('page')
    <section>
        <div class="max-w-3xl mx-auto flex flex-col lg:flex-row blog-content">
            <main class="w-full flex-1 mb-10 mr-0 lg:mr-12">
                <div>
                    <p class="pb-10">
                        Speedboat transfers are fast and reliable option for people who wants to avoid traffic jams and slow ferry lines.
                        Our service is available 0-24 and maximum number of passenger is <span class="font-bold text-brand">10</span>.
                    </p>
                    <h3>Included</h3>
                    <ul>
                        <li>speedboat with crew</li>
                        <li>safety equipment</li>
                        <li>bottled water</li>
                        <li>fuel</li>
                    </ul>

                    <table class="table">
                        <thead class="border-transparent border-0">
                        <tr>
                            <th scope="col">Start</th>
                            <th scope="col">Destination</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="transition hover:bg-brand hover:text-white font-semibold">
                                <td>Split (Riva)</td>
                                <td>Split (Airport)</td>
                                <td>15 min</td>
                                <td>110€</td>
                            </tr>
                            <tr class="transition hover:bg-brand hover:text-white font-semibold">
                                <td>Split (Riva)</td>
                                <td>Trogir</td>
                                <td>20 min</td>
                                <td>130€</td>
                            </tr>
                            <tr class="transition hover:bg-brand hover:text-white font-semibold">
                                <td>Split</td>
                                <td>Šolta</td>
                                <td>25 min</td>
                                <td>150€</td>
                            </tr>
                            <tr class="transition hover:bg-brand hover:text-white font-semibold">
                                <td>Split</td>
                                <td>Hvar</td>
                                <td>1 hour</td>
                                <td>280€</td>
                            </tr>
                            <tr class="transition hover:bg-brand hover:text-white font-semibold">
                                <td>Split</td>
                                <td>Brač (Supetar)</td>
                                <td>25 min</td>
                                <td>150€</td>
                            </tr>
                            <tr class="transition hover:bg-brand hover:text-white font-semibold">
                                <td >Split</td>
                                <td >Brač (Bol)</td>
                                <td>70 min</td>
                                <td>330€</td>
                            </tr>
                            <tr class="transition hover:bg-brand hover:text-white font-semibold">
                                <td>Split</td>
                                <td>Brač (Milna)</td>
                                <td>30 min</td>
                                <td>200€</td>
                            </tr>
                            <tr class="transition hover:bg-brand hover:text-white font-semibold">
                                <td>Split</td>
                                <td>Vis</td>
                                <td>90 min</td>
                                <td>450€</td>
                            </tr>
                    </table>
                </div>
                <div class="flex items-center">
                    <span class="flex">@include('svg.important', ['class' => 'h-5 w-5 inline-block text-brand-dark'])</span>
                    <h3 class="ml-2">Important note</h3>
                </div>
                <p>In case of bad weather we hold the right to cancel the transfer.
                        Captain is the decision maker in this case. Safety comes first!</p>
            </main>
            <aside class="w:full lg:w-1/3">
                @include('tours._partials.help')
            </aside>
        </div>
    </section>
@endsection
