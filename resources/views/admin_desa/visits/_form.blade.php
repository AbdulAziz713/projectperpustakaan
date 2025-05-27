@csrf
<div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" name="name" id="name" value="{{ old('name', $visit->name ?? '') }}" required class="form-control" placeholder="Masukkan nama">
</div>

<div class="mb-3">
    <label for="date" class="form-label">Tanggal</label>
    <input type="date" name="date" id="date" value="{{ old('date', $visit->date ?? '') }}" required class="form-control">
</div>

<div class="mb-3">
    <label for="enter_at" class="form-label">Waktu Masuk</label>
    <input type="time" name="enter_at" id="enter_at" value="{{ old('enter_at', $visit->enter_at ?? '') }}" required class="form-control">
</div>

<div class="mb-3">
    <label for="out_at" class="form-label">Waktu Keluar</label>
    <input type="time" name="out_at" id="out_at" value="{{ old('out_at', $visit->out_at ?? '') }}" class="form-control">
</div>

@push('scripts')
<!-- SweetAlert2 & Bootstrap Icons (CDN jika belum di-include) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<script>
document.addEventListener('DOMContentLoaded', function () {
    const deleteForms = document.querySelectorAll('.delete-form');
    deleteForms.forEach(function(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Yakin?',
                text: "Tindakan ini tidak bisa dibatalkan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#0d6efd',
                cancelButtonColor: '#dc3545',
                confirmButtonText: 'Ya, lanjut!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});
</script>
@endpush
