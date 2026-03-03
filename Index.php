<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Desain Interior</title>

  <link rel="stylesheet" href="Assets/Css/bootstrap.min.css">
  <link rel="stylesheet" href="Assets/Css/Customstyle.css">

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="Assets/Js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- added -->
</head>

<body>

  <div id="preloader">
    <div class="loading-text">LOADING...</div>
  </div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark Headerbg fixed-top">
      <a class="navbar-brand" href="#">
        <img class="logo" src="Assets/Img/LogoOR.png" alt="Logo">

        <span class="navbar-brand-text">Orientasi Optimal</span>
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#Serviceclass">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects">Project</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <section id="home" class="d-flex align-items-center">

    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6">
          <div class="hero-card p-4 p-md-5">

            <h6 class="hero-small-title">Orientasi Optimal</h6>

            <h1 class="hero-title">
              <span class="hero-line"></span>
              <span class="typed-me" data-string0="<strong>S</strong>USTAINABLE" data-string1="<strong>Q</strong>UALITY"
                data-string2="<strong>U</strong>TILITY" data-string3="<strong>B</strong>UDGET"
                data-string4="<strong>I</strong>NNOVATIVE" data-string5="<strong>C</strong>REATIVE" data-type-speed="40"
                data-start-delay="0" data-back-speed="40" data-back-delay="500" data-loop="1">
                <strong>I</strong>NNOVATIVE
              </span>
              <span class="cursor">|</span>
            </h1>

            <p class="hero-text mt-3">
              Sebagai Perusahaan yang mengerjakan DESIGN & BUILD,
              di bidang INTERIOR & ARSITEK.
            </p>

            <a href="#contact" class="btn hero-btn mt-3">KONSULTASI SEKARANG</a>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="AboutSection">
    <div class="container-fluid px-0">
      <div class="row no-gutters">

        <!-- LEFT SIDE (RED BACKGROUND) -->
        <div class="col-md-6 about-left d-flex align-items-center">
          <div class="about-left-content px-5 py-5">
            <div class="about-content-inner">
              <div class="about-text-block">
                <p class="about-mini">— About Us</p>

                <h2 class="about-title">
                  <span class="brand-sq">Orientasi Optimal</span>
                </h2>

                <p class="about-text">
                  "Menemukan titik keseimbangan sempurna antara estetika dan fungsi. Melalui Orientasi Optimal,
                  kami mengarahkan setiap perencanaan desain dan anggaran secara cermat guna mewujudkan
                  hunian yang berkarakter sekaligus efisien."
                </p>

                <a href="#" class="about-link">Lihat lebih ➝</a>
              </div>
              <div class="about-chart-block">
                <canvas id="brandChart" aria-label="Grafik gaya populer" role="img"></canvas>
                <div id="brandChartLegend" class="chart-legend"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- RIGHT SIDE (6 FEATURES GRID) -->
        <div class="col-md-6 about-right px-5 py-5">
          <div class="row">

            <div class="col-md-6 mb-4">
              <div class="feature-box">
                <div class="feature-icon">
                  <img src="Assets/Img/log1.png" alt="Sustainable" style="width: 60px; height: auto;">
                </div>
                <h4>Sustainable</h4>
                <p>Desain kami berfokus pada keberlanjutan dan material ramah lingkungan.</p>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <div class="feature-box">
                <div class="feature-icon">
                  <img src="Assets/Img/log2.png" alt="Quality" style="width: 60px; height: auto;">
                </div>
                <h4>Quality</h4>
                <p>Kualitas terjaga dari perencanaan hingga pemilihan material terbaik.</p>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <div class="feature-box">
                <div class="feature-icon">
                  <img src="Assets/Img/log3.png" alt="Utility" style="width: 60px; height: auto;">
                </div>
                <h4>Utility</h4>
                <p>Desain yang fungsional, ergonomis, serta menyesuaikan kebutuhan klien.</p>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <div class="feature-box">
                <div class="feature-icon">
                  <img src="Assets/Img/log4.png" alt="Budget" style="width: 60px; height: auto;">
                </div>
                <h4>Budget</h4>
                <p>Kami merancang desain sesuai anggaran tanpa mengurangi kualitas.</p>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <div class="feature-box">
                <div class="feature-icon">
                  <img src="Assets/Img/log5.png" alt="Innovation" style="width: 60px; height: auto;">
                </div>
                <h4>Innovation</h4>
                <p>Desain fresh, up-to-date dan memberikan opsi terbaik bagi pelanggan.</p>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <div class="feature-box">
                <div class="feature-icon">
                  <img src="Assets/Img/log6.png" alt="Creative" style="width: 60px; height: auto;">
                </div>
                <h4>Creative</h4>
                <p>Kreativitas modern dan estetika elegan untuk kenyamanan ruang.</p>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>

    </div>
    </div>
  </section>

  <!-- SERVIS SECTION        -->
  <?php include 'servis.php'; ?>


  <section id="projects" class="py-5">
    <div class="container">

      <!-- TITLE -->
      <div class="text-center mb-5">
        <h2 class="project-title">Our Latest Projects</h2>
        <div class="title-underline"></div>
      </div>

      <!-- PROJECT CARDS -->
      <div class="row g-4">

        <!-- CARD 1 -->
        <div class="col-md-4">
          <div class="project-card">
            <img src="Assets/Img/meet 04.png" class="project-img" alt="">
            <h4 class="project-name mt-3">Meeting Room</h4>
            <p class="project-location">Clinic Orlins Beauty & Care</p>
            <p class="project-desc">
              ESAC completed a major overhaul of an outdated system, ensuring reliable operation
              to keep this hospital powered and patients cared for.
            </p>
            <a href="#" class="learn-btn">Learn more »</a>
          </div>
        </div>

        <!-- CARD 2 -->
        <div class="col-md-4">
          <div class="project-card">
            <img src="Assets/Img/slide2.jpg" class="project-img" alt="">
            <h4 class="project-name mt-3">Kitchen Set</h4>
            <p class="project-location">Griya Adi Residence</p>
            <p class="project-desc">
              ESAC designed/developed a design solution minimizing plant downtime and
              ensuring system reliability during service.
            </p>
            <a href="#" class="learn-btn">Learn more »</a>
          </div>
        </div>

        <!-- CARD 3 -->
        <div class="col-md-4">
          <div class="project-card">
            <img src="Assets/Img/BNI 5.jpg" class="project-img" alt="">
            <h4 class="project-name mt-3">Service Area</h4>
            <p class="project-location">BNI 45 Corner</p>
            <p class="project-desc">
              ESAC supplied an expertly designed integrated protection and control system
              with real-time data and performance reporting.
            </p>
            <a href="#" class="learn-btn">Learn more »</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="contact" class="py-5 ContactSection">
    <div class="container">

      <div class="text-center mb-4">
        <h2 class="ContactTitle">Contact Us</h2>
        <p class="ContactSubtitle">
          Setiap sudut ruangan punya cerita. Ceritakan bagaimana Anda ingin menghidupkan suasana rumah atau kantor Anda
          kepada kami.
        </p>
      </div>

      <div class="row">

        <!-- LEFT : Kontak Info -->
        <div class="col-md-5">
          <div class="ContactInfo">
            <h4>Informasi Kontak</h4>
            <p><strong>Email:</strong> project@orientasioptimal.com</p>
            <p><strong>Telepon:</strong> +62 000-000-000</p>
            <p><strong>Alamat:</strong> Surakarta, Indonesia</p>

            <div class="SocialIcons mt-3">
              <a href="#"><img src="Assets/Img/contact2.png" class="icon"></a>
              <a href="#"><img src="Assets/Img/contact.png" class="icon"></a>
            </div>
          </div>
        </div>

        <!-- RIGHT : Form -->
        <div class="col-md-7">
          <form action="proses_kontak.php" method="POST">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control" placeholder="Masukkan nama Anda" required>
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" placeholder="Masukkan email Anda" required>
            </div>

            <div class="form-group">
              <label>Pesan</label>
              <textarea name="pesan" class="form-control" rows="4" placeholder="Pesan Anda..." required></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block mt-3">Kirim Pesan</button>
          </form>
        </div>
      </div>


      <div id="map-wrapper" class="map-wrapper mt-4">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.9162754327413!2d110.765787377413!3d-7.584092272912682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1542de8719df%3A0x712926910d5c2af6!2sOrientasi%20Optimal%20Studio%20Arsitektur!5e0!3m2!1sid!2sid!4v1772510167754!5m2!1sid!2sid"
          loading="lazy" referrerpolicy="no-referrer-when-downgrade" aria-label="Lokasi Kantor">
        </iframe>
      </div>


    </div>
  </section>

  <section id="footer">
    <footer class="FooterSection py-4">
      <div class="container-fluid text-center">

        <h4 class="FooterLogo">ORIENTASI OPTIMAL</h4>
        <p class="FooterTagline">
          "Desain Interior yang Merefleksikan Karakter Anda."
        </p>

        <div class="FooterSocial mb-3">
          <a href="https://maps.app.goo.gl/SJNo7x3Zd2qSL9mo9" target="_blank" rel="noopener noreferrer">
            <img src="Assets/Img/images-removebg-preview.png" class="footer-icon" alt="Lokasi Maps">
          </a>
          <a href="https://api.whatsapp.com/send?phone=62000000000&text=Halo%20Orientasi%20Optimal,%20saya%20tertarik%20untuk%20konsultasi%20desain%20interior."
            target="_blank" rel="noopener noreferrer">
            <img src="Assets/Img/Wa-removebg-preview.png" class="footer-icon" alt="WhatsApp Orientasi Optimal">
          </a>
          <a href="https://www.instagram.com/______o2studio/" target="_blank" rel="noopener noreferrer">
            <img src="Assets/Img/logoinsta.png" class="footer-icon" alt="Instagram Orientasi Optimal">
          </a>
        </div>

        <p class="FooterCopy">
          © 2025 ORIENTASI OPTIMAL. All Rights Reserved.
        </p>

      </div>
    </footer>
  </section>

  <!-- JAVA SCRIPT -->
  <script>
    (function () {
      /* --------------------------------------------------------------------------------
         NAV / SCROLL / VISIBILITY JS
         - smooth scroll (compensate fixed header)
         - menentukan menu "active" berdasarkan section yang paling terlihat (visible ratio)
         - toggle class "in-view" pada section agar animation-play-state bisa dikontrol via CSS
         - proximity effect (class prox saat kursor mendekat)
         - reset state saat navigasi/keluar halaman
      ---------------------------------------------------------------------------------*/

      const navLinks = Array.from(document.querySelectorAll('.navbar-nav a.nav-link'));
      const linkByHash = Object.fromEntries(navLinks.map(a => [a.getAttribute('href'), a]));
      const sections = Object.keys(linkByHash).map(h => document.querySelector(h)).filter(Boolean);

      const headerEl = document.querySelector('.Headerbg');
      const getHeaderHeight = () => headerEl ? headerEl.offsetHeight : 0;

      // remove active on all links
      function clearActive() {
        navLinks.forEach(l => {
          l.classList.remove('active', 'prox');
          if (l.parentElement) l.parentElement.classList.remove('active');
        });
      }

      // set a single active link (idempotent)
      let currentActive = null;
      function setActiveLink(link) {
        if (currentActive === link) return;
        currentActive = link;
        clearActive();
        if (!link) return;
        link.classList.add('active');
        if (link.parentElement) link.parentElement.classList.add('active');
      }

      // SMOOTH SCROLL (compensate fixed header)
      navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
          const href = this.getAttribute('href');
          if (!href || !href.startsWith('#')) return;
          const target = document.querySelector(href);
          if (!target) return;
          e.preventDefault();
          const top = target.getBoundingClientRect().top + window.pageYOffset - getHeaderHeight() - 8;
          window.scrollTo({ top: Math.max(0, top), behavior: 'smooth' });
          history.replaceState(null, '', href);
          // do not force active here; active will be set by viewport logic
        });
      });

      // compute visible ratio for each section and return most visible
      function getMostVisibleSection() {
        let best = null;
        let bestRatio = 0;
        const viewportTop = getHeaderHeight();
        const viewportBottom = window.innerHeight;
        sections.forEach(s => {
          const rect = s.getBoundingClientRect();
          // visible area within viewport (account header at top)
          const visibleTop = Math.max(rect.top, viewportTop);
          const visibleBottom = Math.min(rect.bottom, viewportBottom);
          const visibleHeight = Math.max(0, visibleBottom - visibleTop);
          const totalHeight = rect.height || s.offsetHeight || 1;
          const ratio = visibleHeight / totalHeight;
          if (ratio > bestRatio) {
            bestRatio = ratio;
            best = s;
          }
          // toggle .in-view when at least 10% visible (used to run/pause section animations)
          if (visibleHeight / totalHeight > 0.10) s.classList.add('in-view');
          else s.classList.remove('in-view');
        });
        return { section: best, ratio: bestRatio };
      }

      // throttled via rAF
      let ticking = false;
      function onScrollOrResize() {
        if (ticking) return;
        ticking = true;
        window.requestAnimationFrame(() => {
          const { section, ratio } = getMostVisibleSection();
          if (section && ratio > 0) {
            const link = linkByHash['#' + section.id];
            setActiveLink(link || null);
          } else {
            // fallback: last section above header
            let last = null;
            const offset = getHeaderHeight() + 12;
            sections.forEach(s => {
              const r = s.getBoundingClientRect();
              if (r.top <= offset) last = s;
            });
            setActiveLink(last ? linkByHash['#' + last.id] : linkByHash['#home'] || null);
          }
          ticking = false;
        });
      }

      window.addEventListener('scroll', onScrollOrResize, { passive: true });
      window.addEventListener('resize', onScrollOrResize);
      window.addEventListener('load', onScrollOrResize);

      // proximity effect: add .prox when cursor is near a nav item
      (function proximity() {
        const links = navLinks;
        if (!links.length) return;
        const threshold = 90; // px
        let rafId = null;
        function onMove(e) {
          if (e.pointerType === 'touch') return;
          const x = e.clientX, y = e.clientY;
          if (rafId) cancelAnimationFrame(rafId);
          rafId = requestAnimationFrame(() => {
            links.forEach(link => {
              const r = link.getBoundingClientRect();
              const cx = r.left + r.width / 2;
              const cy = r.top + r.height / 2;
              const dist = Math.hypot(cx - x, cy - y);
              if (dist <= threshold) link.classList.add('prox');
              else link.classList.remove('prox');
            });
          });
        }
        document.addEventListener('pointermove', onMove, { passive: true });
        const header = document.querySelector('.Headerbg');
        if (header) header.addEventListener('pointerleave', () => links.forEach(l => l.classList.remove('prox')));
        window.addEventListener('resize', () => links.forEach(l => l.classList.remove('prox')));
      })();

      // reset states on navigation / unload to avoid "stuck" active states
      function clearAllStates() {
        clearActive();
        document.querySelectorAll('section.in-view').forEach(s => s.classList.remove('in-view'));
      }
      window.addEventListener('hashchange', clearAllStates);
      window.addEventListener('popstate', clearAllStates);
      window.addEventListener('pagehide', clearAllStates);
      window.addEventListener('beforeunload', clearAllStates);
      document.addEventListener('visibilitychange', () => { if (document.visibilityState === 'hidden') clearAllStates(); });

      // initial trigger after layout stabilizes
      setTimeout(onScrollOrResize, 120);
    })();

    // Hapus (function initBrandChart() { ... })(); yang lama, 
    // lalu GANTI dengan kode di bawah ini:

    (function initBrandChartRealtime() {
      const el = document.getElementById('brandChart');
      if (!el || typeof Chart === 'undefined') return;

      const ctx = el.getContext('2d');
      let brandChart = null; // Variabel penampung grafik

      // Mengambil warna border dari CSS variables Anda
      const css = getComputedStyle(document.documentElement);
      const border = css.getPropertyValue('--chart-border').trim() || '#5a2a21';

      // 1. Fungsi untuk mengambil data dari PHP dan merender grafik
      function fetchChartData() {
        fetch('get_chart_data.php') // Memanggil API PHP yang dibuat sebelumnya
          .then(response => response.json())
          .then(dataFromDb => {

            // Jika grafik sudah jadi, kita tinggal update angkanya saja agar animasinya halus
            if (brandChart) {
              brandChart.data.labels = dataFromDb.labels;
              brandChart.data.datasets[0].data = dataFromDb.data;
              brandChart.data.datasets[0].backgroundColor = dataFromDb.colors;
              brandChart.update();
              updateLegend(dataFromDb);
            }
            // Jika grafik belum ada (saat halaman baru di-refresh), buat dari awal
            else {
              const data = {
                labels: dataFromDb.labels,
                datasets: [{
                  data: dataFromDb.data,
                  backgroundColor: dataFromDb.colors,
                  borderColor: Array(dataFromDb.colors.length).fill(border),
                  borderWidth: 2
                }]
              };

              const options = {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false }, tooltip: { mode: 'index' } },
                cutout: '60%'
              };

              brandChart = new Chart(ctx, { type: 'doughnut', data, options });
              updateLegend(dataFromDb);
            }
          })
          .catch(error => console.error('Error fetching chart data:', error));
      }

      // 2. Fungsi untuk membuat Legend (keterangan warna di bawah grafik)
      function updateLegend(dataFromDb) {
        const legendEl = document.getElementById('brandChartLegend');
        if (legendEl) {
          legendEl.innerHTML = dataFromDb.labels.map((l, i) =>
            `<span style="display:inline-block;margin:6px 8px;font-size:13px;color:#fff;">
             <i style="background:${dataFromDb.colors[i]}; display:inline-block; width:12px; height:12px; margin-right:5px; border-radius:2px;"></i>${l}
           </span>`
          ).join('');
        }
      }

      // 3. Panggil pertama kali saat halaman dimuat
      fetchChartData();

      // 4. Panggil berulang-ulang setiap 3 detik (3000 ms) untuk update realtime
      setInterval(fetchChartData, 3000);

    })();
  </script>



  <script>// RUBAH INNOVATIVE
    (function initTyped() {
      const el = document.querySelector('.typed-me');
      if (!el || typeof el.dataset === 'undefined') return;

      // ambil semua data-stringN secara urut
      const ds = el.dataset;
      const keys = Object.keys(ds).filter(k => k.startsWith('string')).sort((a, b) => {
        const nA = parseInt(a.replace(/^[^\d]*/g, '')) || 0;
        const nB = parseInt(b.replace(/^[^\d]*/g, '')) || 0;
        return nA - nB;
      });
      const strings = keys.map(k => ds[k]);

      if (!strings.length) return;

      // opsi (dataset: data-type-speed, data-back-speed, data-back-delay, data-start-delay, data-loop)
      const typeSpeed = parseInt(ds.typeSpeed) || 40;
      const backSpeed = parseInt(ds.backSpeed) || 40;
      const backDelay = parseInt(ds.backDelay) || 500;
      const startDelay = parseInt(ds.startDelay) || 0;
      const loop = (ds.loop === '1' || ds.loop === 'true');

      // tokenize string jadi "atoms" (tags utuh + chars terpisah)
      function tokenize(str) {
        const parts = str.split(/(<[^>]+>)/g);
        const atoms = [];
        parts.forEach(p => {
          if (!p) return;
          if (p.startsWith('<') && p.endsWith('>')) atoms.push(p); // tag utuh
          else p.split('').forEach(ch => atoms.push(ch)); // tiap karakter
        });
        return atoms;
      }

      const tokenLists = strings.map(s => tokenize(s));

      // util delay
      const wait = ms => new Promise(r => setTimeout(r, ms));

      // state build HTML via array atoms (mempermudah backspace)
      let displayed = [];

      async function typeTokens(tokens) {
        for (const atom of tokens) {
          displayed.push(atom);
          el.innerHTML = displayed.join('');
          // jika atom adalah tag, tampilkan langsung tanpa delay
          if (atom.startsWith('<')) continue;
          await wait(typeSpeed);
        }
      }

      async function backspaceTokens(tokens) {
        // hapus satu-per-satu dari akhir tokens
        for (let i = tokens.length - 1; i >= 0; i--) {
          // jika token adalah tag, pop juga sebagai satu unit
          displayed.pop();
          el.innerHTML = displayed.join('');
          await wait(backSpeed);
        }
      }

      // main loop
      (async function runLoop() {
        await wait(startDelay);
        let idx = 0;
        do {
          const tokens = tokenLists[idx];
          await typeTokens(tokens);
          await wait(backDelay);
          // jika loop = false dan terakhir, jangan backspace (biarkan tampil)
          const isLast = idx === tokenLists.length - 1;
          if (loop || !isLast) {
            await backspaceTokens(tokens);
          }
          idx = (idx + 1) % tokenLists.length;
        } while (loop && tokenLists.length > 1);
      })();

    })(); // <--- INI ADALAH PENUTUP FUNGSI initTyped()


    // Pindahkan Script Preloader ke sini (Di luar fungsi initTyped)
    window.addEventListener('load', function () {
      const preloader = document.getElementById('preloader');
      if (preloader) {

        // Menahan preloader selama 1.5 detik (1500ms) agar efek ngetik terlihat
        setTimeout(() => {
          preloader.style.opacity = '0';

          // Menghapus elemen setelah transisi memudar selesai
          setTimeout(() => {
            preloader.style.display = 'none';
          }, 600);

        }, 1500);
      }
    });

  </script>
</body>

</html>