<section class="content px-6 min-h-screen flex items-center overflow-hidden">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center w-full py-20">
        <!-- Columna izquierda: presentación -->
        <div class="order-1 sm:order-1 lg:col-span-7 space-y-6">
            <span class="text-indigo-400 font-semibold tracking-widest text-lg animacion1 opacity-0 [animation-fill-mode:forwards]" style="animation-delay: 100ms;">
                ¡HOLA!
            </span>

            <h1 class="text-5xl lg:text-7xl font-extrabold text-white py-2 leading-tight animacion1 opacity-0 [animation-fill-mode:forwards]" style="animation-delay: 300ms;">
                Soy <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-violet-300 to-sky-300">Melanie</span>
            </h1>

            <p class="text-[#FFFFFF] text-lg sm:text-xl max-w-xl leading-relaxed drop-shadow-[0_2px_4px_rgba(0,0,0,0.9)] font-medium animacion1 opacity-0 [animation-fill-mode:forwards]" style="animation-delay: 500ms;">
                Ingeniera en Sistemas Computacionales con gusto por el desarrollo frontend, el diseño de interfaz y la animación web.
                Me apasiona cuidar cada detalle del proceso creativo, desde la conceptualización UI/UX hasta la implementación de interfaces adaptativas que transforman ideas en experiencias digitales impactantes.
            </p>

            <div class="flex flex-wrap items-center gap-4 pt-4 animacion1 opacity-0 [animation-fill-mode:forwards]" style="animation-delay: 700ms;">
                <a
                    href="{{ asset('pdf/CV_Melanie.pdf') }}"
                    download="CV_Melanie_Rojas.pdf"
                    class="transition duration-300 ease-in-out hover:scale-105 bg-gradient-to-r from-[#1A81FF] to-indigo-500 hover:from-sky-500 hover:to-indigo-400 px-6 py-3 rounded-full text-white cursor-pointer flex items-center gap-2 font-medium text-sm sm:text-base "
                >
                    <i class="fas fa-file-alt"></i> Descargar CV
                </a>
            </div>
        </div>

        <!-- Columna derecha: retrato destacado -->
        <div class="order-2 sm:order-2 lg:col-span-5 flex justify-center animacion1 opacity-0 [animation-fill-mode:forwards]" style="animation-delay: 800ms;">
            <div class="relative w-full max-w-sm sm:max-w-md lg:max-w-lg group">
                <div class="relative w-full aspect-[3/4] rounded-3xl p-2 bg-gradient-to-br from-indigo-400/40 via-white/10 overflow-hidden">
                    <div class="w-full h-full rounded-[1.25rem] overflow-hidden bg-slate-950 relative">
                        <img src="{{ asset('images/yo.webp') }}" alt="Melanie Josselyn Rojas Luna" class="w-full h-full object-cover object-top">
                    </div>
                </div>

                <!-- Etiqueta flotante inferior -->
                <div class="mt-4 sm:mt-0 sm:absolute sm:-bottom-4 sm:left-6 flex items-center gap-3 px-4 py-2.5 rounded-2xl bg-slate-900/90 border border-white/15">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span>
                    <div class="text-left">
                        <p class="text-white text-xs sm:text-sm font-semibold leading-none">Melanie Josselyn Rojas Luna</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>