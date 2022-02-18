DEFFIN ACHMAD DIFA  1800912
AZIS FAISAL MUHARAM 1807262

ADMIN : 
    username : admin
    password : admin

SISWA :
   username : deffinad
   password : deffinad

Akses : http://localhost/PPDB/rest_client

BATCH 3 :
 * Yang Sudah Dikerjakan :
	- Rest Server dan Rest Client
	- Login (sebagai admin atau user)
	- Registrasi User/Siswa
	- Halaman Admin : Statistika Deskriptif(datatables,grafik)
	- Halaman Siswa : Grafik Nilai, Diterima/Tidak Diterima
	- SAW

Cara Kerja Aplikasi :
  1. Login terlebih dahulu, jika sebagai admin akan diarahkan ke halaman admin, dan sebaliknya jika siswa akan diarahkan ke halaman siswa
  2. Registrasi jika belom mempunyai akun(siswa)
  3. Pada halaman siswa yang baru daftar, aplikasi ini mengarahkan untuk mengisi daftar nilai.
     Jika sudah terisi, di halaman awal akan muncul alert "menunggu keputusan dari admin" dan akan muncul grafik nilai yang sudah di inputkan tadi.
     Siswa juga bisa mengedit nilai jika terjadi kesalahan penginputan, edit profile dan mengganti password
  4. Lalu pada halaman Admin, terdapat statistika deskriptif. dan ada button "lihat hasil seleksi", dan jika tombol di tekan, akan muncul siapa saja yang diterima dan tidak,
     dan akan muncul grafik(Pendaftar yang diterima dan tidak);
  5. Logout