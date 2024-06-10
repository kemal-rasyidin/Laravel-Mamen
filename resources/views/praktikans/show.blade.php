<x-layout>
    <x-slot:title>Data Detail Praktikan</x-slot>

    <!-- Table Section Start -->
    <section class="pb-16 pt-16 lg:py-16">
        <div class="container">
            <a href="{{ route('praktikans.index') }}" type="button"
                class="mb-2 rounded-md bg-blue-700 px-7 py-3 text-lg font-medium text-white duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Kembali</a>
            <div class="flex flex-col mt-6">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        {{-- <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                            ID</th> --}}
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                            NPM</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                            Nama</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                            Kelas</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                            Kehadiran</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                            LP</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                            LA</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                            Ujian</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $praktikan->id }}</td> --}}
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $praktikan->npm }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $praktikan->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $praktikan->kelas }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $praktikan->kehadiran }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $praktikan->lp }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $praktikan->la }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $praktikan->ujian }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Table Section End -->

</x-layout>
