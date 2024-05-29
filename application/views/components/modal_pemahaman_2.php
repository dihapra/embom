 <!-- Modal Tes Pemahaman 2 -->
 <div class="modal fade" id="soalModal2" style="font-size: 12px;" tabindex="-1" aria-labelledby="soalModal2Label" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="soalModal2Label">Tes Pemahaman 2</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <!-- Konten soal evaluasi 2 -->
                 <form id="formSoal2" class="p-1 pe-5">
                     <h2 class="font-header-soal">Kerjakanlah soal evaluasi dibawah ini !</h2>
                     <div class="mb-3">
                         <label for="pertanyaan3" class="form-label font-soal">Nama</label>
                         <input type="text" class="form-control font-soal" name="nama" id="nama" required>
                     </div>
                     <div class="mb-3">
                         <label for="pertanyaan1" class="form-label font-soal">1. Jelaskan alat dan bahan yang diperlukan dalam membuat batik?</label>
                         <input type="text" class="form-control font-soal" name="jawaban1" id="pertanyaan1" required>
                     </div>
                     <div class="mb-3">
                         <label for="pertanyaan2" class="form-label font-soal">2. Tuliskan Teknik dalam pembuatan batik?</label>
                         <input type="text" class="form-control font-soal" name="jawaban2" id="pertanyaan2" required>
                     </div>
                     <div class="mb-3">
                         <label for="pertanyaan3" class="form-label font-soal">3. Jelaskan proses membuat batik?</label>
                         <input type="text" class="form-control font-soal" name="jawaban3" id="pertanyaan3" required>
                     </div>
                     <div class="mb-3">
                         <label for="pertanyaan4" class="form-label font-soal">4. Tuliskan 2 jenis sumber warna dalam membatik?</label>
                         <input type="text" class="form-control font-soal" name="jawaban4" id="pertanyaan4" required>
                     </div>
                     <div class="mb-3">
                         <label for="pertanyaan5" class="form-label font-soal">5. Apa tahapan awal sebelum melakukan proses membatik tulis?</label>
                         <input type="text" class="form-control font-soal" name="jawaban5" id="pertanyaan5" required>
                     </div>
                     <button type="button" class="btn btn-primary" onclick="submitForm()">Kirim Jawaban</button>
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                 </form>

             </div>
         </div>
     </div>
 </div>