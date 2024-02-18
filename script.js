function generateCaptcha() {
  var alpha = new Array(
    "A",
    "B",
    "C",
    "D",
    "E",
    "F",
    "G",
    "H",
    "I",
    "J",
    "K",
    "L",
    "M",
    "N",
    "O",
    "P",
    "Q",
    "R",
    "S",
    "T",
    "U",
    "V",
    "W",
    "X",
    "Y",
    "Z",
    "a",
    "b",
    "c",
    "d",
    "e",
    "f",
    "g",
    "h",
    "i",
    "j",
    "k",
    "l",
    "m",
    "n",
    "o",
    "p",
    "q",
    "r",
    "s",
    "t",
    "u",
    "v",
    "w",
    "x",
    "y",
    "z"
  );
  for (var i = 0; i < 4; i++) {
    var a = alpha[Math.floor(Math.random() * alpha.length)];
    var b = Math.floor(Math.random() * 10);
    var c = alpha[Math.floor(Math.random() * alpha.length)];
    var d = alpha[Math.floor(Math.random() * alpha.length)];
    var e = Math.floor(Math.random() * 10);
  }
  var code = a + " " + b + " " + " " + c + " " + d + " " + e;
  document.getElementById("mainCaptcha").value = code;
}

function CheckValidCaptcha(){
     var string1 = removeSpaces(document.getElementById("mainCaptcha").value);
     var string2 = removeSpaces(document.getElementById("txtInput").value);

     if(string1!=string2){
        document.getElementById("error").innerHTML =
          "Please enter a valid captcha.";
     }
     else{
        document.getElementById("error").innerHTML ="";
     }
}

function removeSpaces(string) {
  return string.split(" ").join("");
}

function otp(){
    document.getElementById('otp').innerHTML="Resend";
}