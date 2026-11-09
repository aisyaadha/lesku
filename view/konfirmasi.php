<section class="py-20 md:py-28 bg-slate-50">
    <div class="max-w-xl mx-auto px-6">
        <div class="bg-white rounded-2xl p-8 border border-slate-200">
            <h2 class="text-2xl font-bold mb-6 text-center">Konfirmasi Pendaftaran</h2>
            <?php
            $harga = [
                'Early Bird' => 'Rp 4.500.000',
                'Reguler' => 'Rp 3.000.000',
                'Intensif' => 'Rp 3.500.000'
            ];
            $hargaPaket = $harga[$paket] ?? '-';
            ?>

            <div class="space-y-3 mb-8 bg-slate-50 border border-slate-200 rounded-xl p-6">
                <p><strong>Nama:</strong> <?php echo htmlspecialchars($nama); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                <p><strong>Paket:</strong> <?php echo htmlspecialchars($paket); ?></p>
                <p><strong>Total Bayar:</strong> <?php echo $hargaPaket; ?></p>
            </div>
            <form method="POST" action="proses_daftar.php">
                <input type="hidden" name="nama" value="<?php echo htmlspecialchars($nama); ?>">
                <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
                <input type="hidden" name="whatsapp" value="<?php echo htmlspecialchars($whatsapp); ?>">
                <input type="hidden" name="sekolah" value="<?php echo htmlspecialchars($sekolah); ?>">
                <input type="hidden" name="paket" value="<?php echo htmlspecialchars($paket); ?>">
            
                <div class="mb-6">
                    <label class="block text-sm font-semibold mb-3">Metode Pembayaran</label>
                    <select name="metode" required class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-800">
                        <option value="">Pilih Metode</option>
                        <option value="Transfer Bank">Transfer Bank</option>
                        <option value="E-Wallet">E-Wallet</option>
                        <option value="Bayar di Kasir">Bayar di Kasir</option>
                    </select>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-xl">Konfirmasi Pendaftaran</button>
            </form>
        </div>
    </div>
</section>