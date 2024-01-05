<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Barcode</title>
    <style>
        .barcode-style{
            text-align: center;
            border: 1px solid;
        }
    </style>
</head>
<body>
    <table width="100%">
        <tr>
            @foreach($dataproduk as $key => $produk)
            <td class="barcode-style">
                <p style="font-size:8px">{{ $produk->nama_produk }} - Rp. {{ format_uang($produk->harga_jual) }}</p>
                <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($produk->kode_produk, 'C39') }}" alt="{{ $produk->kode_produk }}"  width="150" height="60"><br>
                <p style="margin-top: 0.3rem; margin-bottom: 0.3rem">{{$produk->kode_produk}}</p>
            </td>
                @if($no++ % 4 == 0)
                </tr><tr>
                @endif
            @endforeach
        </tr>
    </table>
</body>
</html>