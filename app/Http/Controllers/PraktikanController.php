<?php

namespace App\Http\Controllers;

use App\Models\Praktikan; 

use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class PraktikanController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        $praktikans = Praktikan::latest()->paginate(10);

        return view('praktikans.index', compact('praktikans'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create() : View
    {
        return view('praktikans.create');
    }

    /**
     * store
     *
     * @param mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'npm'           => 'required|min:5',
            'nama'          => 'required|min:5',
            'kelas'         => 'required|min:5',
            'kehadiran'     => 'required|min:1',
            'la'            => 'required|min:1',
            'lp'            => 'required|min:1',
            'ujian'         => 'required|min:1',
        ]);

        Praktikan::create([
            'npm'           => $request->npm,
            'nama'          => $request->nama,
            'kelas'         => $request->kelas,
            'kehadiran'     => $request->kehadiran,
            'la'            => $request->la,
            'lp'            => $request->lp,
            'ujian'         => $request->ujian
        ]);

        return redirect()->route('praktikans.index')->with(['success' => 'Data berhasil disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        $praktikan = Praktikan::findOrFail($id);

        return view('praktikans.show', compact('praktikan'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {

        $praktikan = Praktikan::findOrFail($id);

        return view('praktikans.edit', compact('praktikan'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'npm'           => 'required|min:5',
            'nama'          => 'required|min:5',
            'kelas'         => 'required|min:5',
            'kehadiran'     => 'required|min:1',
            'la'            => 'required|min:1',
            'lp'            => 'required|min:1',
            'ujian'         => 'required|min:1',
        ]);

        $praktikan = Praktikan::findOrFail($id);

        $praktikan->update([
            'npm'           => $request->npm,
            'nama'          => $request->nama,
            'kelas'         => $request->kelas,
            'kehadiran'     => $request->kehadiran,
            'la'            => $request->la,
            'lp'            => $request->lp,
            'ujian'         => $request->ujian
        ]);

        return redirect()->route('praktikans.index')->with(['success' => 'Data berhasil diubah!']);
    }

    /**
     * delete
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $praktikan = Praktikan::findOrFail($id);

        $praktikan->delete();

        return redirect()->route('praktikans.index')->with(['success' => 'Data berhasil dihapus!']);
    }
    
}