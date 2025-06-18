<?php
function loadingSpinner()
{
    ?>
    <div id="loading-spinner" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="relative">
            <!-- Círculo giratorio -->
            <div class="w-16 h-16 border-4 border-blue-200 border-t-blue-500 rounded-full animate-spin"></div>
            <!-- Texto de carga (opcional) -->
            <div class="mt-4 text-center text-white font-medium">Cargando...</div>
        </div>
    </div>
    <?php
} ?>