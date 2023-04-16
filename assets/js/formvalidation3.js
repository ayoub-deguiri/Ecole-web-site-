// var span de validatio
var cnom = document.querySelector("#cnom");

var ctel = document.querySelector("#ctel");
var cniveau = document.querySelector("#cniveau");
var cchoix = document.querySelector("#cchoix");



//var input
var nom = document.querySelector("#nom");


var tel = document.querySelector("#tel");
// radio button de niveau
var r4 = document.querySelector("#r4");
var r3 = document.querySelector("#r3");
var r2 = document.querySelector("#r2");
var r1 = document.querySelector("#r1");

var choix = document.querySelector("#choix");


// declare var test for each input for checking that all inputs are not empty
var test1 =
   (test2 =
      test3 =
      test4 =
      test5 =
      test6 =
      test7 =
      test8 =
      test9 =
      false);
//var  =false

nom.addEventListener("keyup", function () {
   if (nom.value != "") {
      cnom.innerHTML = "";
      test1 = true;
   } else {
      cnom.innerHTML = "*";
      test1 = false;
   }
});

tel.addEventListener("keyup", function () {
   if (tel.value != "") {
      ctel.innerHTML = "";
      test4 = true;
   } else {
      ctel.innerHTML = "*";
      test4 = false;
   }
});

r4.addEventListener("change", function () {
   test5 = false;
   if (r4.checked == true) {
      cniveau.innerHTML = "";
      cchoix.innerHTML = "";
      test5 = true;
   }
});

r3.addEventListener("change", function () {
   test5 = false;
   if (r3.checked == true) {
      cniveau.innerHTML = "";
      cchoix.innerHTML = "";
      test5 = true;
   }
});
r2.addEventListener("change", function () {
   test5 = false;
   if (r2.checked == true) {
      cniveau.innerHTML = "";
      cchoix.innerHTML = "";
      test5 = true;
   }
});

r1.addEventListener("change", function () {
   test5 = false;
   if (r1.checked == true) {
      cniveau.innerHTML = "";
      cchoix.innerHTML = "";
      test5 = true;
   }
});

function checkform() {
   var etat = true;

   var response = grecaptcha.getResponse();
   if (response.length == 0) {
      beautyToast.error({
         title: "Error",
         message: "please verify you are humann!",
         timeout: 3000,
      });

      etat = false;
   }

   if (
      test1 == false ||
      test4 == false ||
      test5 == false 
   ) {
      beautyToast.error({
         title: "Error",
         message: "touts les champs sont obligatoire !",
      });
      etat = false;
   }

   return etat;
}
