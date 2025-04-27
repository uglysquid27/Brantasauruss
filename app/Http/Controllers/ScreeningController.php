<?php

namespace App\Http\Controllers;

use App\Models\Screening;
use App\Models\ScreeningSymptom;
use Illuminate\Http\Request;

class ScreeningController extends Controller
{
    public function index()
    {
        return view('screening');
    }

    public function store(Request $request)
    {
        // 1. Validate
        $validated = $request->validate([
            'namaLengkap' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'nik' => 'required|string|max:20',
            'work' => 'required|string|max:255',
            'born' => 'required|date',
            'gender' => 'required|in:male,female',
            // Screening symptoms
            'batuk' => 'required|string',
            'bb' => 'required|string',
            'demam' => 'required|string',
            'lemas' => 'required|string',
            'keringat' => 'required|string',
            'sesak' => 'required|string',
            'getah' => 'required|string',
            'jangkit' => 'required|string',
            'lainnya' => 'nullable|string',
        ]);

        // 2. Create Screening (personal info)
        $screening = Screening::create([
            'namaLengkap' => $validated['namaLengkap'],
            'alamat' => $validated['alamat'],
            'phone' => $validated['phone'],
            'nik' => $validated['nik'],
            'work' => $validated['work'],
            'born' => $validated['born'],
            'gender' => $validated['gender'],
        ]);

        // 3. Create Screening Symptoms
        $screening->screeningSymptoms()->create([
            'batuk' => $validated['batuk'] === 'ya',
            'bb' => $validated['bb'] === 'ya',
            'demam' => $validated['demam'] === 'ya',
            'lemas' => $validated['lemas'] === 'ya',
            'keringat' => $validated['keringat'] === 'ya',
            'sesak' => $validated['sesak'] === 'ya',
            'getah' => $validated['getah'] === 'ya',
            'jangkit' => $validated['jangkit'] === 'ya',
            'lainnya' => $validated['lainnya'] ?? null,
        ]);

        // 4. Redirect or Response
        return redirect()->back()->with('success', 'Screening berhasil disimpan.');
    }
    
}