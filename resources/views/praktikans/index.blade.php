<x-layout>
    <x-slot:title>Data Praktikan</x-slot>

    <!-- Table Section Start -->
    <section class="pb-16 pt-16 lg:py-16">
        <div class="container">
            <a href="{{ route('praktikans.create') }}" type="button"
                class="mb-2 rounded-md bg-green-700 px-7 py-3 text-lg font-medium text-white duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Tambah</a>
            <div class="flex flex-col mt-6">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500">
                                            No</th>
                                        {{-- <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500">
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
                                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @forelse ($praktikans as $praktikan)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                {{ $loop->iteration }}</td>
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
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                <form onsubmit="return confirm('Apakah anda yakin ?');"
                                                    action="{{ route('praktikans.destroy', $praktikan->id) }}"
                                                    method="POST">
                                                    <a href="{{ route('praktikans.show', $praktikan->id) }}"
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-green-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Lihat</a>
                                                    |
                                                    <a href="{{ route('praktikans.edit', $praktikan->id) }}"
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-yellow-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Edit</a>
                                                    |
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-red-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="bg-red-200">
                                            <p class="p-4">Data belum tersedia</p>
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $praktikans->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Table Section End -->

</x-layout>
