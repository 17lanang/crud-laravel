<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full mt-12">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> {{$title}}
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">NIM</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Alamat</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">No HP</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">email</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4">{{$data['mahasiswa']['nama']}}</td>
                                    <td class="w-1/3 text-left py-3 px-4">{{$data['mahasiswa']['nim']}}</td>
                                    <td class="w-1/3 text-left py-3 px-4">{{$data['mahasiswa']['alamat']}}</td>
                                    <td class="w-1/3 text-left py-3 px-4">{{$data['mahasiswa']['nohp']}}</td>
                                    <td class="w-1/3 text-left py-3 px-4">{{$data['mahasiswa']['email']}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</x-template-layout>