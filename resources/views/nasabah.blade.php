<x-layout>
    <!-- Main Content -->
    <div class="mb-6">
        <h1 class="font-bold text-3xl text-gray-900">
            Data Nasabah Bank Sampah Pelita Bangsa
        </h1>
    </div>
    <!-- Table -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-4">
            <div class="flex justify-between mb-4">
                <button id="tambahNasabahBtn" class="bg-primary text-white font-bold py-2 px-4 rounded-md hover:bg-green-600">
                    <span class="material-icons align-middle">add</span>
                    <span class="align-middle">Tambah Nasabah</span>
                </button>
            </div>
            <div>
                <input type="text" placeholder="Cari nama nasabah..." class="px-4 py-2 border border-gray-300 rounded-lg" />
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 divide-y divide-gray-200">
                <thead class="bg-hijau text-white">
                    <tr>
                        <th class="px-6 py-3 text-center text-sm font-bold uppercase tracking-wider border-2 border-gray-300">
                            No
                        </th>
                        <th class="px-6 py-3 text-center text-sm font-bold uppercase tracking-wider border-2 border-gray-300">
                            No. Induk
                        </th>
                        <th class="px-6 py-3 text-center text-sm font-bold uppercase tracking-wider border-2 border-gray-300">
                            Nama
                        </th>
                        <th class="px-6 py-3 text-center text-sm font-bold uppercase tracking-wider border-2 border-gray-300">
                            Alamat
                        </th>
                        <th class="px-6 py-3 text-center text-sm font-bold uppercase tracking-wider border-2 border-gray-300">
                            Jumlah Orang/KK
                        </th>
                        <th class="px-6 py-3 text-center text-sm font-bold uppercase tracking-wider border-2 border-gray-300">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white" id="nasabahTableBody">
                    <!-- Data will be appended here by JS -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- MODAL TAMBAH NASABAH -->
    <div id="modal" class="fixed z-50 inset-0 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all max-w-lg w-full p-6">
                <div class="flex justify-between items-center pb-3">
                    <h3 class="text-2xl leading-6 font-bold text-primary">Tambah Nasabah</h3>
                    <button id="closeModalBtn" class="text-gray-400 hover:text-gray-500">
                        <span class="material-icons">close</span>
                    </button>
                </div>
                <form id="tambahNasabahForm">
                    <div class="mb-4">
                        <label for="noInduk" class="block text-sm font-medium text-gray-700">No. Induk</label>
                        <input type="text" id="noInduk" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-hijau focus:border-hijau sm:text-sm" />
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" id="nama" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-hijau focus:border-hijau sm:text-sm" />
                    </div>
                    <div class="mb-4">
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <input type="text" id="alamat" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-hijau focus:border-hijau sm:text-sm" />
                    </div>
                    <div class="mb-4">
                        <label for="jumlahOrang" class="block text-sm font-medium text-gray-700">Jumlah Orang/KK</label>
                        <input type="text" id="jumlahOrang" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-hijau focus:border-hijau sm:text-sm" />
                    </div>
                    <div class="flex justify-end">
                        <button type="button" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg mr-2 hover:bg-gray-400" id="closeModalBtn2">Cancel</button>
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-700">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- MODAL EDIT NASABAH -->
    <div id="editModal" class="fixed z-50 inset-0 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all max-w-lg w-full p-6">
                <div class="flex justify-between items-center pb-3">
                    <h3 class="text-2xl leading-6 font-bold text-primary">Edit Nasabah</h3>
                    <button id="closeEditModalBtn" class="text-gray-400 hover:text-gray-500">
                        <span class="material-icons">close</span>
                    </button>
                </div>
                <form id="editNasabahForm">
                    <input type="hidden" id="editNasabahId">
                    <div class="mb-4">
                        <label for="editNoInduk" class="block text-sm font-medium text-gray-700">No. Induk</label>
                        <input type="text" id="editNoInduk" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-hijau focus:border-hijau sm:text-sm" />
                    </div>
                    <div class="mb-4">
                        <label for="editNama" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" id="editNama" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-hijau focus:border-hijau sm:text-sm" />
                    </div>
                    <div class="mb-4">
                        <label for="editAlamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <input type="text" id="editAlamat" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-hijau focus:border-hijau sm:text-sm" />
                    </div>
                    <div class="mb-4">
                        <label for="editJumlahOrang" class="block text-sm font-medium text-gray-700">Jumlah Orang/KK</label>
                        <input type="text" id="editJumlahOrang" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-hijau focus:border-hijau sm:text-sm" />
                    </div>
                    <div class="flex justify-end">
                        <button type="button" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg mr-2 hover:bg-gray-400" id="closeEditModalBtn2">Cancel</button>
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-700">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- MODAL HAPUS NASABAH -->
    <div id="hapusModal" class="fixed z-50 inset-0 overflow-y-auto hidden">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all max-w-lg w-full p-6">
                <div class="flex justify-between items-center pb-3">
                    <h3 class="text-2xl leading-6 font-bold text-primary">Hapus Nasabah</h3>
                    <button id="closeHapusModalBtn" class="text-gray-400 hover:text-gray-500">
                        <span class="material-icons">close</span>
                    </button>
                </div>
                <form id="hapusNasabahForm">
                    <input type="hidden" id="hapusNasabahId">
                    <p>Apakah Anda yakin ingin menghapus nasabah ini?</p>
                    <div class="flex justify-end mt-4">
                        <button type="button" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg mr-2 hover:bg-gray-400" id="closeHapusModalBtn2">Cancel</button>
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-700">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        // AJAX Setup for CSRF
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        // Load Data Nasabah
        function loadNasabah() {
            $.ajax({
                url: '/show-data-nasabah',
                method: 'GET',
                success: function(data) {
                    let tableBody = $('#nasabahTableBody');
                    tableBody.empty();
                    data.forEach((nasabah, index) => {
                        tableBody.append(`
                            <tr>
                                <td class="px-6 py-4 text-center border-2 border-gray-300">${index + 1}</td>
                                <td class="px-6 py-4 text-center border-2 border-gray-300">${nasabah.no_induk}</td>
                                <td class="px-6 py-4 text-center border-2 border-gray-300">${nasabah.nama}</td>
                                <td class="px-6 py-4 text-center border-2 border-gray-300">${nasabah.alamat}</td>
                                <td class="px-6 py-4 text-center border-2 border-gray-300">${nasabah.jumlah_orang_kk}</td>
                                <td class="px-6 py-4 text-center border-2 border-gray-300">
                                    <button class="text-yellow-600 hover:text-yellow-900 mr-2" onclick="editNasabah(${nasabah.id})">
                                        <i class="fas fa-edit bg-yellow-500 p-2 text-white rounded-md"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-900" onclick="hapusNasabah(${nasabah.id})">
                                        <i class="fas fa-trash bg-red-500 p-2 text-white rounded-md"></i>
                                    </button>
                                </td>
                            </tr>
                        `);
                    });
                }
            });
        }

        // Document Ready
        $(document).ready(function() {
            loadNasabah();

            $('#tambahNasabahBtn').on('click', function() {
                $('#modal').removeClass('hidden');
            });

            $('#closeModalBtn, #closeModalBtn2').on('click', function() {
                $('#modal').addClass('hidden');
            });

            $('#tambahNasabahForm').on('submit', function(e) {
                e.preventDefault();
                let noInduk = $('#noInduk').val();
                let nama = $('#nama').val();
                let alamat = $('#alamat').val();
                let jumlahOrang = $('#jumlahOrang').val();

                $.ajax({
                    url: '/nasabah',
                    method: 'POST',
                    data: {
                        no_induk: noInduk,
                        nama: nama,
                        alamat: alamat,
                        jumlah_orang_kk: jumlahOrang
                    },
                    success: function() {
                        $('#modal').addClass('hidden');
                        Swal.fire({
                            title: 'Success!',
                            text: 'Nasabah berhasil ditambahkan',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        loadNasabah();
                    },
                    error: function() {
                        alert('Error adding nasabah');
                    }
                });
            });

            $('#editNasabahForm').on('submit', function(e) {
                e.preventDefault();
                let id = $('#editNasabahId').val();
                let noInduk = $('#editNoInduk').val();
                let nama = $('#editNama').val();
                let alamat = $('#editAlamat').val();
                let jumlahOrang = $('#editJumlahOrang').val();

                $.ajax({
                    url: `/nasabah/${id}`,
                    method: 'PUT',
                    data: {
                        no_induk: noInduk,
                        nama: nama,
                        alamat: alamat,
                        jumlah_orang_kk: jumlahOrang
                    },
                    success: function() {
                        $('#editModal').addClass('hidden');
                        Swal.fire({
                            title: 'Success!',
                            text: 'Nasabah berhasil diupdate',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        loadNasabah();
                    },
                    error: function() {
                        alert('Error updating nasabah');
                    }
                });
            });


            $('#hapusNasabahForm').on('submit', function(e) {
                e.preventDefault();
                let id = $('#hapusNasabahId').val();

                $.ajax({
                    url: `/nasabah/${id}`,
                    method: 'DELETE',
                    success: function() {
                        $('#hapusModal').addClass('hidden');
                        Swal.fire({
                            title: 'Success!',
                            text: 'Nasabah berhasil dihapus',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        loadNasabah();
                    },
                    error: function() {
                        alert('Error deleting nasabah');
                    }
                });
            });

            $('#closeEditModalBtn, #closeEditModalBtn2').on('click', function() {
                $('#editModal').addClass('hidden');
            });

            $('#closeHapusModalBtn, #closeHapusModalBtn2').on('click', function() {
                $('#hapusModal').addClass('hidden');
            });


        });

        
        function editNasabah(id) {
                $('#editModal').addClass('hidden');
                $.ajax({
                    url: `/nasabah/${id}`,
                    method: 'GET',
                    success: function(nasabah) {
                        $('#editNasabahId').val(nasabah.id);
                        $('#editNoInduk').val(nasabah.no_induk);
                        $('#editNama').val(nasabah.nama);
                        $('#editAlamat').val(nasabah.alamat);
                        $('#editJumlahOrang').val(nasabah.jumlah_orang_kk);
                        $('#editModal').removeClass('hidden');
                    }
                });
            }


        function hapusNasabah(id) {
            $('#hapusNasabahId').val(id);
            $('#hapusModal').removeClass('hidden');
        }

        function lihatDetail(id) {
            $.ajax({
                url: `/nasabah/${id}`,
                method: 'GET',
                success: function(nasabah) {
                    $('#noInduk').val(nasabah.no_induk);
                    $('#nama').val(nasabah.nama);
                    $('#alamat').val(nasabah.alamat);
                    $('#jumlahOrang').val(nasabah.jumlah_orang_kk);
                }
            });
        }
    </script>
</x-layout>