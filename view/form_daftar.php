<!-- FORM PENDAFTARAN -->
<section class="py-20 md:py-28 bg-slate-50">
    <div class="max-w-xl mx-auto px-6">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-5xl font-bold tracking-tight mb-4 text-slate-900">Daftar Sekarang</h2>
            <p class="text-slate-500">Isi data di bawah ini untuk mendaftar program Les UTBK</p>
        </div>

        <?php if (isset($error)): ?>
        <div class="mb-6 bg-red-50 border border-red-200 text-red-600 rounded-xl px-5 py-4 text-sm font-medium flex items-center gap-3">
            <span class="iconify text-xl shrink-0" data-icon="lucide:alert-circle"></span>
            <span><?php echo $error; ?></span>
        </div>
        <?php endif; ?>

        <form method="POST" action="konfirmasi.php" class="bg-white border border-slate-200 rounded-2xl p-6 md:p-8 shadow-xl shadow-slate-200/30 space-y-5">

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Lengkap</label>
                <input type="text" name="nama" required placeholder="Masukkan nama lengkap"
                    value="<?php echo isset($old_nama) ? htmlspecialchars($old_nama) : ''; ?>"
                    class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none ">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Email</label>
                <input type="email" name="email" required placeholder="contoh@email.com"
                    value="<?php echo isset($old_email) ? htmlspecialchars($old_email) : ''; ?>"
                    class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none ">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">No. WhatsApp</label>
                <input type="tel" name="whatsapp" required placeholder="08xxxxxxxxxx"
                    value="<?php echo isset($old_whatsapp) ? htmlspecialchars($old_whatsapp) : ''; ?>"
                    class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none ">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Asal Sekolah</label>
                <input type="text" name="sekolah" required placeholder="Nama SMA/SMK kamu"
                    value="<?php echo isset($old_sekolah) ? htmlspecialchars($old_sekolah) : ''; ?>"
                    class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none ">
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Pilih Paket</label>
                <select name="paket" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800 focus:outline-none ">
                    <option value="">Pilih Paket</option>
                    <option value="Early Bird" <?php echo (isset($old_paket) && $old_paket === 'Early Bird') ? 'selected' : ''; ?>>Paket Early Bird — Rp 4.500.000</option>
                    <option value="Reguler" <?php echo (isset($old_paket) && $old_paket === 'Reguler') ? 'selected' : ''; ?>>Paket Reguler — Rp 3.000.000</option>
                    <option value="Intensif" <?php echo (isset($old_paket) && $old_paket === 'Intensif') ? 'selected' : ''; ?>>Paket Intensif — Rp 3.500.000</option>
                </select>
            </div>

            <button type="submit" name="submit" class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white py-3.5 rounded-xl transition font-semibold text-sm flex items-center justify-center gap-2 shadow-lg shadow-blue-600/25">Kirim Pendaftaran</button>
        </form>
    </div>
</section>