@extends('front.app')

@section('content')

<!-- Pricing -->
<div id="pricing" class="cards-2">
    <div class="absolute bottom-0 h-40 w-full bg-white"></div>
    <div class="container px-4 pb-px sm:px-8">
        <h2 class="mb-2.5 text-white lg:max-w-xl lg:mx-auto">Rental</h2>
        <p class="mb-16 text-white lg:max-w-3xl lg:mx-auto">Kami Menyediakan Berbagai Macam Rental Untuk Anda</p>
        
       
            @foreach($types as $type)
                <div class="card border border-gray-200 shadow-lg rounded-lg">
                    <div class="card-body p-4">
                        <h2 class="card-title text-xl font-bold mb-2">{{ $type->nama_type }}</h2>
        
                        <a href="{{ route('branda.filterByType', ['id_type' => $type->id]) }}">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Tampilkan Barang
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
       
        
        <!-- Tampilkan Barang yang Difilter -->
       
       
    </div> <!-- end of container -->
</div> <!-- end of cards-2 -->

<div id="features" class="cards-1 container px-4 sm:px-8 xl:px-4">
    @if(isset($filteredBarangs) && $filteredBarangs->count())
        <h2 class="text-2xl font-bold mt-10">Barang Berdasarkan Tipe Terpilih:</h2>

        <div id="features" class="cards-1">
            <div class="container px-4 sm:px-8 xl:px-4">
                @foreach($filteredBarangs as $barang)
                    <div class="card border border-gray-200 shadow-lg rounded-lg">
                        <div class="card-body p-6">
                            <div class="card-image mb-4 ">
                                <img src="{{ asset('storage/' . $barang->foto) }}" alt="{{ $barang->nama_barang }}" class="w-full h-100 object-cover">
                            </div>
                            <h3 class="text-xl font-bold mb-2">{{ $barang->nama_barang }}</h3>
                            <p class="text-gray-600 mb-1">Tipe: <span class="font-semibold">{{ $barang->type->nama_type }}</span></p>
                            <p class="text-gray-600 mb-1">Deskripsi: <span class="font-semibold">{{ $barang->deskripsi }}</span></p>
                            <p class="text-gray-600">Harga: <span class="font-semibold">Rp {{ number_format($barang->harga_sewa, 0, ',', '.') }}</span></p>
                            
                            <!-- Tombol Chat WhatsApp -->
                           
                        <a 
                           href="https://wa.me/6287848501496?text={{ urlencode(
                           "Halo Admin, saya ingin menyewa barang berikut:" .
                           "\n=============================" .
                           "\n📦 Nama Barang: " . $barang->nama_barang .
                           "\n📁 Tipe: " . $barang->type->nama_type .
                           "\n📝 Deskripsi: " . $barang->deskripsi .
                           "\n💰 Harga Sewa: Rp " . number_format($barang->harga_sewa, 0, ',', '.') .
                           "\n🖼️ Foto Barang: " . asset('storage/' . $barang->foto) .
                           "\n=============================" .
                           "\nMohon konfirmasi jika tersedia, terima kasih!"
                           ) }}" 
                           target="_blank"
                          >
                                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4">
                                    Chat Admin di WhatsApp
                                </button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-gray-500 mt-10">Klik tombol di atas untuk memilih barang yang mau dtampilkan.</p>
    @endif
</div>

<div id="about" class="pt-16 pb-12">
    <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
        <div class="lg:col-span-5">
            <div class="mb-16 lg:mb-0 xl:mt-16">
                <h2 class="mb-6">Platform integration and life time free updates</h2>
                <p class="mb-4">Get a glimpse of what this app can do for your marketing automation and understand why current users are so excited when using Pavo
                    together with their teams.</p>
                <p class="mb-4">We will promptly answer any questions and honor your requests based on the service level agreement</p>
            </div>
        </div> <!-- end of col -->
        <div class="lg:col-span-7">
            <div class="ml-14">
                <img class="inline" src="{{ asset('front/images/dua.jpg') }}" alt="alternative" />
            </div>
        </div> <!-- end of col -->
    </div> <!-- end of container -->
</div>

<div id="contact" class="py-24">
    <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
        <div class="lg:col-span-7">
            <div class="mb-12 lg:mb-0 xl:mr-14">
                <img class="inline" src="{{ asset('front/images/satu.jpg') }}" alt="alternative" />
            </div>
        </div> <!-- end of col -->
        <div class="lg:col-span-5">
            <div class="xl:mt-12">
                <h2 class="mb-6">Instant results for the marketing department</h2>
                <ul class="list mb-7 space-y-2">
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Features that will help you and your marketers</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Smooth learning curve due to the knowledge base</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div>Ready out-of-the-box with minor setup settings</div>
                    </li>
                </ul>
                <a class="btn-solid-reg popup-with-move-anim mr-1.5" href="#details-lightbox">Info Lebih Lanjut</a>
                
            </div>
        </div> <!-- end of col -->
    </div> <!-- end of container -->
</div>



@endsection
