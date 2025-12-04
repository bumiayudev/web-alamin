@extends('layout')
@section('content')
<style>
        /* Gaya kustom untuk konektor vertikal/horizontal */
        .org-chart .connector-v {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            background-color: #9ca3af; /* Gray-400 */
        }
        .org-chart .connector-h {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background-color: #0c0c0d; /* Gray-400 */
        }

        /* Konektor untuk item level atas (misal, antara CEO dan VPs) */
        .org-chart > .flex > .relative::before {
            @apply connector-v top-0 h-4; /* Koneksi dari atas (CEO) */
        }
        .org-chart > .flex > .relative::after {
            @apply connector-v bottom-0 h-4; /* Koneksi ke bawah (VPs) */
        }

        /* Konektor untuk anak-anak (VPs ke Managers) */
        .org-chart .children-group {
            @apply relative pt-8;
        }
        .org-chart .children-group::before {
            @apply connector-v top-0 h-8; /* Garis vertikal dari induk */
        }
        .org-chart .children-group .flex::before {
            @apply connector-h -top-px; /* Garis horizontal yang menghubungkan anak-anak */
        }
        .org-chart .children-group .flex > div {
            @apply relative;
        }
        .org-chart .children-group .flex > div::before {
            @apply connector-v top-0 h-4; /* Garis vertikal ke atas ke garis horizontal */
        }
</style>
<section class="bg-white dark:bg-gray-900 mb-100">
    <div class="container px-6 py-10 mx-auto w-full">
       <h1 class="text-3xl font-bold text-center mb-10 text-gray-800">Struktur Organisasi Mushola Al-Amin</h1>

        <div class="org-chart text-center overflow-x-auto whitespace-nowrap">

            <div class="inline-block relative">
                <div class="bg-blue-600 text-white p-4 rounded-lg shadow-xl inline-block border-2 border-blue-700 w-64">
                    <p class="font-bold text-lg">Ketua DKM</p>
                    <p class="text-sm">Ust. Ali Suherman</p>
                </div>

            </div>
            <div class="children-group">
                <div class="flex justify-center space-x-12 relative pt-4">

                    <div class="relative">
                        <div class="bg-white p-3 rounded-lg shadow-md border border-gray-300 w-52 inline-block">
                            <p class="font-semibold text-blue-600">Bendahara</p>
                            <p class="text-xs text-gray-600">Bpk. Ponijo</p>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="bg-white p-3 rounded-lg shadow-md border border-gray-300 w-52 inline-block">
                            <p class="font-semibold text-blue-600">Agus Suherlan</p>
                            <p class="text-xs text-gray-600">Sekretaris</p>
                        </div>
                    </div>

                </div>
                <div class="children-group pt-8">
                        <div class="flex justify-center space-x-4 relative">
                            <div class="relative">
                                <div class="bg-yellow-100 p-2 rounded-lg shadow-sm border border-yellow-300 w-40">
                                    <p class="font-medium text-sm text-yellow-800">Imam</p>
                                    <p class="text-xs text-gray-500">Ust. Yusuf & Tarjuki</p>
                                </div>
                            </div>
                            <div class="relative">
                                <div class="bg-yellow-100 p-2 rounded-lg shadow-sm border border-yellow-300 w-40">
                                    <p class="font-medium text-sm text-yellow-800">Seksi Keamanan</p>
                                    <p class="text-xs text-gray-500">Bapak Nurhadi & Suradi</p>
                                </div>
                            </div>
                            <div class="relative">
                                <div class="bg-yellow-100 p-2 rounded-lg shadow-sm border border-yellow-300 w-40">
                                    <p class="font-medium text-sm text-yellow-800">Seksi Peralatan</p>
                                    <p class="text-xs text-gray-500">Bpk. Asep & Dedi</p>
                                </div>
                            </div>
                            <div class="relative">
                                <div class="bg-yellow-100 p-2 rounded-lg shadow-sm border border-yellow-300 w-40">
                                    <p class="font-medium text-sm text-yellow-800">Seksi Dokumentasi</p>
                                    <p class="text-xs text-gray-500">Bpk. Akmal & Galuh</p>
                                </div>
                            </div>
                            <div class="relative">
                                <div class="bg-yellow-100 p-2 rounded-lg shadow-sm border border-yellow-300 w-40">
                                    <p class="font-medium text-sm text-yellow-800">Marbot & Muadzin</p>
                                    <p class="text-xs text-gray-500">Bpk. Subur</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>

</script>
@endsection
