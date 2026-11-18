<section class="content px-6 min-h-screen flex items-center overflow-hidden">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center justify-center max-w-7xl mx-auto w-full py-20">
        
        <div class="w-full max-w-sm sm:max-w-md bg-slate-900/60 border border-slate-800 rounded-2xl overflow-hidden backdrop-blur-sm transition-all duration-300 hover:border-indigo-500/50 hover:-translate-y-1 flex flex-col transition-all animacion1 opacity-0 [animation-fill-mode:forwards]" style="animation-delay: 300ms;">
            <!-- Imagen previa -->
            <div class="w-full h-64 sm:h-80 bg-slate-950 border-b border-slate-800 relative overflow-hidden flex items-center justify-center">
                <img src="{{ asset('images/13018C.webp') }}" alt="Certificación Oficial" class="w-full h-full object-cover object-top">
            </div>

            <div class="p-6 sm:p-8 flex flex-col flex-grow justify-between">
                <div>
                    <h3 class="text-white font-bold text-lg sm:text-xl mt-1">Certificación Oficial</h3>
                    <p class="text-slate-400 text-base sm:text-lg mt-2">Diplomado en Diseño Gráfico</p>
                </div>

                <div class="flex flex-wrap items-center justify-between gap-4 mt-4 pt-6 border-t border-slate-800/80">
                    <a href="{{ asset('pdf/13018 C.pdf') }}" target="_blank" class="flex-1 justify-center transition duration-300 ease-in-out hover:scale-105 bg-[#1A81FF] hover:bg-sky-600 px-4 py-3 rounded-full text-white cursor-pointer flex items-center gap-2 font-medium text-sm sm:text-base whitespace-nowrap">
                        <i class="fas fa-file-pdf text-lg"></i> Ver PDF
                    </a>

                    <a href="{{ asset('pdf/13018 C.pdf') }}" download="Certificado.pdf" class="flex-1 justify-center transition duration-300 ease-in-out hover:scale-105 py-3 px-4 rounded-full bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white text-sm sm:text-base font-medium flex items-center gap-2 border border-slate-700/60 whitespace-nowrap">
                        <i class="fas fa-download text-base"></i> Descargar
                    </a>
                </div>
            </div>
        </div>

        <div class="w-full max-w-sm sm:max-w-md bg-slate-900/60 border border-slate-800 rounded-2xl overflow-hidden backdrop-blur-sm transition-all duration-300 hover:border-indigo-500/50 hover:-translate-y-1 flex flex-col transition-all animacion1 opacity-0 [animation-fill-mode:forwards]" style="animation-delay: 600ms;">
            <!-- Imagen previa -->
            <div class="w-full h-64 sm:h-80 bg-slate-950 border-b border-slate-800 relative overflow-hidden flex items-center justify-center">
                <img src="{{ asset('images/13018D.webp') }}" alt="Diploma" class="w-full h-full object-cover object-top">
            </div>

            <div class="p-6 sm:p-8 flex flex-col flex-grow justify-between">
                <div>
                    <h3 class="text-white font-bold text-lg sm:text-xl mt-1">Diploma</h3>
                    <p class="text-slate-400 text-base sm:text-lg mt-2">Diplomado en Diseño Gráfico</p>
                </div>

                <div class="flex flex-wrap items-center justify-between gap-4 mt-4 pt-6 border-t border-slate-800/80">
                    <a href="{{ asset('pdf/13018 D.pdf') }}" target="_blank" class="flex-1 justify-center transition duration-300 ease-in-out hover:scale-105 bg-[#1A81FF] hover:bg-sky-600 px-4 py-3 rounded-full text-white cursor-pointer flex items-center gap-2 font-medium text-sm sm:text-base whitespace-nowrap">
                        <i class="fas fa-file-pdf text-lg"></i> Ver PDF
                    </a>

                    <a href="{{ asset('pdf/13018 D.pdf') }}" download="Diploma.pdf" class="flex-1 justify-center transition duration-300 ease-in-out hover:scale-105 py-3 px-4 rounded-full bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white text-sm sm:text-base font-medium flex items-center gap-2 border border-slate-700/60 whitespace-nowrap">
                        <i class="fas fa-download text-base"></i> Descargar
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>