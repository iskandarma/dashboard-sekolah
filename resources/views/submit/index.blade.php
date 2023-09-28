<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('style/styles.css') }}" />
  </head>
  <body>
    <h1>Request Form</h1>
    <p>Silahkan Diisi Form untuk Request Barang ke Sarpras</p>
    <form method="post" action="{{ url('submits') }}">
        @csrf
        <fieldset>
            <label for="first-name">Nama : <input id="name" name="name" type="text" placeholder="contoh : Andi" required /></label>
            <label for="email">Email : <input id="email" name="email" type="email" placeholder="contoh : andi@gmail.com" required /></label>
            <label for="referrer">Barang :
                <select id="id_barang" name="id_barang" class="form-control @error('barang') is-invalid @enderror">
                    <option value="">- Pilih -</option>  
                    @foreach ($barangs as $item)
                        <option value="{{ $item->id }}" {{ old('barang')==$item->id ? 'selected' : null }}>{{ $item->nama_barang }}</option>  
                    @endforeach
                </select>
                Jumlah barang yang dipilih = <span id="jumlah"></span>
            </label>
            <label>Jumlah : <input id="inputjumlah" name="inputjumlah" type="number" placeholder="contoh : andi@gmail.com" required /></label>
        </fieldset>
        
      <input type="submit" value="Submit" />
    </form>

    <script>
        $(document).ready(function(){
            $('#id_barang').change(function() {  // Ketika user mengganti atau memilih data barang
                jQuery.ajax({
                    method: 'get',
                    url: '/jumlahbarang/' + this.value,
                    dataType: 'json',
                }).done(function(response) {
                    $('#jumlah').html(response.stok)
                    console.log(response);
                });
            })
        })
    </script>
  
</body>
</html>