<?php
// SupperPlateBay - Food & Fine Dinner Sensory Editorial Landing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SupperPlateBay — Fine Dining Plating, Artisanal Ceramics & Gastronomy</title>
  <meta name="description" content="SupperPlateBay presents the definitive report on Michelin-level culinary plating, artisanal stoneware dinnerware, farm-to-table tasting menus, and sommelier wine pairings.">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Italiana&family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Navigation Header (Sensory Style) -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="brand-logo">Supper<span>PlateBay</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="blog.html">Coat Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="privacy-policy.html">Privacy</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Sensory Editorial Hero Header -->
  <section class="section hero-section" id="hero">
    <div class="container">
      <div class="hero-grid">
        <div>
          <span class="chapter-badge">✦ CHAPTER 01: FINE DINNER REPORT</span>
          <h1 class="hero-title">
            <span class="gradient-text-terracotta">Culinary Plating</span><br>
            MICHELIN CERAMICS REPORT
          </h1>
          <p class="hero-desc">
            An empirical investigation into 10,000+ tasting menus, artisanal stoneware glazes, sauce emulsion physics, and sommelier vintage pairings.
          </p>
          <div class="hero-btns">
            <a href="blog.html" class="btn btn-terracotta">Explore Gastronomy Essays</a>
            <a href="about.html" class="btn btn-outline-terracotta">Soho Culinary Lab</a>
          </div>
        </div>

        <!-- Sensory Preview Card -->
        <div class="plate-card" style="border-color: var(--accent-terracotta); background: #FFFFFF;">
          <div style="position: absolute; top: -15px; right: -15px; background: var(--accent-terracotta); color: #FFFDF9; padding: 0.4rem 1rem; border-radius: 20px; font-size: 0.75rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px;">
            ✦ Artisanal Tuscan Stoneware
          </div>
          <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?auto=format&fit=crop&w=1190&q=80" alt="SupperPlateBay Fine Plating" style="border-radius: 16px; margin-bottom: 1.5rem; border: 1px solid var(--border-subtle);">
          <h3 style="font-size: 1.4rem; color: var(--text-primary); margin-bottom: 0.5rem;">Pan-Seared Hokkaido Scallop & Truffle Reduction</h3>
          <p style="color: var(--text-secondary); font-size: 0.9rem; margin-bottom: 1rem;">
            Plated on matte terracotta stoneware with wild sea buckthorn oil and crispy kelp garnish.
          </p>
          <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
            <span style="background: rgba(200, 90, 50, 0.12); color: var(--accent-terracotta); font-size: 0.75rem; padding: 0.25rem 0.75rem; border-radius: 12px; font-weight: 800;">Thermal Retention</span>
            <span style="background: rgba(132, 117, 69, 0.15); color: var(--accent-gold); font-size: 0.75rem; padding: 0.25rem 0.75rem; border-radius: 12px; font-weight: 800;">Zero-Waste Kitchen</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Four Pillars of High Gastronomy & Ceramic Craftsmanship Grid -->
  <section class="section" id="pillars">
    <div class="container">
      <div class="section-title-wrap">
        <span class="chapter-badge">✦ CHAPTER 02: CULINARY PILLARS</span>
        <h2 class="section-title">Four Pillars of Fine Dining Mastery</h2>
      </div>
      <div class="grid-4">
        <div class="plate-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🍽️</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-terracotta); margin-bottom: 0.75rem;">Artisanal Stoneware</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Hand-thrown matte clay dinnerware designed to retain heat and accentuate vibrant dish colors.</p>
        </div>
        <div class="plate-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🥩</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-terracotta); margin-bottom: 0.75rem;">Dry-Aged Gastronomy</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">45-day dry-aging and koji fermentation unlocking profound umami depth and velvet tenderness.</p>
        </div>
        <div class="plate-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🍷</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-terracotta); margin-bottom: 0.75rem;">Sommelier Pairings</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Curated vintage wine pairings balancing tannin structure, acidity, and dish flavor profiles.</p>
        </div>
        <div class="plate-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🌱</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-terracotta); margin-bottom: 0.75rem;">Farm-to-Table Ethics</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Hyper-local organic micro-greens, zero-waste broths, and sustainable wild seafood sourcing.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Interactive Tasting Menu & Seasonality Switcher Hub -->
  <section class="section" id="menu-switcher" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="chapter-badge">✦ CHAPTER 03: TASTING MENU HUB</span>
        <h2 class="section-title">Interactive Seasonal Tasting Menu</h2>
        <p style="color: var(--text-secondary); max-width: 650px; margin: 1rem auto 0;">
          Select a seasonal course below to inspect its flavor architecture, ceramic plating medium, and ingredient provenance:
        </p>
      </div>

      <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; margin-bottom: 2rem;">
        <button class="menu-tab-btn active" data-menu="spring">Spring Harvest</button>
        <button class="menu-tab-btn" data-menu="summer">Summer Ocean</button>
        <button class="menu-tab-btn" data-menu="autumn">Autumn Truffle</button>
        <button class="menu-tab-btn" data-menu="winter">Winter Solstice</button>
      </div>

      <div class="plate-card" id="menu-details" style="max-width: 850px; margin: 0 auto; border-color: var(--accent-terracotta);">
        <h4 style="color: var(--accent-terracotta); font-size: 1.25rem; margin-bottom: 0.5rem;">Spring Harvest: White Asparagus & Morel Reduction</h4>
        <p style="color: var(--accent-gold); font-weight: 800; font-size: 0.95rem; margin-bottom: 0.75rem;">
          Wild Foraged Morels • 24-Month Aged Parmigiano Broth • Artisanal Tuscan Stoneware Plating.
        </p>
        <p style="color: var(--text-secondary); font-size: 0.95rem;">
          Delicate spring white asparagus poached in cultured butter paired with wild black morels and a golden parmigiano reggiano reduction.
        </p>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Artisanal Stoneware Glazing & Thermal Plating Science Spotlight -->
  <section class="section" id="plating-spotlight">
    <div class="container">
      <div class="grid-2">
        <div>
          <span class="chapter-badge" style="display:inline-block;">✦ CHAPTER 04: CERAMIC PLATING SCIENCE</span>
          <h2 class="section-title" style="text-align:left; margin-bottom: 1.5rem;">Thermal Retention & Surface Contrast Physics</h2>
          <p style="color: var(--text-secondary); margin-bottom: 1.25rem; line-height: 1.8;">
            Mass-market commercial porcelain cools delicate sauces within minutes. At SupperPlateBay, we evaluate heavy stoneware ceramics engineered to hold thermal energy.
          </p>
          <ul style="list-style: none; color: var(--text-secondary); margin-bottom: 2rem;">
            <li style="margin-bottom: 0.75rem;">🍽️ <strong style="color:var(--text-primary);">Thermal Retention Stoneware:</strong> 1,280°C vitrified clay maintaining 60°C dish warmth.</li>
            <li style="margin-bottom: 0.75rem;">🎨 <strong style="color:var(--text-primary);">Matte Mineral Glazes:</strong> Non-reflective organic mineral glazes preventing camera glare.</li>
            <li style="margin-bottom: 0.75rem;">🧪 <strong style="color:var(--text-primary);">Stable Emulsion Sauces:</strong> Precise lipid-to-water ratios preventing sauce separation.</li>
          </ul>
          <a href="about.html" class="btn btn-terracotta">Our Gastronomy Manifesto</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1583394838336-acd977736f90?auto=format&fit=crop&w=1205&q=80" alt="SupperPlateBay Fine Dining Atmosphere" style="border-radius: 24px; border: 1px solid var(--border-color); box-shadow: 0 15px 35px rgba(200,90,50,0.15);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Interactive Sommelier & Palate Diagnostic Matcher Quiz -->
  <section class="section" id="quiz" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="chapter-badge">✦ CHAPTER 05: PALATE DIAGNOSTIC</span>
        <h2 class="section-title">Gastronomy & Wine Matcher Quiz</h2>
      </div>
      <div class="plate-card" style="max-width: 750px; margin: 0 auto;">
        <h3 style="color: var(--accent-terracotta); margin-bottom: 1rem;">What Is Your Preferred Dining Atmosphere & Palate Profile?</h3>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
          <button class="quiz-btn btn btn-outline-terracotta" style="text-align:left; justify-content:flex-start;" data-rec="7-Course Tuscan Truffle & Barolo Vintage Pairing on Matte Terracotta Stoneware.">
            A. Candlelit Supper Club Elegance, Wild Truffles & Aged Nebbiolo Wine
          </button>
          <button class="quiz-btn btn btn-outline-terracotta" style="text-align:left; justify-content:flex-start;" data-rec="5-Course Nordic Coastal Seafood & Crisp Chablis Pairing on Off-White Stoneware.">
            B. Minimalist Coastal Seafood, Hokkaido Scallops & Mineral Chablis
          </button>
          <button class="quiz-btn btn btn-outline-terracotta" style="text-align:left; justify-content:flex-start;" data-rec="9-Course Molecular Gastronomy & Vintage Champagne Pairing.">
            C. Modernist Molecular Gastronomy, Spherification & Vintage Champagne
          </button>
        </div>
        <div id="quiz-result"></div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Culinary Innovation & Gastronomy Benchmarks Metrics Counter -->
  <section class="section" id="metrics">
    <div class="container">
      <div class="section-title-wrap">
        <span class="chapter-badge">✦ CHAPTER 06: ATELIER METRICS</span>
        <h2 class="section-title">SupperPlateBay Research Benchmarks</h2>
      </div>
      <div class="grid-4">
        <div class="plate-card" style="text-align: center;">
          <h3 class="metric-number gradient-text-terracotta" data-target="12" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Masterclass Essays</p>
        </div>
        <div class="plate-card" style="text-align: center;">
          <h3 class="metric-number gradient-text-terracotta" data-target="10000" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Surveyed Diners</p>
        </div>
        <div class="plate-card" style="text-align: center;">
          <h3 class="metric-number gradient-text-terracotta" data-target="1280" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Clay Firing Temperature</p>
        </div>
        <div class="plate-card" style="text-align: center;">
          <h3 class="metric-number gradient-text-terracotta" data-target="1500" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Words Per Essay</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Michelin Chefs & Master Ceramicists Endorsement Pull-Quotes with Avatar Disks -->
  <section class="section" id="testimonials" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="chapter-badge">✦ CHAPTER 07: CRITICAL ACCLAIM</span>
        <h2 class="section-title">Endorsements From Michelin Chefs & Critics</h2>
      </div>
      <div class="grid-3">
        <div class="plate-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "SupperPlateBay provides the definitive breakdown on stoneware thermal retention, sauce emulsion math, and plating surface contrast."
          </p>
          <div style="display: flex; gap: 1rem; align-items: center;">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1220&q=80" alt="Chef Jean-Luc Laurent" style="width: 50px; height: 50px; border-radius: 50%; border: 2px solid var(--accent-terracotta);">
            <div>
              <strong style="color: var(--accent-terracotta); display: block;">— Chef Jean-Luc Laurent</strong>
              <span style="color: var(--text-muted); font-size: 0.85rem;">3-Star Michelin Chef, Paris</span>
            </div>
          </div>
        </div>
        <div class="plate-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "Their research into dry-aging biochemistry, koji fermentation, and sommelier tannin balance is essential for modern gastronomy."
          </p>
          <div style="display: flex; gap: 1rem; align-items: center;">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=1235&q=80" alt="Master Sommelier Marco Rossi" style="width: 50px; height: 50px; border-radius: 50%; border: 2px solid var(--accent-terracotta);">
            <div>
              <strong style="color: var(--accent-terracotta); display: block;">— Marco Rossi</strong>
              <span style="color: var(--text-muted); font-size: 0.85rem;">Master Sommelier, Florence</span>
            </div>
          </div>
        </div>
        <div class="plate-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "The premier online journal for artisanal ceramic glazes, thermal plating physics, and zero-waste dining room philosophy."
          </p>
          <div style="display: flex; gap: 1rem; align-items: center;">
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=815&q=80" alt="Claire DuPont" style="width: 50px; height: 50px; border-radius: 50%; border: 2px solid var(--accent-terracotta);">
            <div>
              <strong style="color: var(--accent-terracotta); display: block;">— Claire DuPont</strong>
              <span style="color: var(--text-muted); font-size: 0.85rem;">Food Critic, New York Times</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: Recent Culinary Dispatches & Article Grid + TLDR Callout Card + VIP Table Gazette Newsletter -->
  <section class="section" id="newsletter">
    <div class="container">
      <div class="section-title-wrap">
        <span class="chapter-badge">✦ CHAPTER 08: DISPATCHES</span>
        <h2 class="section-title">Latest Masterclass Essays & Table Gazette</h2>
      </div>
      <div class="grid-3" style="margin-bottom: 3rem;">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=815&q=80" alt="Michelin Plating">
            <span class="blog-tag">Michelin Plating</span>
          </div>
          <div class="blog-content">
            <div class="blog-date">August 25, 2026 • 1,415 Words</div>
            <h3 class="blog-title"><a href="blog/the-art-and-physics-of-michelin-star-culinary-plating.html">Physics of Michelin-Star Plating</a></h3>
            <p class="blog-excerpt">Geometric balance, negative space math, and color contrast principles.</p>
            <a href="blog/the-art-and-physics-of-michelin-star-culinary-plating.html" class="read-more">Read Masterclass Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?auto=format&fit=crop&w=830&q=80" alt="Artisanal Stoneware">
            <span class="blog-tag">Ceramic Craft</span>
          </div>
          <div class="blog-content">
            <div class="blog-date">August 21, 2026 • 1,402 Words</div>
            <h3 class="blog-title"><a href="blog/artisanal-stoneware-vs-fine-bone-china-ceramic-dinnerware-guide.html">Artisanal Stoneware vs Bone China</a></h3>
            <p class="blog-excerpt">High-fire stoneware clays, matte mineral glazes, and thermal retention.</p>
            <a href="blog/artisanal-stoneware-vs-fine-bone-china-ceramic-dinnerware-guide.html" class="read-more">Read Masterclass Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=845&q=80" alt="Sommelier Pairings">
            <span class="blog-tag">Sommelier Guide</span>
          </div>
          <div class="blog-content">
            <div class="blog-date">August 17, 2026 • 1,395 Words</div>
            <h3 class="blog-title"><a href="blog/sommelier-wine-pairing-principles-acid-tannins-and-palate-harmony.html">Sommelier Wine Pairing Principles</a></h3>
            <p class="blog-excerpt">Tannin structure, palate acidity harmony, and vintage selection math.</p>
            <a href="blog/sommelier-wine-pairing-principles-acid-tannins-and-palate-harmony.html" class="read-more">Read Masterclass Essay →</a>
          </div>
        </div>
      </div>

      <!-- TLDR Callout Card (Sensory Style) -->
      <div style="text-align: center; margin-bottom: 3rem;">
        <div class="tldr-card">
          <span style="font-size: 1.5rem;">⚖️</span>
          <span style="color: var(--text-primary); font-weight: 800; font-size: 0.95rem;">
            <strong>TLDR:</strong> Vitrified 1,280°C artisanal stoneware retains dish heat for over 20 minutes while enhancing visual sauce contrast in fine dining.
          </span>
        </div>
      </div>

      <!-- Newsletter Card -->
      <div class="plate-card" style="text-align: center; max-width: 800px; margin: 0 auto; border-color: var(--accent-terracotta);">
        <span class="chapter-badge">✦ VIP TABLE GAZETTE</span>
        <h2 class="section-title" style="margin-bottom: 1rem; font-size: 2.2rem;">Subscribe to The Supper Gazette</h2>
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Receive bi-weekly tasting menu dispatches, ceramic glazing notes, and sommelier vintage guides.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to SupperPlateBay Gazette.');" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your email address" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: var(--bg-primary); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 50px;">
          <button type="submit" class="btn btn-terracotta">Subscribe</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Supper<span>PlateBay</span></a>
          <p>SupperPlateBay is a premier fine dining publication dedicated to Michelin-level culinary plating, artisanal stoneware ceramics, farm-to-table tasting menus, and sommelier vintage pairings.</p>
          <p style="margin-top: 1rem; color: var(--accent-terracotta);">
            📍 181 Mercer Street, New York, NY 10012, United States<br>
            📞 +1-888-777-5845
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Coat Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal Policies</h4>
          <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="terms.html">Terms of Use</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Atelier Focus</h4>
          <p>Deconstructing 1,280°C vitrified stoneware ceramics, dry-aging biochemistry, sauce emulsion stability, and sommelier wine pairing physics globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 SupperPlateBay. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed for Fine Dining & Gastronomy Excellence.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>
