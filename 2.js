
const checkJumlahIkan = (ikanSemula, jmlHariPerPeriode, jmlLahirPerPeriode, persenMatiPerPeriode, totalHari) => {
  // cari perputaran periodenya
  const perputaran = Math.floor(totalHari / jmlHariPerPeriode)
  console.log(perputaran, 'periode')
  let currentIkan = ikanSemula
  let hariKe = 0
  for (let i = 1; i <= perputaran; i++) {
    hariKe += jmlHariPerPeriode
    // hitung sisa ikan yang hidup => 94%% per periode
    const ikanMati = Math.ceil(currentIkan * persenMatiPerPeriode)
    currentIkan = currentIkan - ikanMati
    // hitung sisa ikan setelah melahirkan
    const ikanLahir = currentIkan * jmlLahirPerPeriode
    currentIkan = currentIkan + ikanLahir
    console.log('periode ke ' + i + ' hari ke -', hariKe, ',jumlah ikan mati =', ikanMati, ', ikan Lahir =', ikanLahir, ',jumlah ikan =', currentIkan)
  }
}

const ikanSemula = 1476
const jmlHariPerPeriode = 46
const jmlLahirPerPeriode = 5
const persenMatiPerPeriode = 6 / 100

const totalHari = 471

checkJumlahIkan(ikanSemula, jmlHariPerPeriode, jmlLahirPerPeriode, persenMatiPerPeriode, totalHari)
