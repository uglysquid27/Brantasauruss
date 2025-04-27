@extends('layouts.app')

@section('title', 'Question')

@section('content')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const screeningForm = document.getElementById("screeningForm");
        const personalInfoSection = document.getElementById("personalInfoSection");
        const screeningFormSection = document.getElementById("screeningFormSection");
        const nextButton = document.getElementById("nextButton");
        const prevButton = document.getElementById("prevButton");

        // Next button: Show Screening Form
        nextButton.addEventListener("click", function() {
            personalInfoSection.style.display = "none";
            screeningFormSection.style.display = "block";
        });

        // Prev button: Go back to Personal Information
        if (prevButton) {
            prevButton.addEventListener("click", function() {
                screeningFormSection.style.display = "none";
                personalInfoSection.style.display = "block";
            });
        }

        // Handle form submission
        screeningForm.addEventListener("submit", function(event) {
            event.preventDefault();

            const batukValue = document.querySelector('input[name="batuk"]:checked')?.value;
            const bbValue = document.querySelector('input[name="bb"]:checked')?.value;
            const demamValue = document.querySelector('input[name="demam"]:checked')?.value;

            if (batukValue === "ya" && bbValue === "ya" && demamValue === "ya") {
                $('#tbIndicationModal').modal('show');
            } else {
                screeningForm.submit();
            }
        });
    });
</script>

<!-- Modal if needed -->
<div class="modal fade" id="tbIndicationModal" tabindex="-1" aria-labelledby="tbIndicationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-white p-5 rounded-lg">
      <div class="modal-header">
        <h5 class="modal-title" id="tbIndicationModalLabel">Warning</h5>
      </div>
      <div class="modal-body">
        You show multiple TB symptoms. Please consult a doctor immediately.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<section class="bg-white min-h-screen flex items-center justify-center p-8 pt-30" style="font-family: 'Poppins', sans-serif;">
    <div class="w-full max-w-4xl bg-[#f7c1d9] p-10 rounded-lg shadow-lg border-4 border-black">
        <form action="/screening" method="POST" enctype="multipart/form-data" id="screeningForm" class="space-y-6">
            {{ csrf_field() }}

            <!-- Personal Information Section -->
            <div id="personalInfoSection">
                <h2 class="text-3xl font-bold text-center text-black mb-6">Personal Information</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block mb-1 text-black">Nama</label>
                        <input type="text" name="namaLengkap" class="w-full p-3 border-2 border-black rounded" required>
                    </div>
                    <div>
                        <label class="block mb-1 text-black">NIK</label>
                        <input type="text" name="nik" class="w-full p-3 border-2 border-black rounded" required>
                    </div>
                    <div>
                        <label class="block mb-1 text-black">No Telepon</label>
                        <input type="text" name="phone" class="w-full p-3 border-2 border-black rounded" required>
                    </div>
                    <div>
                        <label class="block mb-1 text-black">Alamat</label>
                        <input type="text" name="alamat" class="w-full p-3 border-2 border-black rounded" required>
                    </div>
                    <div>
                        <label class="block mb-1 text-black">Pekerjaan (Perusahaan)</label>
                        <input type="text" name="work" class="w-full p-3 border-2 border-black rounded" required>
                    </div>
                    <div>
                        <label class="block mb-1 text-black">Tanggal Lahir</label>
                        <input type="date" name="born" class="w-full p-3 border-2 border-black rounded" required>
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block mb-2 text-black">Gender</label>
                    <div class="flex space-x-6">
                        <label class="flex items-center">
                            <input type="radio" name="gender" value="male" required class="mr-2"> Laki-laki
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="gender" value="female" required class="mr-2"> Perempuan
                        </label>
                    </div>
                </div>

                <div class="flex justify-center mt-8">
                    <button type="button" id="nextButton" class="bg-[#a0f0c5] text-black font-bold py-3 px-8 border-2 border-black relative group">
                        Next
                        <div class="absolute top-1 left-1 bg-black w-full h-full z-0 transition-all duration-300 group-hover:top-0 group-hover:left-0 rounded"></div>
                    </button>
                </div>
            </div>

            <!-- Screening Form Section -->
            <div id="screeningFormSection" style="display: none;">
                <h2 class="text-3xl font-bold text-center text-black mb-6 pt-10">Screening Form</h2>

                <div class="space-y-6">
                    @php
                        $questions = [
                            'batuk' => 'Batuk (Semua batuk tanpa melihat durasi)',
                            'bb' => 'BB Turun tanpa penyebab jelas/BB tidak naik/nafsu makan turun',
                            'demam' => 'Demam yang tidak diketahui penyebabnya',
                            'lemas' => 'Badan lemas/lesu',
                            'keringat' => 'Berkeringat malam hari tanpa kegiatan',
                            'sesak' => 'Sesak napas tanpa nyeri dada',
                            'getah' => 'Ada pembesaran getah bening di leher atau ketiak',
                            'jangkit' => 'Apakah pernah berkontakan dengan seseorang yang terjangkit?',
                        ];
                    @endphp

                    @foreach ($questions as $name => $label)
                        <div class="text-center">
                            <label class="block text-black mb-2">{{ $label }}</label>
                            <div class="flex justify-center space-x-6">
                                <label class="flex items-center">
                                    <input type="radio" name="{{ $name }}" value="ya" required class="mr-2"> Ya
                                </label>
                                <label class="flex items-center">
                                    <input type="radio" name="{{ $name }}" value="tidak" required class="mr-2"> Tidak
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="flex justify-between mt-8">
                    <button type="button" id="prevButton" class="bg-gray-300 text-black font-bold py-3 px-8 border-2 border-black rounded-lg hover:bg-gray-400">
                        Previous
                    </button>

                    <button type="submit" class="bg-green-400 text-black font-bold py-3 px-8 border-2 border-black rounded-lg hover:bg-green-500">
                        Submit
                    </button>
                </div>
            </div>

        </form>
    </div>
</section>

@endsection
