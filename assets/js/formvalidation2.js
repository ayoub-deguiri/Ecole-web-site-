   // var span de validatio 
   var cnom =document.querySelector('#cnom')
   var ccin =document.querySelector('#ccin')
   var cadresse =document.querySelector('#cadresse')
   var ctel =document.querySelector('#ctel')
   var cniveau =document.querySelector('#cniveau')
   var cchoix =document.querySelector('#cchoix')
   var cemail =document.querySelector('#cemail')
   var cfile1 =document.querySelector('#cfile1')
   var cfile2 =document.querySelector('#cfile2')
   var cfile3 =document.querySelector('#cfile3')
   var cfile4 =document.querySelector('#cfile4')
   var cfile5 =document.querySelector('#cfile5')


   //var input 
   var nom =document.querySelector('#nom')
  
   var cin =document.querySelector('#cin')
   var Adresse =document.querySelector('#Adresse')
   var tel =document.querySelector('#tel')
  // radio button de niveau
   var r4 =document.querySelector('#r4')
   var r3 =document.querySelector('#r3')
   var r2 =document.querySelector('#r2')

   var choix =document.querySelector('#choix')
   var email =document.querySelector('#email')
   var file1 =document.querySelector('#file-1')
   var file2 =document.querySelector('#file-2')
   var file3 =document.querySelector('#file-3')
   var file4 =document.querySelector('#file-4')
   var file5 =document.querySelector('#file-5')
   

   // declare var test for each input for checking that all inputs are not empty
   var test1=test2=test3=test4=test5=test6=test7 =test8=test9=test10=test11=test12 =false
   //var  =false

   nom.addEventListener("keyup", function(){
      if(nom.value != ""){
         cnom.innerHTML =""
         test1 =true
      }
      else{
         cnom.innerHTML = "*"
         test1 =false
      }
   })

   cin.addEventListener("keyup", function(){
     
      if(cin.value != ""){
         ccin.innerHTML =""
         test2 =true
      }
      else{
         ccin.innerHTML = "*"
         test2 =false
      }
   })

   Adresse.addEventListener("keyup", function(){
     
     if(Adresse.value != ""){
        cadresse.innerHTML =""
        test3 =true
     }
     else{
      cadresse.innerHTML = "*"
        test3 =false
     }
  })

  tel.addEventListener("keyup", function(){
     
     if(tel.value != ""){
        ctel.innerHTML =""
        test4 =true
     }
     else{
      ctel.innerHTML = "*"
        test4 =false
     }
  })

  r4.addEventListener("change", function(){
      test5 =false
     if(r4.checked == true){
        cniveau.innerHTML =""
        cchoix.innerHTML =""
        test5 =true
     }
     
   
  })

  r3.addEventListener("change", function(){
   test5 =false
     if(r3.checked == true){
        cniveau.innerHTML =""
        cchoix.innerHTML =""
        test5 =true
     }
   
  })
  r2.addEventListener("change", function(){
    test5 =false
      if(r2.checked == true){
         cniveau.innerHTML =""
         cchoix.innerHTML =""
         test5 =true
      }
    
   })

   email.addEventListener("keyup", function(){

      if(email.value != ''){
         cemail.innerHTML =""
         test7 =true
      }
      else{
         cemail.innerHTML ="*"
         test7 =false
      }

   })
      file1.addEventListener("change", function(){
        
      if(file1.value != ''){
         cfile1.innerHTML =""
         test8 =true
      }
      else{
         cfile1.innerHTML ="*"
         test8 =false
      }

      })

      file2.addEventListener("change", function(){
        
        if(file2.value != ''){
           cfile2.innerHTML =""
           test9 =true
        }
        else{
           cfile2.innerHTML ="*"
           test9 =false
        }
  
        })
        file3.addEventListener("change", function(){
        
        if(file3.value != ''){
           cfile3.innerHTML =""
           test10 =true
        }
        else{
           cfile3.innerHTML ="*"
           test10 =false
        }
  
        })
        file4.addEventListener("change", function(){
        
        if(file4.value != ''){
           cfile4.innerHTML =""
           test11=true
        }
        else{
           cfile4.innerHTML ="*"
           test11 =false
        }
  
        })

   function checkform()
   {
      var  etat =true;
      var check  =document.querySelector('#check')
    if(test1 ==false || test2==false || test3==false || test4==false || test5==false  || test7==false 
    || test8==false || test9==false || test10 ==false || test11 ==false )
    {
      check.innerHTML ='touts les champs sont obligatoire !'
      etat = false ;
    }
  
   
      
      return etat ;
   }

   
   