<form method="POST" action="/pembayaran">
    @csrf
    <div class="form-group">
        <label for="id_pembayaran">ID Pembayaran</label>
        <input type="text" class="form-control" id="id_pembayaran" name="id_pembayaran">
    </div>
    <div class="form-group">
        <label for="nominal_pembayaran">Nominal Pembayaran</label>
        <input type="number" class="form-control" id="nominal_pembayaran" name="nominal_pembayaran">
    </div>
    <button type="submit" class="btn btn-primary">Bayar</button>
</form>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
