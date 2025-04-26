@extends('layouts.app')

@section('title', 'Question')

@section('content')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Form logic
        const screeningForm = document.getElementById("screeningForm");
        const personalInfoSection = document.getElementById("personalInfoSection");
        const screeningFormSection = document.getElementById("screeningFormSection");
        const nextButton = document.getElementById("nextButton");
        const prevButton = document.getElementById("prevButton");

        // Handle next button
        nextButton.addEventListener("click", function() {
            personalInfoSection.style.display = "none";
            screeningFormSection.style.display = "block";
        });

        // Handle prev button
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


<section class="bg-white min-h-screen flex items-center justify-center p-8" style="font-family: 'Poppins', sans-serif;">
    <div class="w-full max-w-4xl bg-[#f7c1d9] p-10 rounded-lg shadow-lg border-4 border-black">
        <form action="/screening" method="POST" enctype="multipart/form-data" id="screeningForm" class="space-y-6">
            {{ csrf_field() }}
            
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

            <div class="row d-flex justify-content-center align-items-center">
                <div class="section" id="screeningFormSection">
                    <div class="card">
                        <div class="card-body">
                            <h6>Screening Form</h6>
                            <div class="card-body">
                                <p class="text-uppercase text-sm text-center">Gejala Utama</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group text-center">
                                            <label for="example-text-input" class="form-control-label">Batuk (Semua batuk tanpa melihat durasi)</label>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <input type="radio" name="batuk" value="ya"> Ya
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-5">
                                                        <input type="radio" name="batuk" value="Tidak"> Tidak
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <p class="text-uppercase text-sm text-center">Gejala Tambahan</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group text-center">
                                            <label for="example-text-input" class="form-control-label">BB Turun tanpa penyebab jelas/BB tidak naik/nafsu makan turun</label>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <input type="radio" name="bb" value="ya"> Ya
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-5">
                                                        <input type="radio" name="bb" value="Tidak"> Tidak
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-md-12">
                                        <div class="form-group text-center">
                                            <label for="example-text-input" class="form-control-label">Demam yang tidak diketahui penyebabnya</label>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <input type="radio" name="demam" value="ya"> Ya
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-5">
                                                        <input type="radio" name="demam" value="Tidak"> Tidak
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-md-12">
                                        <div class="form-group text-center">
                                            <label for="example-text-input" class="form-control-label">Badan lemas/lesu</label>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <input type="radio" name="lemas" value="ya"> Ya
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-5">
                                                        <input type="radio" name="lemas" value="Tidak"> Tidak
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-md-12">
                                        <div class="form-group text-center">
                                            <label for="example-text-input" class="form-control-label">Berkeringat malam hari tanpa kegiatan</label>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <input type="radio" name="keringat" value="ya"> Ya
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-5">
                                                        <input type="radio" name="keringat" value="Tidak"> Tidak
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-md-12">
                                        <div class="form-group text-center">
                                            <label for="example-text-input" class="form-control-label">Sesak napas tanpa nyeri dada</label>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <input type="radio" name="sesak" value="ya"> Ya
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-5">
                                                        <input type="radio" name="sesak" value="Tidak"> Tidak
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-md-12">
                                        <div class="form-group text-center">
                                            <label for="example-text-input" class="form-control-label">Ada pembesaran getah bening di leher atau ketiak</label>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <input type="radio" name="getah" value="ya"> Ya
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-5">
                                                        <input type="radio" name="getah" value="Tidak"> Tidak
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-md-12">
                                        <div class="form-group text-center">
                                            <label for="example-text-input" class="form-control-label">Apakah pernah berkontakan dengan seseorang yang terjangkit?</label>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <input type="radio" name="jangkit" value="ya"> Ya
                                                    </div>
                                                    <div class="col-md-2"></div>
                                                    <div class="col-md-5">
                                                        <input type="radio" name="jangkit" value="Tidak"> Tidak
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="col-md-12">
                                        <div class="form-group text-center">
                                            <label for="example-text-input" class="form-control-label">Lainnya</label>
                                            <div class="col-md-12 d-flex justify-content-center">
                                                <input class="form-control mx-auto" type="text" name="lainnya">
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <!-- Buttons -->
                                <div class="col-md-12 d-flex justify-content-center mt-4">
                                    <button type="button" class="btn btn-info mx-2 rounded-lg" id="prevButton">Previous</button>
                                    <button type="button" class="btn btn-primary mx-2 rounded-lg" id="nextButton">Next</button>
                                </div>
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="tbIndicationModal" tabindex="-1" aria-labelledby="tbIndicationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-2 border-black">
            <div class="modal-header bg-[#f7c1d9]">
                <h5 class="modal-title text-black">Indikasi Tuberculosis</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body text-black">
                Berdasarkan jawaban Anda, terdapat indikasi Tuberculosis. Segera konsultasikan ke tenaga medis untuk pemeriksaan lebih lanjut.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-black text-white" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endsection
