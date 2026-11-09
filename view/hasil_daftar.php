<!-- HASIL PENDAFTARAN -->
<section class="py-20 md:py-28 bg-slate-50">
    <div class="max-w-xl mx-auto px-6">

        <!-- KARTU SUKSES -->
        <div class="bg-white border border-slate-200 rounded-2xl p-8 md:p-10 shadow-xl shadow-slate-200/30 text-center mb-8">
            <div class="w-20 h-20 mx-auto mb-6 rounded-full bg-emerald-100 flex items-center justify-center">
                <span class="iconify text-emerald-600 text-4xl" data-icon="lucide:check-circle-2"></span>
            </div>
            <h2 class="text-2xl font-bold text-slate-900 mb-8">Pendaftaran Berhasil!</h2>

            <!-- DATA YANG DIINPUT -->
            <div class="bg-slate-50 border border-slate-200 rounded-xl p-6 text-left space-y-4">
                <?php
                $idPendaftaran = 'UTBK-' . date('Ymd') . '01';
                $nama     = htmlspecialchars($_POST['nama']);
                $email    = htmlspecialchars($_POST['email']);
                $whatsapp = htmlspecialchars($_POST['whatsapp']);
                $sekolah  = htmlspecialchars($_POST['sekolah']);
                $paket    = htmlspecialchars($_POST['paket']);
                $metode   = htmlspecialchars($_POST['metode']);
                date_default_timezone_set('Asia/Jakarta');

                $harga = [
                    'Early Bird' => 'Rp 4.500.000',
                    'Reguler'    => 'Rp 3.000.000',
                    'Intensif'   => 'Rp 3.500.000'
                ];
                $hargaPaket = isset($harga[$paket]) ? $harga[$paket] : '-';
                ?>

                <div class="flex items-start gap-3">
                    <span class="iconify text-blue-500 mt-0.5 " data-icon="solar:document-linear"></span>
                    <div>
                        <div class="text-xs text-slate-400 font-medium">ID Pesanan</div>
                        <div class="text-sm font-semibold text-slate-800"><?php echo $idPendaftaran; ?></div>
                    </div>
                </div>

                <div class="flex items-start gap-3">
                    <span class="iconify text-blue-500 mt-0.5 " data-icon="lucide:user"></span>
                    <div>
                        <div class="text-xs text-slate-400 font-medium">Nama Lengkap</div>
                        <div class="text-sm font-semibold text-slate-800"><?php echo $nama; ?></div>
                    </div>
                </div>

                <div class="border-t border-slate-100"></div>

                <div class="flex items-start gap-3">
                    <span class="iconify text-blue-500 mt-0.5 " data-icon="lucide:mail"></span>
                    <div>
                        <div class="text-xs text-slate-400 font-medium">Email</div>
                        <div class="text-sm font-semibold text-slate-800"><?php echo $email; ?></div>
                    </div>
                </div>

                <div class="border-t border-slate-100"></div>

                <div class="flex items-start gap-3">
                    <span class="iconify text-blue-500 mt-0.5 " data-icon="lucide:phone"></span>
                    <div>
                        <div class="text-xs text-slate-400 font-medium">No. WhatsApp</div>
                        <div class="text-sm font-semibold text-slate-800"><?php echo $whatsapp; ?></div>
                    </div>
                </div>

                <div class="border-t border-slate-100"></div>

                <div class="flex items-start gap-3">
                    <span class="iconify text-blue-500 mt-0.5 " data-icon="lucide:school"></span>
                    <div>
                        <div class="text-xs text-slate-400 font-medium">Asal Sekolah</div>
                        <div class="text-sm font-semibold text-slate-800"><?php echo $sekolah; ?></div>
                    </div>
                </div>

                <div class="border-t border-slate-100"></div>

                <div class="flex items-start gap-3">
                    <span class="iconify text-blue-500 mt-0.5 " data-icon="lucide:package"></span>
                    <div>
                        <div class="text-xs text-slate-400 font-medium">Paket yang Dipilih</div>
                        <div class="text-sm font-semibold text-slate-800"><?php echo $paket; ?></div>
                    </div>
                </div>

                <div class="border-t border-slate-100"></div>

                <div class="flex items-start gap-3">
                    <span class="iconify text-blue-500 mt-0.5" data-icon="lucide:calendar"></span>
                    <div>
                        <div class="text-xs text-slate-400 font-medium">Tanggal Pendaftaran</div>
                        <div class="text-sm font-semibold text-slate-800"> <?php echo date('d F Y, H:i'); ?> WIB</div>
                    </div>
                </div>
            </div>

            <div class="bg-slate-50 border border-slate-200 rounded-xl p-6 mt-5 text-left space-y-4">
                <div class="flex items-start gap-3">
                    <span class="iconify text-blue-500 mt-0.5" data-icon="ant-design:shopping-outlined"></span>
                    <div>
                        <div class="text-xs text-slate-400 font-medium">Total Bayar</div>
                        <div class="text-sm font-semibold text-slate-800"><?php echo $hargaPaket; ?></div>
                    </div>
                </div>
                <div class="border-t border-slate-100"></div>

<div class="flex items-start gap-3">

<span
class="iconify text-blue-500 mt-0.5 shrink-0"
data-icon="lucide:credit-card">
</span>

<div>

<div class="text-xs text-slate-400 font-medium">
Metode Pembayaran
</div>

<div class="text-sm font-semibold text-slate-800">
<?php echo $metode; ?>
</div>

</div>

</div>
            </div>

            <div class="mt-8 bg-blue-50 border border-blue-200 rounded-xl px-5 py-4 text-sm text-blue-700 text-left flex items-start gap-3">
                <span class="iconify text-blue-500 mt-0.5 shrink-0 text-lg" data-icon="lucide:info"></span>
                <span>Simpan bukti ini sebagai bukti pendaftaran</span>
            </div>

            <a href="index.php" class="inline-flex items-center gap-2 mt-8 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-8 py-3 rounded-xl transition font-semibold text-sm shadow-lg shadow-blue-600/25">
                Kembali ke Beranda
            </a>
        </div>

    </div>
</section>