<!--Main-->
<div class="container pt-24 md:pt-36 mx-auto flex flex-wrap flex-col md:flex-row items-center">
  <!--Left Col-->
  <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
    <h1 class="my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-left">
      <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
        Join Us!
      </span>
      Scan the QR code.
    </h1>
    {{-- <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left">
      Sub-hero message, not too long and not too short. Make it just right!
    </p> --}}

    <div class="flex items-center justify-between pt-4">
      <a
        class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
        href="{{ url('/client') }}"
      >
        Join Us
      </a>
    </div>
  </div>

  <!--Right Col-->
  <div class="w-full xl:w-3/5 p-12 overflow-hidden">
    <img class="mx-auto w-full rounded-lg md:w-4/5 transform -rotate-6 transition hover:scale-105 duration-700 ease-in-out hover:rotate-6" src="{{ asset('assets/images/lutf.png') }}" />
  </div>

  <div class="flex flex-col md:flex-row w-full gap-6 m-5">
    <div class="col-lg-6 w-full max-w-md p-4 border rounded-lg shadow sm:p-8 bg-gray-800 border-gray-700">
      <div class="flex items-center justify-between mb-4">
          <h5 class="text-xl font-bold leading-none text-white">Latest Customers</h5>
      </div>
      <div class="flow-root" wire:poll>
            <ul role="list" class="divide-y divide-gray-700">
              @php $limit = 4; $count = 0; @endphp
              @foreach ($clients as $client)
                  @php $count++; if ($count > $limit) {break;} @endphp
                  <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium truncate text-white">
                                {{ $client->name }}
                            </p>
                            <p class="text-sm truncate text-gray-400">
                              {{ $client->email }}
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-white">
                          {{ $client->created_at }}
                        </div>
                    </div>
                </li>
              @endforeach
             </ul>
      </div>
    </div>


    <div class="col-lg-6 w-full p-4 border rounded-lg shadow bg-gray-800 border-gray-700" style="max-height: 200px">
      <div id="fullWidthTabContent">
          <div class="rounded-lg md:p-4 bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
              <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto sm:grid-cols-2 xl:grid-cols-2 text-white sm:p-8">
                  <div class="flex flex-col items-center justify-center">
                      <dt class="mb-2 text-3xl font-extrabold text-white">50+</dt>
                      <dd class="text-gray-400">Clients</dd>
                  </div>
                  <div class="flex flex-col items-center justify-center">
                      <dt class="mb-2 text-3xl font-extrabold text-white">100+</dt>
                      <dd class="text-gray-400">Club members</dd>
                  </div>
              </dl>
          </div>
      </div>
    </div>
  </div>

  <!--Footer-->
  <div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">
    <a class="text-gray-500 no-underline hover:no-underline" href="#">&copy; App 2023</a>
  </div>
</div>
</div>
