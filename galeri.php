<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galeri - Remaja Ancol Selatan</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/style.css?v=1.0">

</head>
<body>

  <!-- Navbar -->
  <?php include 'includes/navbar.php'; ?>
  

  <section class="galeri">
    <div class="container">
      <h1>🖼️ Galeri Kegiatan Kami</h1>
      <p>Klik salah satu kategori untuk melihat dokumentasi.</p>

      <!-- Daftar kategori galeri -->
      <div class="gallery-folders">

        <a href="galeri.php?drive=1-e0XSc0y9xFtcL0C0Hyfp967P19MhYkN" 
           class="folder-card <?= (isset($_GET['drive']) && $_GET['drive'] == '1-e0XSc0y9xFtcL0C0Hyfp967P19MhYkN') ? 'active' : '' ?>">
           <p>Ramadhan Berbagi</p>
        </a>

        <a href="galeri.php?drive=1-3UEOnto75lf4iIFXzwYGdksk1GBEy6h" 
           class="folder-card <?= (isset($_GET['drive']) && $_GET['drive'] == '1-3UEOnto75lf4iIFXzwYGdksk1GBEy6h') ? 'active' : '' ?>">
           <p>17 Agustus 2023</p>
        </a>

        <a href="galeri.php?drive=1-6E_r-IYWGBPD07tXLPh88WJ0aOvnvOd" 
           class="folder-card <?= (isset($_GET['drive']) && $_GET['drive'] == '1-6E_r-IYWGBPD07tXLPh88WJ0aOvnvOd') ? 'active' : '' ?>">
           <p>Malam Pentas 2023 </p>
        </a>

        <a href="galeri.php?drive=1-EDOsRWyZ6oP8xVGSCyAHvr_ltOAYoW2" 
           class="folder-card <?= (isset($_GET['drive']) && $_GET['drive'] == '1-EDOsRWyZ6oP8xVGSCyAHvr_ltOAYoW2') ? 'active' : '' ?>">
           <p>Agustusan 2024</p>
        </a>
        
        <a href="galeri.php?drive=1-dZWcss4UcQ9vjmc3y-MX7K37kPSg_oa" 
           class="folder-card <?= (isset($_GET['drive']) && $_GET['drive'] == '1-dZWcss4UcQ9vjmc3y-MX7K37kPSg_oa') ? 'active' : '' ?>">
           <p>Malam Pentas 2024</p>
        </a>

        <a href="galeri.php?drive=1vHh3chat3epo3upoKoo47VOuhPxvWtTc" 
           class="folder-card <?= (isset($_GET['drive']) && $_GET['drive'] == '1vHh3chat3epo3upoKoo47VOuhPxvWtTc') ? 'active' : '' ?>">
           <p>17 Agustus 2025</p>
        </a>

        <a href="galeri.php?drive=1Z9ic0YvAxKo2REb2L6qWa5trKjS-I36Z" 
           class="folder-card <?= (isset($_GET['drive']) && $_GET['drive'] == '1Z9ic0YvAxKo2REb2L6qWa5trKjS-I36Z') ? 'active' : '' ?>">
           <p>Malam Pentas 2025</p>
        </a>
      </div>

      <!-- Embed folder yang dipilih -->
      <?php if (isset($_GET['drive'])): ?>
        <h2 style="text-align:center; margin-top:40px;">Menampilkan</h2>
        <iframe 
          src="https://drive.google.com/embeddedfolderview?id=<?= htmlspecialchars($_GET['drive']) ?>#grid"
          style="width:100%; height:500px; border:0;">
        </iframe>
      <?php endif; ?>
    </div>
  </section>
 <?php include 'includes/footer.php'; ?>

</body>
</html>
