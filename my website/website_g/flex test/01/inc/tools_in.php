
  <style>
   .txt {
    background:rgba(76, 169, 199, 0.62);
    font-size: 2rem;
   }
   .txt_email {
    font-size: 2rem;
   }
  </style>

<div id="doc">0</div>
<textarea name="" id="textarea" class="txt" placeholder="not more then 100 char" onkeydown="weg()" cols="40" rows="12"></textarea>
<input type="button" onclick="lookUp()" value="find text">
<div id="doc1"></div>
<script>
let reg_txt = /[a-zA-Z0-9]+@[a-z ]{2,9}\.[a-z]{2,6}/gi
let html = "";

function weg () {

let txt_area = document.getElementById("textarea");
if(txt_area.value.length  > 100){
 txt_area.value = "";

}
document.getElementById("doc").innerHTML =  txt_area.value.length
}
  let  arr = [];
function lookUp () {

  let index_doc = document.getElementById('doc1').children.length;


  if(index_doc >= 10){
  document.getElementById('doc1').innerHTML = ""
  }
let txt = document.getElementById("textarea").value
let regex = txt.match(reg_txt)
if(regex){
for(let i = 0; i < regex.length; i++){
if(arr.indexOf(regex[i]) == -1){
arr.push(regex[i]);

let doc1 = document.getElementById('doc1').innerHTML += "<p class='txt_email'>" + arr[arr.length -1] + "<br></p>"

}




}
}

}


</script>
