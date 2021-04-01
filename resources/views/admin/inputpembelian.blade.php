<x-template-layout>
                <h1 class="text-3xl text-black pb-6">{{$title}}</h1>
            <div>
            <div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 sm:br-gray-100">
            <form action="{{(isset($pembelian))?route('pembelian.update',$pembelian->id):route('pembelian.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($pembelian))
        @method('PUT')
    @endif
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="last_name" class="block text-sm font-medium text-gray-700">Nama pembelian</label>
                <input type="text" name="nama" id="nama" autocomplete="family-name" value="{{(isset($pembelian))?$pembelian->nama:old('nama') }}" class="mt-1  @error('nama') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik nama pembelian">
              <div class="text-xs text-red-600">@error('nama'){{$message}} @enderror</div>
              </div>
              </div>
            <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
              <label for="last_name" class="block text-sm font-medium text-gray-700">Alamat</label>
                <input type="text" name="alamat" id="alamat" autocomplete="family-name" value="{{(isset($pembelian))?$pembelian->alamat:old('alamat') }}" class="mt-1  @error('alamat') border-red-500 @enderror  focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Ketik alamat pembelian">
              <div class="text-xs text-red-600">@error('alamat'){{$message}} @enderror</div>
              </div>
              </div>
            <div class="grid grid-cols-3 gap-15">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="jenis" class="block text-sm font-medium text-gray-700">
                                Jenis Dupa 
                            </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <select name="jenis" id="jenis" class="@error('jenis') border-red-600 @enderror focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300">
                                    <option value="">Masukan Pilihan</option>
                                    <option value="Cendana">Cendana</option>
                                    <option value="Gaharu">Gaharu</option>
                                    <option value="Kemenyan">Kemenyan</option>
                                    <option value="Gunung Kawi">Gunung Kawi</option>
                                    <option value="Saraswati">Saraswati</option>
                                </select>
                            </div>
                            <div class="text-xs text-red-500"> @error('jenis') {{$message}} @enderror</div>
                        </div>
                    </div><br>
            </div>
            <div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
            </button>
          </div>
        </div>
      </form>
                   
                 </div>
            </div>
</x-template-layout>