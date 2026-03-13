<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $agamas = Agama::query()
            ->when($request->search, function ($query, $search) {
                $query->where('nama_agama', 'like', "%{$search}%");
            })
            ->orderBy('id', 'desc')
            ->paginate(10)
            ->withQueryString();

        return Inertia::render('Agamas/Index', [
            'agamas' => $agamas,
            'filters' => $request->only(['search']),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Agamas/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_agama' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->input('is_active', true);

        Agama::create($validated);

        return redirect()->route('agamas.index')->with('success', 'Agama berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agama $agama)
    {
        // Not implemented for now, we use Edit instead
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agama $agama)
    {
        return Inertia::render('Agamas/Edit', [
            'agama' => $agama,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agama $agama)
    {
        $validated = $request->validate([
            'nama_agama' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->input('is_active', true);

        $agama->update($validated);

        return redirect()->route('agamas.index')->with('success', 'Agama berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agama $agama)
    {
        $agama->delete();

        return redirect()->route('agamas.index')->with('success', 'Agama berhasil dihapus.');
    }
}
