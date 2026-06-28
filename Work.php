<!doctype html>

<html class="dark" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Work | CREATIVE.OS Portfolio</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    />
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              surface: "#131313",
              "tertiary-fixed": "#b0ecff",
              "on-secondary-fixed-variant": "#514700",
              "surface-tint": "#b2c5ff",
              "on-tertiary-fixed": "#001f27",
              primary: "#b2c5ff",
              "on-surface-variant": "#c3c6d5",
              "on-error": "#690005",
              "secondary-container": "#a39118",
              "on-primary": "#002c72",
              "on-secondary": "#383100",
              "on-error-container": "#ffdad6",
              "on-secondary-container": "#302a00",
              "surface-dim": "#131313",
              "inverse-on-surface": "#313030",
              "tertiary-fixed-dim": "#8ad1e6",
              outline: "#8d909f",
              "secondary-fixed-dim": "#dbc74e",
              error: "#ffb4ab",
              "on-primary-fixed-variant": "#0040a0",
              "surface-container-low": "#1c1b1b",
              "surface-container-highest": "#353534",
              "surface-container-high": "#2a2a2a",
              "on-background": "#e5e2e1",
              "primary-fixed-dim": "#b2c5ff",
              "outline-variant": "#434653",
              "surface-container-lowest": "#0e0e0e",
              background: "#131313",
              secondary: "#dbc74e",
              "on-surface": "#e5e2e1",
              "on-primary-container": "#002666",
              "inverse-surface": "#e5e2e1",
              "primary-container": "#5d8dfe",
              "secondary-fixed": "#f9e467",
              tertiary: "#8ad1e6",
              "primary-fixed": "#dae2ff",
              "on-tertiary-container": "#002f3a",
              "on-tertiary": "#003641",
              "on-tertiary-fixed-variant": "#004e5e",
              "on-primary-fixed": "#001847",
              "error-container": "#93000a",
              "on-secondary-fixed": "#201c00",
              "surface-container": "#201f1f",
              "inverse-primary": "#1b58c6",
              "surface-variant": "#353534",
              "tertiary-container": "#539baf",
              "surface-bright": "#393939",
            },
            borderRadius: {
              DEFAULT: "0.25rem",
              lg: "0.5rem",
              xl: "0.75rem",
              full: "9999px",
            },
            spacing: {
              "margin-desktop": "64px",
              gutter: "24px",
              "container-max": "1280px",
              unit: "8px",
              "margin-mobile": "20px",
            },
            fontFamily: {
              "display-lg": ["Plus Jakarta Sans"],
              "headline-md": ["Plus Jakarta Sans"],
              "label-bold": ["Plus Jakarta Sans"],
              "headline-lg": ["Plus Jakarta Sans"],
              "headline-lg-mobile": ["Plus Jakarta Sans"],
              "body-md": ["Plus Jakarta Sans"],
              "body-lg": ["Plus Jakarta Sans"],
            },
            fontSize: {
              "display-lg": [
                "64px",
                {
                  lineHeight: "1.1",
                  letterSpacing: "-0.04em",
                  fontWeight: "800",
                },
              ],
              "headline-md": ["24px", { lineHeight: "1.3", fontWeight: "600" }],
              "label-bold": ["14px", { lineHeight: "1", fontWeight: "700" }],
              "headline-lg": [
                "32px",
                {
                  lineHeight: "1.2",
                  letterSpacing: "-0.02em",
                  fontWeight: "700",
                },
              ],
              "headline-lg-mobile": [
                "28px",
                { lineHeight: "1.2", fontWeight: "700" },
              ],
              "body-md": ["16px", { lineHeight: "1.5", fontWeight: "400" }],
              "body-lg": ["18px", { lineHeight: "1.6", fontWeight: "400" }],
            },
          },
        },
      };
    </script>
    <style>
      body {
        background-color: #131313;
        font-family: "Plus Jakarta Sans", sans-serif;
        color: #e5e2e1;
      }
      .material-symbols-outlined {
        font-variation-settings:
          "FILL" 0,
          "wght" 400,
          "GRAD" 0,
          "opsz" 24;
      }
      .bento-card {
        transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
      }
      .bento-card:hover {
        transform: scale(1.02);
      }
      .filter-chip.active {
        background-color: #dbc74e;
        color: #201c00;
      }
      .filter-chip {
        transition: all 0.2s ease;
      }
      .glass-header {
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
      }
    </style>
  </head>
  <body
    class="bg-background text-on-background selection:bg-secondary selection:text-on-secondary"
  >
    <!-- Top Navigation Bar -->
    <header class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md">
      <nav
        class="flex justify-between items-center px-margin-mobile md:px-margin-desktop py-4 max-w-container-max mx-auto"
      >
        <div
          class="font-display-lg text-headline-md tracking-tighter text-on-surface"
        >
          CREATIVE.OS
        </div>
        <div class="hidden md:flex items-center space-x-8">
          <a
            class="text-on-surface-variant hover:text-primary transition-colors font-label-bold text-label-bold"
            href="Work.html"
            >Work</a
          >
          <a
            class="text-on-surface-variant hover:text-primary transition-colors font-label-bold text-label-bold"
            href="index.html"
            >Skills</a
          >
          <a
            class="text-on-surface-variant hover:text-primary transition-colors font-label-bold text-label-bold"
            href="about.html"
            >About</a
          >
          <a
            class="text-on-surface-variant hover:text-primary transition-colors font-label-bold text-label-bold"
            href="contact.html"
            >Contact</a
          >
        </div>
        <button
          class="bg-primary text-on-primary px-6 py-2 rounded-full font-label-bold text-label-bold hover:scale-105 transition-transform duration-200 active:scale-95"
        >
          Let's Talk
        </button>
      </nav>
    </header>
    <main
      class="pt-32 pb-24 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto"
    >
      <!-- Hero Section / Header -->
      <div class="mb-16">
        <div
          class="flex flex-col md:flex-row md:items-end justify-between gap-6"
        >
          <div>
            <h1
              class="font-display-lg text-display-lg md:text-[80px] leading-none mb-4"
            >
              SELECTED<br />PROJECTS<span class="text-secondary">.</span>
            </h1>
            <p
              class="font-body-lg text-body-lg text-on-surface-variant max-w-xl"
            >
              A curated archive of digital experiences, visual identities, and
              interactive experiments crafted with precision.
            </p>
          </div>
          <div
            class="bg-surface-container-high px-8 py-6 rounded-3xl border border-outline-variant/30 flex flex-col items-center"
          >
            <span class="text-secondary font-display-lg text-headline-lg"
              >12</span
            >
            <span
              class="font-label-bold text-label-bold uppercase tracking-widest text-on-surface-variant"
              >TOTAL WORK</span
            >
          </div>
        </div>
      </div>
      <!-- Filter Bar -->
      <div class="flex flex-wrap gap-3 mb-12">
        <button
          class="filter-chip active px-6 py-3 rounded-full font-label-bold text-label-bold bg-surface-container-high hover:bg-surface-container-highest"
        >
          All Works
        </button>
        <button
          class="filter-chip px-6 py-3 rounded-full font-label-bold text-label-bold bg-surface-container-high text-on-surface-variant hover:bg-surface-container-highest"
        >
          UI/UX Design
        </button>
        <button
          class="filter-chip px-6 py-3 rounded-full font-label-bold text-label-bold bg-surface-container-high text-on-surface-variant hover:bg-surface-container-highest"
        >
          Motion Graphics
        </button>
        <button
          class="filter-chip px-6 py-3 rounded-full font-label-bold text-label-bold bg-surface-container-high text-on-surface-variant hover:bg-surface-container-highest"
        >
          Brand Identity
        </button>
        <button
          class="filter-chip px-6 py-3 rounded-full font-label-bold text-label-bold bg-surface-container-high text-on-surface-variant hover:bg-surface-container-highest"
        >
          3D Rendering
        </button>
      </div>
      <!-- Bento Work Grid -->
      <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
        <!-- Project 1: Featured (Large) -->
        <div
          class="bento-card md:col-span-8 group relative overflow-hidden rounded-[40px] bg-primary-container h-[500px]"
        >
          <div
            class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
            data-alt="A high-fidelity minimalist dashboard UI design for a fintech application, showcasing sleek charts and data visualizations. The interface uses a dark mode aesthetic with electric blue and sunny yellow accents. The lighting is soft and professional, highlighting the depth of the layers and the precision of the typography."
            style="
              background-image: url(luca-bravo-XJXWbfSo2f0-unsplash.jpg);
            "
          ></div>
          <div
            class="absolute inset-0 bg-gradient-to-t from-surface/90 via-surface/20 to-transparent"
          ></div>
          <div
            class="absolute bottom-0 left-0 p-10 w-full flex justify-between items-end"
          >
            <div>
              <div class="flex gap-2 mb-4">
                <span
                  class="px-4 py-1.5 rounded-full bg-secondary text-on-secondary font-label-bold text-[12px] uppercase"
                  >UI/UX</span
                >
                <span
                  class="px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md text-white font-label-bold text-[12px] uppercase"
                  >2024</span
                >
              </div>
              <h3 class="font-headline-lg text-headline-lg text-white">
                Quantum Dashboard System
              </h3>
            </div>
            <a
              class="w-16 h-16 rounded-full bg-white flex items-center justify-center text-surface hover:rotate-45 transition-transform duration-300"
              href="#"
            >
              <span class="material-symbols-outlined">north_east</span>
            </a>
          </div>
        </div>
        <!-- Project 2: Square -->
        <div
          class="bento-card md:col-span-4 group relative overflow-hidden rounded-[40px] bg-surface-container-high h-[500px]"
        >
          <div
            class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
            data-alt="A dynamic motion graphics sequence featuring fluid 3D shapes morphing into a tech brand logo. The color scheme is a vibrant mix of electric blue and deep blacks with high-contrast shadows. The style is ultra-modern and energetic, perfect for a high-end creative agency portfolio."
            style="
              background-image: url(mohammad-rahmani-DwDZ5mgwhsc-unsplash.jpg);
            "
          ></div>
          <div
            class="absolute inset-0 bg-gradient-to-t from-surface/90 via-surface/10 to-transparent"
          ></div>
          <div class="absolute bottom-0 left-0 p-8 w-full">
            <div class="mb-3">
              <span
                class="px-4 py-1.5 rounded-full bg-tertiary-container text-on-tertiary-container font-label-bold text-[12px] uppercase"
                >Motion</span
              >
            </div>
            <h3 class="font-headline-md text-headline-md text-white">
              Flux Brand Identity
            </h3>
          </div>
        </div>
        <!-- Project 3: Vertical -->
        <div
          class="bento-card md:col-span-4 group relative overflow-hidden rounded-[40px] bg-surface-container-high h-[600px]"
        >
          <div
            class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
            data-alt="A sophisticated luxury watch brand identity and marketing site concept. The visuals focus on high-detail macro photography of watch components combined with elegant, high-contrast serif typography. The lighting is dramatic and moody, reflecting a sense of timelessness and premium craftsmanship."
            style="
              background-image: url(luca-bravo-XJXWbfSo2f0-unsplash.jpg);
            "
          ></div>
          <div
            class="absolute inset-0 bg-gradient-to-t from-surface/90 via-surface/10 to-transparent"
          ></div>
          <div class="absolute bottom-0 left-0 p-8 w-full">
            <div class="mb-3">
              <span
                class="px-4 py-1.5 rounded-full bg-secondary text-on-secondary font-label-bold text-[12px] uppercase"
                >Branding</span
              >
            </div>
            <h3 class="font-headline-md text-headline-md text-white">
              Chronos Luxury Web
            </h3>
          </div>
        </div>
        <!-- Project 4: Large Square -->
        <div
          class="bento-card md:col-span-8 group relative overflow-hidden rounded-[40px] bg-secondary-container h-[600px]"
        >
          <div
            class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110 mix-blend-overlay"
            data-alt="An immersive 3D web experience concept featuring an interactive floating landscape. The aesthetic is clean and futuristic, with bright neon accents cutting through a dark, atmospheric environment. It represents a state-of-the-art interactive playground for a digital portfolio."
            style="
              background-image: url(mohammad-rahmani-DwDZ5mgwhsc-unsplash.jpg);
            "
          ></div>
          <div
            class="absolute inset-0 bg-gradient-to-t from-surface/90 via-surface/10 to-transparent"
          ></div>
          <div
            class="absolute bottom-0 left-0 p-10 w-full flex justify-between items-end"
          >
            <div>
              <div class="flex gap-2 mb-4">
                <span
                  class="px-4 py-1.5 rounded-full bg-white/20 backdrop-blur-md text-white font-label-bold text-[12px] uppercase"
                  >Interactive</span
                >
              </div>
              <h3 class="font-headline-lg text-headline-lg text-white">
                The Void Experience
              </h3>
            </div>
            <a
              class="w-16 h-16 rounded-full bg-secondary text-on-secondary flex items-center justify-center hover:rotate-45 transition-transform duration-300"
              href="#"
            >
              <span class="material-symbols-outlined">north_east</span>
            </a>
          </div>
        </div>
        <!-- Project 5: Medium -->
        <div
          class="bento-card md:col-span-6 group relative overflow-hidden rounded-[40px] bg-surface-container-high h-[450px]"
        >
          <div
            class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
            data-alt="A clean and modern mobile app design for a mental health platform. The UI uses soothing pastel gradients, rounded components, and playful illustrations. The lighting is soft and airy, creating a calm and inviting atmosphere in a light-mode aesthetic but designed within a dark themed layout."
            style="
              background-image: url(mohammad-rahmani-DwDZ5mgwhsc-unsplash.jpg);
            "
          ></div>
          <div
            class="absolute inset-0 bg-gradient-to-t from-surface/90 via-surface/10 to-transparent"
          ></div>
          <div class="absolute bottom-0 left-0 p-8 w-full">
            <div class="mb-3">
              <span
                class="px-4 py-1.5 rounded-full bg-primary text-on-primary font-label-bold text-[12px] uppercase"
                >App Design</span
              >
            </div>
            <h3 class="font-headline-md text-headline-md text-white">
              Mindful Mobile App
            </h3>
          </div>
        </div>
        <!-- Project 6: Medium -->
        <div
          class="bento-card md:col-span-6 group relative overflow-hidden rounded-[40px] bg-surface-container-high h-[450px]"
        >
          <div
            class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110"
            data-alt="A striking promotional poster series for an electronic music festival. The designs use bold, experimental typography layered over high-contrast glitch art and neon textures. The energy is high, chaotic yet structured, featuring electric blue and radioactive yellow highlights."
            style="
              background-image: url(luca-bravo-XJXWbfSo2f0-unsplash.jpg);
            "
          ></div>
          <div
            class="absolute inset-0 bg-gradient-to-t from-surface/90 via-surface/10 to-transparent"
          ></div>
          <div class="absolute bottom-0 left-0 p-8 w-full">
            <div class="mb-3">
              <span
                class="px-4 py-1.5 rounded-full bg-tertiary text-on-tertiary font-label-bold text-[12px] uppercase"
                >Visual Arts</span
              >
            </div>
            <h3 class="font-headline-md text-headline-md text-white">
              Sonic Pulse Festival
            </h3>
          </div>
        </div>
      </div>
      <!-- Archive / View All Footer -->
      <div class="mt-24 border-t border-outline-variant/30 pt-16 text-center">
        <h2 class="font-headline-lg text-headline-lg mb-8">
          Ready to see the full archive?
        </h2>
        <div
          class="flex flex-col sm:flex-row items-center justify-center gap-4"
        >
          <button
            class="w-full sm:w-auto px-10 py-5 bg-secondary text-on-secondary rounded-full font-label-bold text-label-bold flex items-center justify-center gap-2 group hover:scale-105 transition-transform duration-300"
          >
            Browse Archive (2018—2023)
            <span
              class="material-symbols-outlined transition-transform duration-300 group-hover:translate-x-1"
              >arrow_forward</span
            >
          </button>
          <button
            class="w-full sm:w-auto px-10 py-5 bg-surface-container-high text-on-surface border border-outline-variant/30 rounded-full font-label-bold text-label-bold hover:bg-surface-container-highest transition-colors"
          >
            Dribbble Showcase
          </button>
        </div>
      </div>
    </main>
    <!-- Footer Component -->
    <footer class="w-full rounded-t-xl bg-surface-container-low">
      <div
        class="flex flex-col md:flex-row justify-between items-center px-margin-mobile md:px-margin-desktop py-gutter max-w-container-max mx-auto gap-8"
      >
        <div class="font-display-lg text-headline-md text-on-surface">
          CREATIVE.OS
        </div>
        <div class="flex gap-8">
          <a
            class="text-on-surface-variant font-body-md text-body-md hover:text-secondary transition-colors opacity-80 hover:opacity-100"
            href="#"
            >Dribbble</a
          >
          <a
            class="text-on-surface-variant font-body-md text-body-md hover:text-secondary transition-colors opacity-80 hover:opacity-100"
            href="#"
            >Behance</a
          >
          <a
            class="text-on-surface-variant font-body-md text-body-md hover:text-secondary transition-colors opacity-80 hover:opacity-100"
            href="#"
            >LinkedIn</a
          >
          <a
            class="text-on-surface-variant font-body-md text-body-md hover:text-secondary transition-colors opacity-80 hover:opacity-100"
            href="#"
            >GitHub</a
          >
        </div>
        <div
          class="text-on-surface-variant font-body-md text-body-md opacity-60"
        >
          © 2024 CREATIVE.OS. All rights reserved.
        </div>
      </div>
    </footer>
    <script>
      // Micro-interactions for Filter Chips
      const chips = document.querySelectorAll(".filter-chip");
      chips.forEach((chip) => {
        chip.addEventListener("click", () => {
          chips.forEach((c) => {
            c.classList.remove("active", "bg-secondary", "text-on-secondary");
            c.classList.add(
              "bg-surface-container-high",
              "text-on-surface-variant",
            );
          });
          chip.classList.add("active", "bg-secondary", "text-on-secondary");
          chip.classList.remove(
            "bg-surface-container-high",
            "text-on-surface-variant",
          );
        });
      });

      // Simple scroll reveal for cards
      const observerOptions = {
        threshold: 0.1,
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";
          }
        });
      }, observerOptions);

      document.querySelectorAll(".bento-card").forEach((card) => {
        card.style.opacity = "0";
        card.style.transform = "translateY(30px)";
        card.style.transition = "all 0.6s cubic-bezier(0.22, 1, 0.36, 1)";
        observer.observe(card);
      });
    </script>
  </body>
</html>
