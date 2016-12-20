<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="witdh=device-witdh,initial-scale=1" />
    
    <script>
        window.onload=function(){
            var frm_pinjam = document.getElementById('form_pinjam');
            var frm_anggota = document.getElementById('form_anggota');
            var frm_buku = document.getElementById('form_buku');
            
            var mn_pinjam = document.getElementById('mn_pinjam');
            var mn_anggota = document.getElementById('mn_anggota');
            var mn_buku = document.getElementById('mn_buku');
            
            function hideForm(){
                frm_pinjam.style.display = 'none';
                frm_anggota.style.display = 'none';
                frm_buku.style.display = 'none';
            }
            
            mn_pinjam.addEventListener('click', function(){
                hideForm();
                
                frm_pinjam.style.display = 'initial'; 
            });
            mn_anggota.addEventListener('click', function (){
                hideForm();
                
                frm_anggota.style.display = 'initial'; 
            });
            mn_buku.addEventListener('click', function (){
                hideForm();
                
                frm_buku.style.display = '';
            });
        }
    </script>

	<title>Egi Achmad Fauzi</title>
</head>

<body>
<div id="menu">
    <a id="mn_pinjam" href="#">Pinjam</a> /
    <a id="mn_anggota" href="#">Anggota</a> /
    <a id="mn_buku" href="#">Buku</a>
</div><br />
<div id="form_pinjam">
    No Pinjam <input type="text" id="no_pinjam" />
    <br /><br />
    Id Anggota <select id="id_anggota">
        <option selected="">Pilih Id Anggota</option>
    </select>
    <br /><br />
    No Buku <select id="no_buku">
        <option selected="">Pilih No Buku</option>
    </select>
    <br /><br />
    Tanggal Pinjam <input type="date" id="tgl_pinjam" />
    <br /><br />
    Tanggal Kembali <input type="date" id="tgl_kembali" />
    <br /><br />
    <button id="simpan">SIMPAN</button>
</div>
<div id="form_anggota" style="display: none">
    Id Anggota <input type="text" id="setid_anggota" />
    <br /><br />
    Nama Anggota <input type="text" id="nm_anggota" />
    <br /><br />
    Alamat <br />
    <textarea id="alamat_anggota" rows="4"></textarea>
    <br /><br />
    Kota <input type="text" id="kota_anggota" />
    <br /><br />
    No. Telepon <input type="text" id="tlp_anggota" />
    <br /><br />
    Tgl. Lahir <input type="date" id="tglLahir_anggota" />
    <br /><br />
    <button id="simpan_anggota">SIMPAN</button>
</div>
<div id="form_buku" style="display: none;">
    No. Buku <input type="text" id="setNo_buku" />
    <br /><br />
    Judul Buku <input type="text" id="judul_buku" />
    <br /><br />
    Pengarang Buku <input type="text" id="pengarang_buku" />
    <br /><br />
    Tahun Penerbit <input type="date" id="thn_penerbit" />
    <br /><br />
    Jenis Buku <input type="text" id="jneis_buku" />
    <br /><br />
    Status Buku <input type="text" id="status_buku" />
    <br /><br />
    <button id="simpan_buku">SIMPAN</button>
</div>


</body>
</html>