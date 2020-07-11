const cetakGambar = (n) => {
  // check kalau bukan number maka return false
  if (typeof (n) !== 'number') return false
  //   check kalau genap maka return false
  if (n % 2 === 0) return false

  for (let i = 1; i <= n; i++) {
    let temp = ''
    for (let j = 1; j <= n; j++) {
      if (i % 2 === 0) {
        if (j % 2 === 0) {
          temp += '='
        } else {
          temp += '*'
        }
      } else {
        if (j % 2 === 0) {
          temp += '*'
        } else {
          temp += '='
        }
      }
    }
    console.log(temp)
  }
}

cetakGambar(5)
