let mobil = {
  "warna-badan": "merah",
  "nomor-polisi": "BK1234AB" 
};
let jadwal = { 
  platform: 34,
  telah_berangkat: false,
  asal: {
    kode_kota: "MDN",
    nama_kota: "Medan",
    waktu: "2013-12-29 14:00"
  },
  tujuan: { 
    kode_kota: "JKT",
    nama_kota: "Jakarta",
    waktu: "2013-12-29 17.30"
  }
}

// muhammad rafli ramadhan - 1301200204
console.log(mobil["warna-badan"]);
console.log(jadwal.platform);
console.log(jadwal.nomor_kursi);
// ["jumlah-roda"] undifined

// menambah element pada object
mobil["jumlah-roda"] = 4;
mobil.bahan_bakar = "Bensin";
console.log(mobil);