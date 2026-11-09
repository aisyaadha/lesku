<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LesUTBKKu - <?php echo $judul; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <link rel="stylesheet" href="https://api.iconify.design/mdi.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: { extend: { fontFamily: { sans: ['Inter', 'sans-serif'] } } }
        }
    </script>
    <style>
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 font-sans">

    <!-- NAVBAR -->
    <nav class="fixed top-0 w-full h-auto z-50 bg-white/80 border-b border-slate-200" style="backdrop-filter: blur(12px);">
        <div class="max-w-6xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="index.php" class="flex items-center gap-2">
                <span class="iconify text-blue-600 text-2xl" data-icon="lucide:graduation-cap"></span>
                <span class="font-bold text-xl">LesUTBK<span class="text-blue-600">Ku</span></span>
            </a>
            <!-- menu vers desktop -->
            <div class="hidden md:flex items-center gap-8 text-sm text-slate-500">
                <a href="index.php#paket" class="hover:text-blue-600 transition font-medium">Paket</a>
                <a href="index.php#testimoni" class="hover:text-blue-600 transition font-medium">Testimoni</a>
                <a href="index.php#faq" class="hover:text-blue-600 transition font-medium">FAQ</a>
                <a href="daftar.php" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-lg transition font-semibold">Daftar Sekarang</a>
            </div>
            <button id="mobileMenuBtn" class="md:hidden text-slate-600 hover:text-slate-900">
                <span class="iconify text-2xl" data-icon="lucide:menu"></span>
            </button>
        </div>
        <!-- menu ver mobile -->
        <div id="mobileMenu" class="hidden md:hidden border-t border-slate-200 bg-white px-6 py-4 space-y-3 text-sm">
            <a href="index.php#paket" class="block text-slate-600 hover:text-blue-600 transition font-medium">Paket</a>
            <a href="index.php#testimoni" class="block text-slate-600 hover:text-blue-600 transition font-medium">Testimoni</a>
            <a href="index.php#faq" class="block text-slate-600 hover:text-blue-600 transition font-medium">FAQ</a>
            <a href="daftar.php" class="block bg-blue-600 text-white text-center px-5 py-2.5 rounded-lg font-semibold">Daftar Sekarang</a>
        </div>
    </nav>

    <!-- KONTEN HALAMAN -->
    <main class="pt-12">
        <?php echo $content; ?>
    </main>

    <!-- FOOTER -->
    <footer class="bg-slate-900 text-slate-400 py-10">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-2">
                    <span class="iconify text-blue-400 text-xl" data-icon="lucide:graduation-cap"></span>
                    <span class="font-bold text-white">LesUTBK<span class="text-blue-400">Ku</span></span>
                </div>
                <div class="flex items-center gap-6 text-sm">
                    <a href="index.php#paket" class="hover:text-white transition">Paket</a>
                    <a href="index.php#testimoni" class="hover:text-white transition">Testimoni</a>
                    <a href="index.php#faq" class="hover:text-white transition">FAQ</a>
                    <a href="daftar.php" class="hover:text-white transition">Daftar</a>
                </div>
                <p class="text-sm">© 2025 LesUTBKKu</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });
        document.querySelectorAll('#mobileMenu a').forEach(function(link) {
            link.addEventListener('click', function() {
                document.getElementById('mobileMenu').classList.add('hidden');
            });
        });
    </script>
</body>
</html>