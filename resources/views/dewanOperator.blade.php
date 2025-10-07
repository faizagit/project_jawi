<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Juri Pertandingan Silat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            box-sizing: border-box;
        }
    </style>
</head>
<body class="bg-gray-100 p-3 h-screen overflow-hidden">
    <div class="max-w-full mx-auto h-full flex flex-col">
        <!-- Header -->
        <div class="text-center mb-4">
            <h1 class="text-2xl font-bold text-gray-800 mb-3">Rekap Juri Pertandingan Silat</h1>
            
            <!-- Data Atlet Header -->
            <div class="grid grid-cols-2 gap-4 max-w-3xl mx-auto">
                <!-- Tim Biru -->
                <div class="bg-blue-50 rounded-lg p-3 border-2 border-blue-200">
                    <h2 class="text-lg font-bold text-blue-600 mb-1">TIM BIRU</h2>
                    <div class="space-y-1">
                        <p class="text-sm font-semibold text-gray-800">Ahmad Rizki</p>
                        <p class="text-xs text-gray-600">Kontingen Jawa Barat</p>
                    </div>
                </div>
                
                <!-- Tim Merah -->
                <div class="bg-red-50 rounded-lg p-3 border-2 border-red-200">
                    <h2 class="text-lg font-bold text-red-600 mb-1">TIM MERAH</h2>
                    <div class="space-y-1">
                        <p class="text-sm font-semibold text-gray-800">Budi Santoso</p>
                        <p class="text-xs text-gray-600">Kontingen DKI Jakarta</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grid Layout untuk Tabel -->
        <div class="flex-1 grid grid-cols-4 gap-3">
            <!-- Kolom Kiri - Tabel Input -->
            <div class="col-span-3 flex flex-col gap-3">
                <!-- Tabel Input Juri -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="bg-gray-50 px-3 py-2 border-b">
                        <h2 class="text-lg font-semibold text-gray-800">Rekap Juri</h2>
                    </div>
                    <div class="p-3">
                        <table class="w-full border-collapse border border-gray-300 text-sm">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-2 py-1 text-left text-xs">Kategori</th>
                                    <th class="border border-gray-300 px-2 py-1 text-center text-xs">J1</th>
                                    <th class="border border-gray-300 px-2 py-1 text-center text-xs">J2</th>
                                    <th class="border border-gray-300 px-2 py-1 text-center text-xs">J3</th>
                                    <th class="border border-gray-300 px-2 py-1 text-center text-xs">J1</th>
                                    <th class="border border-gray-300 px-2 py-1 text-center text-xs">J2</th>
                                    <th class="border border-gray-300 px-2 py-1 text-center text-xs">J3</th>
                                </tr>
                                <tr class="bg-gray-50">
                                    <th class="border border-gray-300 px-2 py-1 text-left"></th>
                                    <th class="border border-gray-300 px-2 py-1 text-center text-blue-600 font-bold text-xs" colspan="3">TIM BIRU</th>
                                    <th class="border border-gray-300 px-2 py-1 text-center text-red-600 font-bold text-xs" colspan="3">TIM MERAH</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-2 py-1 font-medium text-xs">Pukulan</td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="biruPukul1" min="0" max="10" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="biruPukul2" min="0" max="10" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="biruPukul3" min="0" max="10" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="merahPukul1" min="0" max="10" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="merahPukul2" min="0" max="10" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="merahPukul3" min="0" max="10" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="border border-gray-300 px-2 py-1 font-medium text-xs">Tendangan</td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="biruTendang1" min="0" max="10" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="biruTendang2" min="0" max="10" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="biruTendang3" min="0" max="10" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="merahTendang1" min="0" max="10" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="merahTendang2" min="0" max="10" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="merahTendang3" min="0" max="10" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Tabel Input Dewan Juri -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="bg-gray-50 px-3 py-2 border-b">
                        <h2 class="text-lg font-semibold text-gray-800">Rekap Dewan Juri</h2>
                    </div>
                    <div class="p-3">
                        <table class="w-full border-collapse border border-gray-300 text-sm">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-2 py-1 text-left text-xs">Kategori</th>
                                    <th class="border border-gray-300 px-2 py-1 text-center text-blue-600 font-bold text-xs">TIM BIRU</th>
                                    <th class="border border-gray-300 px-2 py-1 text-center text-red-600 font-bold text-xs">TIM MERAH</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-2 py-1 font-medium text-xs">Jatuhan</td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="biruJatuh" min="0" max="5" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="merahJatuh" min="0" max="5" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="border border-gray-300 px-2 py-1 font-medium text-xs">Binaan</td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled  type="number" id="biruBina" min="0" max="5" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="9">
                                    </td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="merahBina" min="0" max="5" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-2 py-1 font-medium text-xs">Teguran</td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="biruTegur" min="0" max="3" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="merahTegur" min="0" max="3" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                </tr>
                                <tr class="bg-gray-50">
                                    <td class="border border-gray-300 px-2 py-1 font-medium text-xs">Peringatan</td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="biruPeringat" min="0" max="3" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                    <td class="border border-gray-300 px-1 py-1">
                                        <input disabled type="number" id="merahPeringat" min="0" max="3" class="w-full px-1 py-1 border rounded text-center text-xs" placeholder="0">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan - Total Skor -->
            <div class="bg-white rounded-lg shadow overflow-hidden h-fit">
                <div class="bg-gray-50 px-3 py-2 border-b">
                    <h2 class="text-lg font-semibold text-gray-800">Total Skor Akhir</h2>
                </div>
                <div class="p-3 flex items-center" style="padding-top: 120px; padding-bottom:120px">
                    <table class="w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-green-100">
                                <th class="border border-gray-300 px-2 py-2 text-center text-blue-600 font-bold text-sm">TIM BIRU</th>
                                <th class="border border-gray-300 px-2 py-2 text-center text-red-600 font-bold text-sm">TIM MERAH</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 px-2 py-8 text-center text-blue-600 font-bold text-4xl" id="totalBiru">0</td>
                                <td class="border border-gray-300 px-2 py-8 text-center text-red-600 font-bold text-4xl" id="totalMerah">0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Tombol -->
        {{-- <div class="text-center mt-3">
            <button onclick="resetSemua()" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded text-sm">
                Reset Semua
            </button>
        </div> --}}
    </div>

    <script>
        // Auto calculate when input changes
        document.addEventListener('input', function(e) {
            if (e.target.type === 'number') {
                hitungTotal();
            }
        });

        function hitungTotal() {
            // Ambil nilai input Tim Merah
            const merahPukul1 = parseInt(document.getElementById('merahPukul1').value) || 0;
            const merahPukul2 = parseInt(document.getElementById('merahPukul2').value) || 0;
            const merahPukul3 = parseInt(document.getElementById('merahPukul3').value) || 0;
            const merahTendang1 = parseInt(document.getElementById('merahTendang1').value) || 0;
            const merahTendang2 = parseInt(document.getElementById('merahTendang2').value) || 0;
            const merahTendang3 = parseInt(document.getElementById('merahTendang3').value) || 0;
            const merahJatuh = parseInt(document.getElementById('merahJatuh').value) || 0;
            const merahBina = parseInt(document.getElementById('merahBina').value) || 0;
            const merahTegur = parseInt(document.getElementById('merahTegur').value) || 0;
            const merahPeringat = parseInt(document.getElementById('merahPeringat').value) || 0;

            // Ambil nilai input Tim Biru
            const biruPukul1 = parseInt(document.getElementById('biruPukul1').value) || 0;
            const biruPukul2 = parseInt(document.getElementById('biruPukul2').value) || 0;
            const biruPukul3 = parseInt(document.getElementById('biruPukul3').value) || 0;
            const biruTendang1 = parseInt(document.getElementById('biruTendang1').value) || 0;
            const biruTendang2 = parseInt(document.getElementById('biruTendang2').value) || 0;
            const biruTendang3 = parseInt(document.getElementById('biruTendang3').value) || 0;
            const biruJatuh = parseInt(document.getElementById('biruJatuh').value) || 0;
            const biruBina = parseInt(document.getElementById('biruBina').value) || 0;
            const biruTegur = parseInt(document.getElementById('biruTegur').value) || 0;
            const biruPeringat = parseInt(document.getElementById('biruPeringat').value) || 0;

            // Hitung total skor
            const totalMerah = merahPukul1 + merahPukul2 + merahPukul3 + merahTendang1 + merahTendang2 + merahTendang3 + merahJatuh + merahBina - merahTegur - (merahPeringat * 2);
            const totalBiru = biruPukul1 + biruPukul2 + biruPukul3 + biruTendang1 + biruTendang2 + biruTendang3 + biruJatuh + biruBina - biruTegur - (biruPeringat * 2);

            // Update tampilan total
            document.getElementById('totalMerah').textContent = Math.max(0, totalMerah);
            document.getElementById('totalBiru').textContent = Math.max(0, totalBiru);
        }

        function resetSemua() {
            if (confirm('Yakin ingin mereset semua data?')) {
                const inputs = document.querySelectorAll('input[type="number"]');
                inputs.forEach(input => input.value = '');
                hitungTotal();
            }
        }

        // Initialize
        hitungTotal();
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'98acf4ccc4cc8982',t:'MTc1OTgzNTQ3MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
