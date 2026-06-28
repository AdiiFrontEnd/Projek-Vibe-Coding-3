<!doctype html>

<html class="dark" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Contact | CREATIVE.OS</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&amp;display=swap"
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
    <style>
      body {
        font-family: "Plus Jakarta Sans", sans-serif;
        background-color: #131313;
      }
      .bento-card {
        transition: transform 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      }
      .bento-card:hover {
        transform: scale(1.015);
      }
      .pulse-indicator {
        box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7);
        animation: pulse 2s infinite;
      }
      @keyframes pulse {
        0% {
          transform: scale(0.95);
          box-shadow: 0 0 0 0 rgba(34, 197, 94, 0.7);
        }
        70% {
          transform: scale(1);
          box-shadow: 0 0 0 10px rgba(34, 197, 94, 0);
        }
        100% {
          transform: scale(0.95);
          box-shadow: 0 0 0 0 rgba(34, 197, 94, 0);
        }
      }
      .material-symbols-outlined {
        font-variation-settings:
          "FILL" 0,
          "wght" 400,
          "GRAD" 0,
          "opsz" 24;
      }
    </style>
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
  </head>
  <body
    class="bg-surface text-on-surface selection:bg-primary-container selection:text-on-primary-container"
  >
    <!-- Top Navigation Bar -->
    <nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-md">
      <div
        class="flex justify-between items-center px-6 md:px-margin-desktop py-4 max-w-container-max mx-auto"
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
            class="text-secondary font-bold border-b-2 border-secondary pb-1 font-label-bold text-label-bold"
            href="contact.html"
            >Contact</a
          >
        </div>
        <button
          class="bg-primary-container text-on-primary-container px-6 py-2 rounded-full font-label-bold text-label-bold hover:scale-105 transition-transform active:scale-95"
        >
          Let's Talk
        </button>
      </div>
    </nav>
    <main
      class="pt-32 pb-24 px-6 md:px-margin-desktop max-w-container-max mx-auto"
    >
      <!-- Header Section -->
      <header class="mb-16">
        <h1
          class="font-display-lg text-headline-lg-mobile md:text-display-lg mb-4 text-primary"
        >
          Let's Build Something<br />Extraordinary
        </h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
          Currently accepting new projects and creative collaborations. Drop a
          message or find me on socials.
        </p>
      </header>
      <!-- Bento Grid Layout -->
      <div
        class="grid grid-cols-1 md:grid-cols-12 gap-6 auto-rows-[minmax(180px,auto)]"
      >
        <!-- Contact Form Card -->
        <section
          class="md:col-span-8 md:row-span-3 bg-surface-container-low rounded-3xl p-8 md:p-12 bento-card border border-outline-variant/30 flex flex-col justify-between"
        >
          <div>
            <h2 class="font-headline-lg text-headline-lg mb-8">
              Send a Message
            </h2>
            <form class="space-y-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-2">
                  <label
                    class="font-label-bold text-label-bold text-on-surface-variant ml-1"
                    >Full Name</label
                  >
                  <input
                    class="w-full bg-surface-container-high border-transparent focus:border-primary-container focus:ring-0 rounded-2xl p-4 text-on-surface placeholder:text-outline transition-all"
                    placeholder="John Doe"
                    type="text"
                  />
                </div>
                <div class="space-y-2">
                  <label
                    class="font-label-bold text-label-bold text-on-surface-variant ml-1"
                    >Email Address</label
                  >
                  <input
                    class="w-full bg-surface-container-high border-transparent focus:border-primary-container focus:ring-0 rounded-2xl p-4 text-on-surface placeholder:text-outline transition-all"
                    placeholder="john@example.com"
                    type="email"
                  />
                </div>
              </div>
              <div class="space-y-2">
                <label
                  class="font-label-bold text-label-bold text-on-surface-variant ml-1"
                  >Project Details</label
                >
                <textarea
                  class="w-full bg-surface-container-high border-transparent focus:border-primary-container focus:ring-0 rounded-2xl p-4 text-on-surface placeholder:text-outline transition-all resize-none"
                  placeholder="Tell me about your vision..."
                  rows="5"
                ></textarea>
              </div>
              <button
                class="w-full md:w-auto bg-secondary text-on-secondary-container px-12 py-4 rounded-full font-headline-md text-headline-md hover:scale-[1.02] transition-transform active:scale-95 flex items-center justify-center gap-3"
                type="submit"
              >
                Launch Project
                <span class="material-symbols-outlined">send</span>
              </button>
            </form>
          </div>
        </section>
        <!-- Availability Status -->
        <div
          class="md:col-span-4 md:row-span-1 bg-surface-container rounded-3xl p-8 bento-card border border-outline-variant/30 flex flex-col justify-center relative overflow-hidden"
        >
          <div class="flex items-center gap-4 mb-2">
            <div
              class="w-3 h-3 bg-green-500 rounded-full pulse-indicator"
            ></div>
            <span
              class="font-label-bold text-label-bold text-on-surface uppercase tracking-widest"
              >Live Status</span
            >
          </div>
          <h3 class="font-headline-lg text-headline-lg">Available Now</h3>
          <p class="font-body-md text-body-md text-on-surface-variant mt-1">
            Starting new cycles in April
          </p>
          <div class="absolute -right-4 -bottom-4 opacity-5">
            <span class="material-symbols-outlined text-9xl">bolt</span>
          </div>
        </div>
        <!-- Social Connections -->
        <div
          class="md:col-span-4 md:row-span-2 bg-primary-container text-on-primary-container rounded-3xl p-8 bento-card flex flex-col justify-between"
        >
          <h3 class="font-headline-lg text-headline-lg">Connect</h3>
          <div class="grid grid-cols-2 gap-4">
            <a
              class="bg-on-primary/10 hover:bg-on-primary/20 p-4 rounded-2xl transition-colors flex flex-col items-center gap-2"
              href="#"
            >
              <span class="material-symbols-outlined text-3xl"
                >sports_basketball</span
              >
              <span class="font-label-bold text-label-bold">Dribbble</span>
            </a>
            <a
              class="bg-on-primary/10 hover:bg-on-primary/20 p-4 rounded-2xl transition-colors flex flex-col items-center gap-2"
              href="#"
            >
              <span class="material-symbols-outlined text-3xl">terminal</span>
              <span class="font-label-bold text-label-bold">GitHub</span>
            </a>
            <a
              class="bg-on-primary/10 hover:bg-on-primary/20 p-4 rounded-2xl transition-colors flex flex-col items-center gap-2"
              href="#"
            >
              <span class="material-symbols-outlined text-3xl">work</span>
              <span class="font-label-bold text-label-bold">LinkedIn</span>
            </a>
            <a
              class="bg-on-primary/10 hover:bg-on-primary/20 p-4 rounded-2xl transition-colors flex flex-col items-center gap-2"
              href="#"
            >
              <span class="material-symbols-outlined text-3xl">palette</span>
              <span class="font-label-bold text-label-bold">Behance</span>
            </a>
          </div>
          <p class="font-body-md text-body-md mt-4 opacity-80 italic">
            Always active on DMs
          </p>
        </div>
        <!-- Location/Timezone Card -->
        <div
          class="md:col-span-4 md:row-span-1 bg-surface-container-highest rounded-3xl p-8 bento-card border border-outline-variant/30 flex items-center justify-between overflow-hidden"
        >
          <div>
            <h3
              class="font-label-bold text-label-bold text-on-surface-variant uppercase tracking-widest mb-1"
            >
              Location
            </h3>
            <div class="font-headline-md text-headline-md">London, UK</div>
            <div class="font-body-md text-body-md text-primary mt-1" id="clock">
              12:00:00 PM GMT
            </div>
          </div>
          <div
            class="w-20 h-20 bg-surface rounded-2xl flex items-center justify-center border border-outline-variant/30"
          >
            <span class="material-symbols-outlined text-primary text-4xl"
              >public</span
            >
          </div>
          <!-- Decorative Visual Card -->
          <div
            class="md:col-span-4 md:row-span-1 rounded-3xl overflow-hidden bento-card relative"
          >
            <div
              class="absolute inset-0 bg-gradient-to-br from-primary/20 to-secondary/20 z-10"
            ></div>
            <div
              class="absolute inset-0 w-full h-full bg-cover bg-center"
              data-alt="A macro photography shot of an electric blue and neon yellow textured surface with dynamic liquid motion. The image captures abstract swirls and light reflections that mimic high-end technological energy. The lighting is moody and cinematic, emphasizing the contrast between the dark environment and the vibrant electric accents."
              style="
                background-image: url(&quot;https://lh3.googleusercontent.com/aida-public/AB6AXuB0nCktb_g8Vjr1pFGqgfJqIha9SGLzyI5HsEl2AtcDUs_fFlzueyHr59ZX-8iXRcXlCmRRmIpSTqlE8wx8HiXmRSqeOUm0G8uk7o37lPqXBxE_KfS9WNCaXg7UT9dv3VssVR2mIiceK1DUAXhDcvQ78sFqmHcrK7TRbYs4cednk6wjOQWNh8vOYNF1qN_Diwoc5JoEAclek6hf4AXITTl5fA-TFS3iDnZyq6cEe1COPrwQpBsvbDPCu-V3cgWi0RSr42VBe_KkRw&quot;);
              "
            ></div>
            <div class="absolute inset-0 flex items-center justify-center z-20">
              <div
                class="bg-surface/60 backdrop-blur-lg px-4 py-2 rounded-full border border-white/10 font-label-bold text-label-bold"
              >
                CREATIVE.DNA
              </div>
            </div>
          </div>
          <!-- FAQ or CTA Quick Link -->
          <div
            class="md:col-span-4 md:row-span-1 bg-tertiary-container text-on-tertiary-container rounded-3xl p-8 bento-card flex flex-col justify-between"
          >
            <div>
              <h3 class="font-headline-md text-headline-md">
                Quick Questions?
              </h3>
              <p class="font-body-md text-body-md mt-2 opacity-90">
                View our collaboration guide and pricing models.
              </p>
            </div>
            <a
              class="flex items-center gap-2 font-label-bold text-label-bold group"
              href="#"
            >
              View FAQ
              <span
                class="material-symbols-outlined group-hover:translate-x-1 transition-transform"
                >arrow_forward</span
              >
            </a>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer Component -->
    <footer class="bg-surface border-t border-outline-variant/10">
      <div
        class="flex flex-col md:flex-row justify-between items-center px-6 md:px-margin-desktop py-gutter max-w-container-max mx-auto space-y-6 md:space-y-0"
      >
        <div class="font-display-lg text-headline-md text-on-surface">
          CREATIVE.OS
        </div>
        <div
          class="flex space-x-6 text-on-surface-variant font-body-md text-body-md"
        >
          <a class="hover:text-secondary transition-colors" href="#"
            >Dribbble</a
          >
          <a class="hover:text-secondary transition-colors" href="#">Behance</a>
          <a class="hover:text-secondary transition-colors" href="#"
            >LinkedIn</a
          >
          <a class="hover:text-secondary transition-colors" href="#">GitHub</a>
        </div>
        <div class="font-body-md text-body-md text-on-surface-variant">
          © 2024 CREATIVE.OS. All rights reserved.
        </div>
      </div>
    </footer>
    <script>
      // Real-time clock for the Location Card
      function updateClock() {
        const now = new Date();
        const timeString = now.toLocaleTimeString("en-GB", {
          timeZone: "Europe/London",
          hour: "2-digit",
          minute: "2-digit",
          second: "2-digit",
          hour12: true,
        });
        document.getElementById("clock").textContent = `${timeString} GMT`;
      }
      setInterval(updateClock, 1000);
      updateClock();

      // Simple form interaction
      document.querySelector("form").addEventListener("submit", (e) => {
        e.preventDefault();
        const btn = e.target.querySelector("button");
        const originalText = btn.innerHTML;
        btn.innerHTML = "Sending...";
        btn.disabled = true;

        setTimeout(() => {
          btn.innerHTML =
            'Message Sent! <span class="material-symbols-outlined">check_circle</span>';
          btn.classList.replace("bg-secondary", "bg-green-500");
          btn.classList.replace("text-on-secondary-container", "text-white");
          e.target.reset();
        }, 1500);
      });
    </script>
  </body>
</html>
