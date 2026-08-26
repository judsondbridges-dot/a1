/* SupperPlateBay - Food & Fine Dinner Interactive JavaScript */
document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      mobileToggle.setAttribute('aria-expanded', navLinks.classList.contains('active'));
    });
  }

  // Sticky Navbar shadow on scroll
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // Animated metric counters
  const counters = document.querySelectorAll('.metric-number');
  if (counters.length > 0) {
    const observerOptions = { threshold: 0.5 };
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = +entry.target.getAttribute('data-target');
          let count = 0;
          const speed = target / 50;
          const updateCount = () => {
            count += speed;
            if (count < target) {
              entry.target.innerText = Math.ceil(count);
              setTimeout(updateCount, 25);
            } else {
              entry.target.innerText = target;
            }
          };
          updateCount();
          obs.unobserve(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
  }

  // Tasting Menu & Seasonality Switcher
  const menuBtns = document.querySelectorAll('.menu-tab-btn');
  const menuDetails = document.getElementById('menu-details');

  const menuData = {
    "spring": {
      "title": "Spring Harvest: White Asparagus & Morel Reduction",
      "specs": "Wild Foraged Morels • 24-Month Aged Parmigiano Broth • Artisanal Tuscan Stoneware Plating.",
      "desc": "Delicate spring white asparagus poached in cultured butter paired with wild black morels and a golden parmigiano reggiano reduction."
    },
    "summer": {
      "title": "Summer Ocean: Seared Hokkaido Scallop & Sea Sea Buckthorn",
      "specs": "Line-Caught Hokkaido Scallop • Sea Buckthorn Emulsion • Black Lava Salt Finish.",
      "desc": "Day-boat Hokkaido sea scallops pan-seared to a caramelized crust, accompanied by vibrant sea buckthorn oil and crispy kelp."
    },
    "autumn": {
      "title": "Autumn Truffle: Hand-Rolled Agnolotti with Piedmont White Truffle",
      "specs": "Piedmont White Truffles • House-Made Egg Yolk Dough • Brown Butter Foam.",
      "desc": "Freshly shaved Alba white truffles over delicate hand-folded egg pasta stuffed with braised veal neck and brown butter emulsion."
    },
    "winter": {
      "title": "Winter Solstice: 45-Day Dry-Aged Wagyu Ribeye & Koji Reduction",
      "specs": "A5 Miyazaki Wagyu • House-Fermented Koji Jus • Smoked Bone Marrow Glaze.",
      "desc": "Dry-aged Japanese A5 Wagyu seared over binchotan charcoal, glazed with umami-rich fermented koji jus and charred baby leeks."
    }
  };

  if (menuBtns.length > 0 && menuDetails) {
    menuBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        menuBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        const course = this.getAttribute('data-menu');
        const data = menuData[course] || menuData["spring"];
        
        menuDetails.innerHTML = `
          <h4 style="color: var(--accent-terracotta); font-size: 1.25rem; margin-bottom: 0.5rem;">${data.title}</h4>
          <p style="color: var(--accent-gold); font-weight: 800; font-size: 0.95rem; margin-bottom: 0.75rem;">${data.specs}</p>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">${data.desc}</p>
        `;
      });
    });
  }

  // Interactive Sommelier & Palate Diagnostic Quiz
  const quizButtons = document.querySelectorAll('.quiz-btn');
  const quizResult = document.getElementById('quiz-result');

  if (quizButtons.length > 0 && quizResult) {
    quizButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        quizButtons.forEach(b => b.style.opacity = '0.7');
        this.style.opacity = '1';
        const recommendation = this.getAttribute('data-rec');
        quizResult.innerHTML = `
          <div class="plate-card" style="background: var(--bg-secondary); margin-top: 1rem; border-color: var(--accent-terracotta);">
            <h4 style="color: var(--accent-terracotta); margin-bottom: 0.5rem;">Your Curated Gastronomy & Wine Pairing Recommendation</h4>
            <p style="color: var(--text-primary); font-weight: 800;">${recommendation}</p>
          </div>
        `;
      });
    });
  }
});
