//buat fungsi distruktif
function sortSort(...arr){
    for(r of arr) {
        for([k,v] of r.entries()){
            //proses swap 
            let temp = 0;
            if(r[k] < r[k - 1]) {
                let temp = r[k];
                r[k] = r[k - 1];
                r[k- 1] = temp;
                temp = k;
                
            }
            
            
        }
        console.log(r)
    }
}

sortSort(["e","f","g"],
    ["a","b","c","d","e"]
    )