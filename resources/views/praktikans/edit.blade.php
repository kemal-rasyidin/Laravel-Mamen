<x-layout>
    <x-slot:title>Edit Data Praktikan</x-slot>

    <section class="pb-16 pt-16 lg:py-16">
        <div class="container">
            <a href="{{ route('praktikans.index') }}" type="button"
                class="mb-2 rounded-md bg-blue-700 px-7 py-3 text-lg font-medium text-white duration-300 ease-in-out hover:opacity-80 hover:shadow-lg">Kembali</a>
            <form action="{{ route('praktikans.update', $praktikan->id) }}" method="POST" enctype="multipart/form-data">
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">

                        @csrf
                        @method('PUT')

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                            <div class="col-span-full">
                                <label for="npm"
                                    class="block text-sm font-medium leading-6 text-gray-900">NPM</label>
                                <div class="mt-2">
                                    <input type="text" name="npm" id="npm"
                                        class="@error('title') is-invalid @enderror block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        value="{{ old('npm', $praktikan->npm) }}">
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="nama"
                                    class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                                <div class="mt-2">
                                    <input type="text" name="nama" id="nama"
                                        class="@error('nama') is-invalid @enderror block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        value="{{ old('nama', $praktikan->nama) }}">
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="kelas"
                                    class="block text-sm font-medium leading-6 text-gray-900">Kelas</label>
                                <div class="mt-2">
                                    <input type="text" name="kelas" id="kelas"
                                        class="@error('kelas') is-invalid @enderror block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        value="{{ old('kelas', $praktikan->nama) }}">
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="kehadiran"
                                    class="block text-sm font-medium leading-6 text-gray-900">Kehadiran</label>
                                <div class="mt-2">
                                    <input type="text" name="kehadiran" id="kehadiran"
                                        class="@error('kehadiran') is-invalid @enderror block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        value="{{ old('kehadiran', $praktikan->kehadiran) }}">
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="lp"
                                    class="block text-sm font-medium leading-6 text-gray-900">LP</label>
                                <div class="mt-2">
                                    <input type="text" name="lp" id="lp"
                                        class="@error('lp') is-invalid @enderror block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        value="{{ old('lp', $praktikan->lp) }}">
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="la"
                                    class="block text-sm font-medium leading-6 text-gray-900">LA</label>
                                <div class="mt-2">
                                    <input type="text" name="la" id="la"
                                        class="@error('la') is-invalid @enderror block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        value="{{ old('la', $praktikan->la) }}">
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="ujian"
                                    class="block text-sm font-medium leading-6 text-gray-900">Ujian</label>
                                <div class="mt-2">
                                    <input type="text" name="ujian" id="ujian"
                                        class="@error('ujian') is-invalid @enderror block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        value="{{ old('ujian', $praktikan->ujian) }}">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mt-6 mb-20  flex items-center justify-end gap-x-6">
                    <button type="reset" class="text-sm font-semibold leading-6 text-gray-900">Reset</button>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
                </div>
            </form>
        </div>
    </section>

</x-layout>
