window.onload = function(){

alert(
"Welcome to Haikal Fadhillah Mukti Semester grade calculator"
);

}

function hitungNilaiAkhir(tugas, uts, uas){

return (tugas*0.3)+(uts*0.3)+(uas*0.4);

}

function tentukanGrade(nilai){

if(nilai>=80){
return "A";
}
else if(nilai>=70){
return "B";
}
else if(nilai>=60){
return "C";
}
else if(nilai>=50){
return "D";
}
else{
return "E";
}

}

function validasiInput(nilai,nama){

if(nilai.trim()===""){
return nama + " harus diisi";
}

if(isNaN(nilai)){
return nama + " harus berupa angka";
}

if(nilai<0 || nilai>100){
return nama + " harus berada pada rentang 0 - 100";
}

return null;

}

document
.getElementById("btnHitung")
.addEventListener("click",function(){

const tugas=document.getElementById("tugas").value;
const uts=document.getElementById("uts").value;
const uas=document.getElementById("uas").value;

console.log("Input :",tugas,uts,uas);

let error=
validasiInput(tugas,"Nilai Tugas") ||
validasiInput(uts,"Nilai UTS") ||
validasiInput(uas,"Nilai UAS");

const errorBox=document.getElementById("error");

if(error){

errorBox.style.display="block";
errorBox.innerText=error;

document.getElementById("hasil").style.display="none";

return;

}

errorBox.style.display="none";

let nilaiAkhir=
hitungNilaiAkhir(
Number(tugas),
Number(uts),
Number(uas)
);

let grade=
tentukanGrade(nilaiAkhir);

console.log(
"Nilai Akhir : ",
nilaiAkhir,
" Grade : ",
grade
);

const hasil=document.getElementById("hasil");

hasil.style.display="block";

hasil.className="hasil grade-"+grade;

document.getElementById("nilaiAkhir").innerHTML=
nilaiAkhir.toFixed(2);

document.getElementById("grade").innerHTML=
"Grade "+grade;

});