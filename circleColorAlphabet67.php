<!DOCTYPE html>
<html>
<head>
<meta name="viewport" 
      content="user-scalable=0">
     <meta charset="UTF-8">
    <title>CCA6</title>

  <!-- <link rel="stylesheet" href="//code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.css">-->
  <!-- 

<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
 <script src="//code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js"></script>

 -->

<script src="js/jquery.min.js"></script>
<script src="js/jqm.js"></script>
 
   <!--

-->


    <script src="js/underscore-min.js"></script>

 <script src="js/eruda.js"></script>
<script>eruda.init();</script>


<style>
body
{
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  user-select: none;
}
</style>

    <script>

count2028=0;
setInterval(function(){
var abecedario33 ="áéíóúABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

count2028++

if(count2028==3) count2028=0;

for(let i=0;i<abecedario33.length;i++){

let bCha1=count2028;
    if(bCha1==0) alphabetColors = abc1;
if(bCha1==1) alphabetColors = abc3;
if(bCha1==2 ) alphabetColors = abc103;
if(bCha1==3 ) alphabetColors = abc101;
if(bCha1==4 ) alphabetColors = abc102;
if(bCha1==5 ) alphabetColors = abc109;
if(bCha1==6 ) alphabetColors = abc104;
if(bCha1==7 ) alphabetColors = abc103;
if(bCha1==8 ) alphabetColors = abc110;
if(bCha1==9 ) alphabetColors = abc111;


$(".lll-"+abecedario33[i].toUpperCase()).css("color",alphabetColors[abecedario33[i].toUpperCase()])


}



},180)


bJump=0
limitation=2
elegido=1


//hide help
bhh=1;


 abc111 = {};

// // Definición del alfabeto español con colores RGB más distintivos
abc111 = {
    // Rojo brillante
    'a': 'rgb(255,0,0)',
    'A': 'rgb(255,0,0)',
    'á': 'rgb(255,0,0)',
    'Á': 'rgb(255,0,0)',
    
    // Verde esmeralda brillante
    'b': 'rgb(0,168,107)',
    'B': 'rgb(0,168,107)',
    
    // Azul cobalto
    'c': 'rgb(0,71,171)',
    'C': 'rgb(0,71,171)',
    
    // Naranja brillante
    'd': 'rgb(255,140,0)',
    'D': 'rgb(255,140,0)',
    
    // Morado profundo
    'e': 'rgb(128,0,128)',
    'E': 'rgb(128,0,128)',
    'é': 'rgb(128,0,128)',
    'É': 'rgb(128,0,128)',
    
    // Turquesa brillante
    'f': 'rgb(48,213,200)',
    'F': 'rgb(48,213,200)',
    
    // Amarillo oro
    'g': 'rgb(255,215,0)',
    'G': 'rgb(255,215,0)',
    
    // Rosa chicle
    'h': 'rgb(255,105,180)',
    'H': 'rgb(255,105,180)',
    
    // Azul cielo claro
    'i': 'rgb(135,206,235)',
    'I': 'rgb(135,206,235)',
    'í': 'rgb(135,206,235)',
    'Í': 'rgb(135,206,235)',
    
    // Marrón chocolate
    'j': 'rgb(139,69,19)',
    'J': 'rgb(139,69,19)',
    
    // Verde lima brillante
    'k': 'rgb(50,205,50)',
    'K': 'rgb(50,205,50)',
    
    // Azul marino profundo
    'l': 'rgb(0,0,128)',
    'L': 'rgb(0,0,128)',
    
    // Coral brillante
    'm': 'rgb(255,127,80)',
    'M': 'rgb(255,127,80)',
    
    // Índigo profundo
    'n': 'rgb(75,0,130)',
    'N': 'rgb(75,0,130)',
    'ñ': 'rgb(75,0,130)',
    'Ñ': 'rgb(75,0,130)',
    
    // Cian brillante
    'o': 'rgb(0,255,255)',
    'O': 'rgb(0,255,255)',
    'ó': 'rgb(0,255,255)',
    'Ó': 'rgb(0,255,255)',
    
    // Verde oliva dorado
    'p': 'rgb(154,205,50)',
    'P': 'rgb(154,205,50)',
    
    // Magenta brillante
    'q': 'rgb(255,0,255)',
    'Q': 'rgb(255,0,255)',
    
    // Terracota
    'r': 'rgb(204,78,92)',
    'R': 'rgb(204,78,92)',
    
    // Rojo vino
    's': 'rgb(114,47,55)',
    'S': 'rgb(114,47,55)',
    
    // Verde pino
    't': 'rgb(1,121,111)',
    'T': 'rgb(1,121,111)',
    
    // Azul acero claro
    'u': 'rgb(70,130,180)',
    'U': 'rgb(70,130,180)',
    'ú': 'rgb(70,130,180)',
    'Ú': 'rgb(70,130,180)',
    'ü': 'rgb(70,130,180)',
    'Ü': 'rgb(70,130,180)',
    
    // Naranja quemado
    'v': 'rgb(210,105,30)',
    'V': 'rgb(210,105,30)',
    
    // Lavanda grisáceo
    'w': 'rgb(230,230,250)',
    'W': 'rgb(230,230,250)',
    
    // Aguamarina brillante
    'x': 'rgb(127,255,212)',
    'X': 'rgb(127,255,212)',
    
    // Amarillo canario
    'y': 'rgb(255,239,0)',
    'Y': 'rgb(255,239,0)',
    
    // Rojo carmesí
    'z': 'rgb(220,20,60)',
    'Z': 'rgb(220,20,60)',
};
abc110 = {
    // a/A con y sin acento - azul cerúleo
    'a': 'rgb(18,81,117)',
    'A': 'rgb(18,81,117)',
    'á': 'rgb(18,81,117)',
    'Á': 'rgb(18,81,117)',

    // e/E con y sin acento - rojo oscuro profundo
    'e': 'rgb(120,25,35)',
    'E': 'rgb(120,25,35)',
    'é': 'rgb(120,25,35)',
    'É': 'rgb(120,25,35)',

    // i/I con y sin acento - verde bosque
    'i': 'rgb(25,95,45)',
    'I': 'rgb(25,95,45)',
    'í': 'rgb(25,95,45)',
    'Í': 'rgb(25,95,45)',

    // o/O con y sin acento - púrpura profundo
    'o': 'rgb(85,20,95)',
    'O': 'rgb(85,20,95)',
    'ó': 'rgb(85,20,95)',
    'Ó': 'rgb(85,20,95)',

    // u/U con y sin acento - naranja oxidado
    'u': 'rgb(135,55,15)',
    'U': 'rgb(135,55,15)',
    'ú': 'rgb(135,55,15)',
    'Ú': 'rgb(135,55,15)',
    'ü': 'rgb(135,55,15)',
    'Ü': 'rgb(135,55,15)',

    // n/N con y sin tilde - verde azulado
    'n': 'rgb(20,95,90)',
    'N': 'rgb(20,95,90)',
    'ñ': 'rgb(20,95,90)',
    'Ñ': 'rgb(20,95,90)',

    // Nuevas combinaciones para el resto del alfabeto
    'b': 'rgb(95,35,110)',    // violeta índigo
    'B': 'rgb(95,35,110)',
    'c': 'rgb(110,75,15)',    // ámbar oscuro
    'C': 'rgb(110,75,15)',
    'd': 'rgb(15,65,115)',    // azul marino profundo
    'D': 'rgb(15,65,115)',
    'f': 'rgb(95,25,60)',     // vino tinto
    'F': 'rgb(95,25,60)',
    'g': 'rgb(25,85,65)',     // verde mar
    'G': 'rgb(25,85,65)',
    'h': 'rgb(115,45,25)',    // marrón rojizo
    'H': 'rgb(115,45,25)',
    'j': 'rgb(75,85,25)',     // verde oliva dorado
    'J': 'rgb(75,85,25)',
    'k': 'rgb(85,30,75)',     // berenjena
    'K': 'rgb(85,30,75)',
    'l': 'rgb(30,75,105)',    // azul petróleo
    'L': 'rgb(30,75,105)',
    'm': 'rgb(105,35,35)',    // rojo ladrillo
    'M': 'rgb(105,35,35)',
    'p': 'rgb(45,60,95)',     // azul acero
    'P': 'rgb(45,60,95)',
    'q': 'rgb(95,55,25)',     // café tostado
    'Q': 'rgb(95,55,25)',
    'r': 'rgb(35,95,75)',     // verde esmeralda oscuro
    'R': 'rgb(35,95,75)',
    's': 'rgb(115,25,75)',    // frambuesa oscuro
    'S': 'rgb(115,25,75)',
    't': 'rgb(75,45,95)',     // púrpura medianoche
    'T': 'rgb(75,45,95)',
    'v': 'rgb(95,65,15)',     // ocre oscuro
    'V': 'rgb(95,65,15)',
    'w': 'rgb(25,75,85)',     // turquesa profundo
    'W': 'rgb(25,75,85)',
    'x': 'rgb(85,25,45)',     // granate
    'X': 'rgb(85,25,45)',
    'y': 'rgb(55,85,35)',     // verde musgo
    'Y': 'rgb(55,85,35)',
    'z': 'rgb(75,25,85)',     // morado real
    'Z': 'rgb(75,25,85)'
};





 abc109 = {
    // a/A con y sin acento - rojo oscuro intenso
    'a': 'rgb(135,18,18)',
    'A': 'rgb(135,18,18)',
    'á': 'rgb(135,18,18)',
    'Á': 'rgb(135,18,18)',

    // e/E con y sin acento - verde esmeralda
    'e': 'rgb(18,108,54)',
    'E': 'rgb(18,108,54)',
    'é': 'rgb(18,108,54)',
    'É': 'rgb(18,108,54)',

    // i/I con y sin acento - azul eléctrico oscuro
    'i': 'rgb(18,54,135)',
    'I': 'rgb(18,54,135)',
    'í': 'rgb(18,54,135)',
    'Í': 'rgb(18,54,135)',

    // o/O con y sin acento - naranja quemado
    'o': 'rgb(135,63,18)',
    'O': 'rgb(135,63,18)',
    'ó': 'rgb(135,63,18)',
    'Ó': 'rgb(135,63,18)',

    // u/U con y sin acento - púrpura real
    'u': 'rgb(90,18,108)',
    'U': 'rgb(90,18,108)',
    'ú': 'rgb(90,18,108)',
    'Ú': 'rgb(90,18,108)',
    'ü': 'rgb(90,18,108)',
    'Ü': 'rgb(90,18,108)',

    // n/N con y sin tilde - turquesa oscuro
    'n': 'rgb(18,99,99)',
    'N': 'rgb(18,99,99)',
    'ñ': 'rgb(18,99,99)',
    'Ñ': 'rgb(18,99,99)',

    // Resto del alfabeto con colores más distintivos
    'b': 'rgb(117,81,18)',    // dorado oscuro
    'B': 'rgb(117,81,18)',
    'c': 'rgb(18,72,126)',    // azul cobalto
    'C': 'rgb(18,72,126)',
    'd': 'rgb(126,27,54)',    // carmesí
    'D': 'rgb(126,27,54)',
    'f': 'rgb(54,108,18)',    // verde lima oscuro
    'F': 'rgb(54,108,18)',
    'g': 'rgb(108,54,18)',    // marrón cobrizo
    'G': 'rgb(108,54,18)',
    'h': 'rgb(63,18,99)',     // violeta oscuro
    'H': 'rgb(63,18,99)',
    'j': 'rgb(108,18,72)',    // magenta oscuro
    'J': 'rgb(108,18,72)',
    'k': 'rgb(18,90,72)',     // verde agua
    'K': 'rgb(18,90,72)',
    'l': 'rgb(81,45,108)',    // lavanda oscuro
    'L': 'rgb(81,45,108)',
    'm': 'rgb(99,18,81)',     // fucsia oscuro
    'M': 'rgb(99,18,81)',
    'p': 'rgb(126,90,18)',    // mostaza oscuro
    'P': 'rgb(126,90,18)',
    'q': 'rgb(18,81,63)',     // verde jade
    'Q': 'rgb(18,81,63)',
    'r': 'rgb(135,36,36)',    // escarlata
    'R': 'rgb(135,36,36)',
    's': 'rgb(36,54,108)',    // azul real
    'S': 'rgb(36,54,108)',
    't': 'rgb(72,99,18)',     // verde oliva brillante
    'T': 'rgb(72,99,18)',
    'v': 'rgb(108,36,81)',    // ciruela
    'V': 'rgb(108,36,81)',
    'w': 'rgb(18,81,117)',    // azul cerúleo
    'W': 'rgb(18,81,117)',
    'x': 'rgb(117,45,18)',    // terracota brillante
    'X': 'rgb(117,45,18)',
    'y': 'rgb(81,108,18)',    // verde chartreuse oscuro
    'Y': 'rgb(81,108,18)',
    'z': 'rgb(117,18,45)',    // rojo rubí
    'Z': 'rgb(117,18,45)'
};

//alert(abc108)
// Paleta de 13 colores base
const coloresBase = [
    "rgb(120,123,250)", "rgb(200,50,100)", "rgb(30,200,100)", 
    "rgb(255,150,50)", "rgb(90,180,200)", "rgb(180,90,150)", 
    "rgb(220,180,50)", "rgb(150,90,30)", "rgb(60,130,180)", 
    "rgb(200,90,30)", "rgb(100,120,90)", "rgb(170,60,180)", 
    "rgb(50,170,100)"
];

// Función para hacer un color más claro
function aclararColor(rgb, porcentaje) {
    const [r, g, b] = rgb.match(/\d+/g).map(Number);
    return `rgb(${Math.min(255, r + porcentaje)}, ${Math.min(255, g + porcentaje)}, ${Math.min(255, b + porcentaje)})`;
}

// Función para hacer un color más oscuro
function oscurecerColor(rgb, porcentaje) {
    const [r, g, b] = rgb.match(/\d+/g).map(Number);
    return `rgb(${Math.max(0, r - porcentaje)}, ${Math.max(0, g - porcentaje)}, ${Math.max(0, b - porcentaje)})`;
}

// Generar la variable abc104
const abc104 = {};
const gruposLetras = [
    ['a', 'á', 'A', 'Á'], ['b', 'B'], ['c', 'C'], ['d', 'D'], ['e', 'é', 'E', 'É'],
    ['f', 'F'], ['g', 'G'], ['h', 'H'], ['i', 'í', 'I', 'Í'], ['j', 'J'],
    ['k', 'K'], ['l', 'L'], ['m', 'M'], ['n', 'N'], ['ñ', 'Ñ'], 
    ['o', 'ó', 'O', 'Ó'], ['p', 'P'], ['q', 'Q'], ['r', 'R'], 
    ['s', 'S'], ['t', 'T'], ['u', 'ú', 'ü', 'U', 'Ú', 'Ü'], ['v', 'V'],
    ['w', 'W'], ['x', 'X'], ['y', 'Y'], ['z', 'Z']
];

let colorIndex = 0;
gruposLetras.forEach((grupo, index) => {
    // Asignar el color base o una variación (clara u oscura) de forma cíclica
    const colorBase = coloresBase[colorIndex];
    let colorAsignado;

    // Alternar entre color base, aclarado u oscurecido para maximizar el uso de colores
    if (index % 3 === 0) {
        colorAsignado = colorBase;
    } else if (index % 3 === 1) {
        colorAsignado = aclararColor(colorBase, 50);
    } else {
        colorAsignado = oscurecerColor(colorBase, 50);
    }

    grupo.forEach(letra => {
        abc104[letra] = colorAsignado;
    });

    colorIndex = (colorIndex + 1) % coloresBase.length; // Rotar los colores
});

console.log(abc104);

const abc103 = {
    "a": "rgb(255, 0, 153)", "A": "rgb(255, 0, 153)", "á": "rgb(255, 0, 153)", "Á": "rgb(255, 0, 153)",
    "b": "rgb(255, 102, 0)", "B": "rgb(255, 102, 0)",
    "c": "rgb(120, 123, 250)", "C": "rgb(120, 123, 250)",
    "d": "rgb(153, 255, 51)", "D": "rgb(153, 255, 51)",
    "e": "rgb(51, 255, 204)", "E": "rgb(51, 255, 204)", "é": "rgb(51, 255, 204)", "É": "rgb(51, 255, 204)",
    "f": "rgb(255, 153, 204)", "F": "rgb(255, 153, 204)",
    "g": "rgb(204, 51, 255)", "G": "rgb(204, 51, 255)",
    "h": "rgb(102, 255, 153)", "H": "rgb(102, 255, 153)",
    "i": "rgb(51, 102, 255)", "I": "rgb(51, 102, 255)", "í": "rgb(51, 102, 255)", "Í": "rgb(51, 102, 255)",
    "j": "rgb(255, 255, 51)", "J": "rgb(255, 255, 51)",
    "k": "rgb(255, 0, 255)", "K": "rgb(255, 0, 255)",
    "l": "rgb(102, 204, 255)", "L": "rgb(102, 204, 255)",
    "m": "rgb(255, 204, 51)", "M": "rgb(255, 204, 51)",
    "n": "rgb(0, 204, 255)", "N": "rgb(0, 204, 255)",
    "ñ": "rgb(255, 51, 153)", "Ñ": "rgb(255, 51, 153)",
    "o": "rgb(255, 102, 204)", "O": "rgb(255, 102, 204)", "ó": "rgb(255, 102, 204)", "Ó": "rgb(255, 102, 204)",
    "p": "rgb(51, 255, 153)", "P": "rgb(51, 255, 153)",
    "q": "rgb(153, 51, 255)", "Q": "rgb(153, 51, 255)",
    "r": "rgb(0, 245, 194)", "R": "rgb(0, 245, 194)",
    "s": "rgb(255, 153, 51)", "S": "rgb(255, 153, 51)",
    "t": "rgb(204, 102, 255)", "T": "rgb(204, 102, 255)",
    "u": "rgb(0, 255, 102)", "U": "rgb(0, 255, 102)", "ú": "rgb(0, 255, 102)", "Ú": "rgb(0, 255, 102)",
    "v": "rgb(255, 51, 204)", "V": "rgb(255, 51, 204)",
    "w": "rgb(51, 204, 255)", "W": "rgb(51, 204, 255)",
    "x": "rgb(204, 255, 51)", "X": "rgb(204, 255, 51)",
    "y": "rgb(255, 51, 51)", "Y": "rgb(255, 51, 51)", "ý": "rgb(255, 51, 51)", "Ý": "rgb(255, 51, 51)",
    "z": "rgb(51, 255, 255)", "Z": "rgb(51, 255, 255)"
};

abc102 = {
    // A
    'a': 'rgb(255, 87, 51)',    // Rojo-naranja
    'á': 'rgb(255, 87, 51)',
    'A': 'rgb(255, 87, 51)',
    'Á': 'rgb(255, 87, 51)',
    
    // B
    'b': 'rgb(60, 186, 84)',    // Verde
    'B': 'rgb(60, 186, 84)',
    
    // C
    'c': 'rgb(72, 133, 237)',   // Azul
    'C': 'rgb(72, 133, 237)',
    
    // D
    'd': 'rgb(214, 194, 13)',   // Amarillo
    'D': 'rgb(214, 194, 13)',
    
    // E
    'e': 'rgb(219, 68, 55)',    // Rojo
    'é': 'rgb(219, 68, 55)',
    'E': 'rgb(219, 68, 55)',
    'É': 'rgb(219, 68, 55)',
    
    // F
    'f': 'rgb(156, 39, 176)',   // Púrpura
    'F': 'rgb(156, 39, 176)',
    
    // G
    'g': 'rgb(3, 169, 244)',    // Azul claro
    'G': 'rgb(3, 169, 244)',
    
    // H
    'h': 'rgb(255, 152, 0)',    // Naranja
    'H': 'rgb(255, 152, 0)',
    
    // I
    'i': 'rgb(76, 175, 80)',    // Verde claro
    'í': 'rgb(76, 175, 80)',
    'I': 'rgb(76, 175, 80)',
    'Í': 'rgb(76, 175, 80)',
    
    // J
    'j': 'rgb(233, 30, 99)',    // Rosa
    'J': 'rgb(233, 30, 99)',
    
    // K
    'k': 'rgb(103, 58, 183)',   // Violeta
    'K': 'rgb(103, 58, 183)',
    
    // L
    'l': 'rgb(121, 85, 72)',    // Marrón
    'L': 'rgb(121, 85, 72)',
    
    // M
    'm': 'rgb(33, 150, 243)',   // Azul medio
    'M': 'rgb(33, 150, 243)',
    
    // N
    'n': 'rgb(255, 193, 7)',    // Ámbar
    'ñ': 'rgb(255, 193, 7)',
    'N': 'rgb(255, 193, 7)',
    'Ñ': 'rgb(255, 193, 7)',
    
    // O
    'o': 'rgb(96, 125, 139)',   // Azul grisáceo
    'ó': 'rgb(96, 125, 139)',
    'O': 'rgb(96, 125, 139)',
    'Ó': 'rgb(96, 125, 139)',
    
    // P
    'p': 'rgb(233, 30, 99)',    // Rosa oscuro
    'P': 'rgb(233, 30, 99)',
    
    // Q
    'q': 'rgb(156, 39, 176)',   // Púrpura claro
    'Q': 'rgb(156, 39, 176)',
    
    // R
    'r': 'rgb(0, 150, 136)',    // Verde azulado
    'R': 'rgb(0, 150, 136)',
    
    // S
    's': 'rgb(255, 87, 24)',    // Naranja profundo
    'S': 'rgb(255, 87, 24)',
    
    // T
    't': 'rgb(63, 81, 181)',    // Índigo
    'T': 'rgb(63, 81, 181)',
    
    // U
    'u': 'rgb(139, 195, 74)',   // Verde lima
    'ú': 'rgb(139, 195, 74)',
    'ü': 'rgb(139, 195, 74)',
    'U': 'rgb(139, 195, 74)',
    'Ú': 'rgb(139, 195, 74)',
    'Ü': 'rgb(139, 195, 74)',
    
    // V
    'v': 'rgb(255, 235, 59)',   // Amarillo brillante
    'V': 'rgb(255, 235, 59)',
    
    // W
    'w': 'rgb(158, 158, 158)',  // Gris
    'W': 'rgb(158, 158, 158)',
    
    // X
    'x': 'rgb(121, 85, 72)',    // Marrón claro
    'X': 'rgb(121, 85, 72)',
    
    // Y
    'y': 'rgb(0, 188, 212)',    // Cyan
    'Y': 'rgb(0, 188, 212)',
    
    // Z
    'z': 'rgb(205, 220, 57)',   // Lima
    'Z': 'rgb(205, 220, 57)'
};


 abc101 = {
  "A": "RGB(0, 0, 190)", "a": "RGB(0, 0, 190)", "Á": "RGB(0, 0, 190)", "á": "RGB(0, 0, 190)",
  "B": "RGB(190, 0, 0)", "b": "RGB(190, 0, 0)",
  "C": "RGB(0, 190, 0)", "c": "RGB(0, 190, 0)",
  "D": "RGB(190, 0, 190)", "d": "RGB(190, 0, 190)",
  "E": "RGB(0, 190, 190)", "e": "RGB(0, 190, 190)", "É": "RGB(0, 190, 190)", "é": "RGB(0, 190, 190)",
  "F": "RGB(190, 190, 0)", "f": "RGB(190, 190, 0)",
  "G": "RGB(100, 0, 190)", "g": "RGB(100, 0, 190)",
  "H": "RGB(190, 100, 0)", "h": "RGB(190, 100, 0)",
  "I": "RGB(0, 100, 190)", "i": "RGB(0, 100, 190)", "Í": "RGB(0, 100, 190)", "í": "RGB(0, 100, 190)",
  "J": "RGB(100, 190, 0)", "j": "RGB(100, 190, 0)",
  "K": "RGB(0, 190, 100)", "k": "RGB(0, 190, 100)",
  "L": "RGB(190, 0, 100)", "l": "RGB(190, 0, 100)",
  "M": "RGB(100, 100, 100)", "m": "RGB(100, 100, 100)",
  "N": "RGB(100, 150, 100)", "n": "RGB(100, 150, 100)", "Ñ": "RGB(100, 150, 100)", "ñ": "RGB(100, 150, 100)",
  "O": "RGB(50, 100, 150)", "o": "RGB(50, 100, 150)", "Ó": "RGB(50, 100, 150)", "ó": "RGB(50, 100, 150)",
  "P": "RGB(150, 50, 100)", "p": "RGB(150, 50, 100)",
  "Q": "RGB(100, 50, 150)", "q": "RGB(100, 50, 150)",
  "R": "RGB(150, 100, 50)", "r": "RGB(150, 100, 50)",
  "S": "RGB(50, 150, 100)", "s": "RGB(50, 150, 100)",
  "T": "RGB(100, 50, 50)", "t": "RGB(100, 50, 50)",
  "U": "RGB(50, 50, 100)", "u": "RGB(50, 50, 100)", "Ú": "RGB(50, 50, 100)", "ú": "RGB(50, 50, 100)",
  "V": "RGB(150, 0, 50)", "v": "RGB(150, 0, 50)",
  "W": "RGB(0, 150, 50)", "w": "RGB(0, 150, 50)",
  "X": "RGB(50, 0, 150)", "x": "RGB(50, 0, 150)",
  "Y": "RGB(100, 0, 50)", "y": "RGB(100, 0, 50)",
  "Z": "RGB(50, 100, 0)", "z": "RGB(50, 100, 0)"
};

abc100 = {
  "A": "RGB(70, 130, 180)", "a": "RGB(70, 130, 180)", "Á": "RGB(70, 130, 180)", "á": "RGB(70, 130, 180)", // Azul suave
  "B": "RGB(144, 200, 144)", "b": "RGB(144, 238, 144)", // Verde claro (relajante)
  "C": "RGB(255, 182, 193)", "c": "RGB(255, 182, 193)", // Rosa claro (empatía y amabilidad)
  "D": "RGB(255, 223, 186)", "d": "RGB(255, 223, 186)", // Durazno suave (afecto y calma)
  "E": "RGB(173, 216, 230)", "e": "RGB(173, 216, 230)", "É": "RGB(173, 216, 230)", "é": "RGB(173, 216, 230)", // Azul celeste (tranquilidad)
  "F": "RGB(240, 230, 140)", "f": "RGB(240, 230, 140)", // Amarillo suave (creatividad sin ansiedad)
  "G": "RGB(221, 160, 221)", "g": "RGB(221, 160, 221)", // Lila (espiritualidad y calma)
  "H": "RGB(152, 251, 152)", "h": "RGB(152, 251, 152)", // Verde menta (refresca y aclara la mente)
  "I": "RGB(255, 160, 122)", "i": "RGB(255, 160, 122)", "Í": "RGB(255, 160, 122)", "í": "RGB(255, 160, 122)", // Coral (vitalidad suave)
  "J": "RGB(176, 196, 222)", "j": "RGB(176, 196, 222)", // Azul grisáceo (pensamiento y balance)
  "K": "RGB(238, 232, 170)", "k": "RGB(238, 232, 170)", // Arena clara (calma y estabilidad)
  "L": "RGB(255, 228, 225)", "l": "RGB(255, 228, 225)", // Rosa suave (protección emocional)
  "M": "RGB(218, 165, 32)", "m": "RGB(218, 165, 32)", // Oro apagado (confianza y motivación)
  "N": "RGB(245, 222, 179)", "n": "RGB(245, 222, 179)", "Ñ": "RGB(245, 222, 179)", "ñ": "RGB(245, 222, 179)", // Beige (equilibrio y sencillez)
  "O": "RGB(210, 180, 140)", "o": "RGB(210, 180, 140)", "Ó": "RGB(210, 180, 140)", "ó": "RGB(210, 180, 140)", // Marrón claro (estabilidad)
  "P": "RGB(255, 240, 245)", "p": "RGB(255, 240, 245)", // Rosa neblina (paz y suavidad)
  "Q": "RGB(224, 255, 255)", "q": "RGB(224, 255, 255)", // Cian pálido (claridad mental)
  "R": "RGB(240, 128, 128)", "r": "RGB(240, 128, 128)", // Salmón (energía suave)
  "S": "RGB(255, 228, 181)", "s": "RGB(255, 228, 181)", // Melocotón claro (felicidad sin euforia)
  "T": "RGB(175, 238, 238)", "t": "RGB(175, 238, 238)", // Turquesa claro (relajación y creatividad)
  "U": "RGB(100, 149, 237)", "u": "RGB(100, 149, 237)", "Ú": "RGB(100, 149, 237)", "ú": "RGB(100, 149, 237)", // Azul cadete (claridad emocional)
  "V": "RGB(233, 150, 122)", "v": "RGB(233, 150, 122)", // Sombra de coral (afecto)
  "W": "RGB(255, 239, 213)", "w": "RGB(255, 239, 213)", // Blanco antiguo (calidez sin distracción)
  "X": "RGB(255, 250, 205)", "x": "RGB(255, 250, 205)", // Amarillo limón claro (vitalidad)
  "Y": "RGB(240, 255, 240)", "y": "RGB(240, 255, 240)", // Verde claro (armonía emocional)
  "Z": "RGB(245, 245, 220)", "z": "RGB(245, 245, 220)" // Beige claro (paz y sencillez)
};


$(document). bind("contextmenu",function(e){ return false; });

asdasd=""
indiceLeer=0

function eliminarCaracteres(texto, cantidad) {
    return texto.slice(cantidad);
}
// Función para leer texto usando TTS
function leer1(texto, velocidad = 1, idioma = 'es-ES') {

  
   // Detener cualquier lectura en curso
    if (window.speechSynthesis.speaking) {
        window.speechSynthesis.cancel();
    }

    // Crear nueva instancia de utterance
    const utterance = new SpeechSynthesisUtterance(texto);
    
    // Configurar opciones
    utterance.lang = idioma;           // Idioma
    utterance.rate = velocidad;        // Velocidad de lectura
    utterance.pitch = 1;               // Tono
    utterance.volume = 1;              // Volumen
    
    // Eventos para monitorear el estado
    utterance.onstart = () => {
        console.log('Iniciando lectura');
    };
    
    utterance.onend = () => {
        console.log('Lectura finalizada');
    };
    
    utterance.onerror = (error) => {
        console.error('Error en la lectura:', error);
    };
    
    // Iniciar la lectura
    window.speechSynthesis.speak(utterance);
}

function leer(texto, velocidad = 1, idioma = 'es-ES') {
if(indiceLeer!=0) texto=eliminarCaracteres(texto, indiceLeer)


    // Detener cualquier lectura en curso
    if (window.speechSynthesis.speaking) {
        window.speechSynthesis.cancel();
    }

    // Crear nueva instancia de utterance
    const utterance = new SpeechSynthesisUtterance(texto);
    
    // Configurar opciones
    utterance.lang = idioma;           // Idioma
    utterance.rate = velocidad;        // Velocidad de lectura
    utterance.pitch = 1;               // Tono
    utterance.volume = 1;              // Volumen
    
    // Eventos para monitorear el estado
    utterance.onstart = () => {
        console.log('Iniciando lectura');
    };
    
    utterance.onend = () => {
        console.log('Lectura finalizada');
    };
    
    utterance.onerror = (error) => {
        console.error('Error en la lectura:', error);
    };

    // Evento para seguimiento de palabras
    utterance.onboundary = (event) => {
        if (event.name === 'word') {
            const palabraActual = texto.substring(event.charIndex, 
                event.charIndex + event.charLength);
            console.log('Palabra actual:', palabraActual);
            
            // Opcional: Disparar un evento personalizado
            const eventoNuevaPalabra = new CustomEvent('nuevaPalabra', {
                detail: { palabra: palabraActual }
            });
            document.dispatchEvent(eventoNuevaPalabra);
        }
    };
    
    // Iniciar la lectura
    window.speechSynthesis.speak(utterance);
}



// Opcional: Escuchar el evento de nueva palabra
document.addEventListener('nuevaPalabra', (e) => {
    // Aquí puedes hacer algo adicional con cada palabra
    // Por ejemplo, resaltarla en la UI
    console.log('Se detectó nueva palabra:', e.detail.palabra);
});
       
bCha=1
bCha1=0

function quitaAcentos(str){ 
    for (var i=0;i<str.length;i++){ 
    //Sustituye "á é í ó ú" 
        if (str.charAt(i)=="á") str = str.replace(/á/,"a"); 
        if (str.charAt(i)=="é") str = str.replace(/é/,"e"); 
        if (str.charAt(i)=="í") str = str.replace(/í/,"i"); 
        if (str.charAt(i)=="ó") str = str.replace(/ó/,"o"); 
        if (str.charAt(i)=="ú") str = str.replace(/ú/,"u"); 
    } 
    return str; 
} 
          
 function _newSel(id,min,max,advance,select,onchange="",onclick="",style="",text="",post=""){



  $("#"+id+"-span").append(`
    <select id="${id}" onchange="${onchange}" onclick="${onclick}" style="${style}"></select>
  `)  


  for(var i=min;i<max;i+=advance){
    sel=""; 
    
    if(i==select) sel="selected";
    $("#"+id).append(`<option value="${i}" ${sel}>${text}${i}${post}</option>`)
  }  

}

        </script>
        <style>
        body{
            color: green;
            background-color:black;
            overflow-x:hidden;
        }
        .ui-selectmenu-button-text{
            display:none;
        }
        </style>
</head>
<body>
<div id="clock" style="font-size: 40px; color: green; background-color:black; position: fixed; top: 0px; left: 0px; z-index: 9999999;" onclick="saveTime(); time=0;"></div>
<div id="clock1" style="font-size: 40px; color: green; background-color:black; position: fixed; top: 0px; left: 100px; z-index: 9999999;" onclick="time=0;"></div>


<script>

opacidad=0
bOpacidad=1;

function oculta2(){
bOpacidad=!bOpacidad;

opacidad=1
if(bOpacidad) opacidad=0;

setTimeout(()=>{   oculta2();     },31000)

}

oculta2();

bFl=0
bSame=0
bExtreme =<?= isset($_GET['ex']) || isset($_GET['ex1']) ?1:0?>



bTrans=0
bFull=0
bBloque=0
b50=0
b20=1
bVar=0
time=0
modeC=0


<? if(isset($_GET['ex'])){ ?>

setTimeout(function(){

//bVar=1; myflash();

},2000)

<? } ?>

<? if(isset($_GET['ex1'])){ ?>

setTimeout(function(){

//bVar=1; myflash3();

},2000)

<? } ?>

setInterval(function(){ time++; $("#clock").html(time);   },1000)
function gp(){
//$("#screen3").html(myHtml)
//getPage(parseInt($('#myPage').val()));

}

</script>
<? include "./db/palabras_positivas.php"; ?>

<center>
    <div id="output1" style="z-index: 9999999; background-color:  white; position: fixed; top:  0px; left:  0px;/*padding-bottom: 10px;*//* display:none;*/"></div>
</center>
<br>
<br>
<br>
<br>
<br>
<br>
<span id="color1-span" style="zoom:3;"></span><script type="text/javascript">_newSel("color1",0,100,1,0,``," "," ","","");</script>


<span id="color-span" style="zoom:3;"></span><script type="text/javascript">_newSel("color",0,200,1,30,``," "," ","","");</script>
<input    type="button" value="asdasd" onclick=" leer(asdasd); " style="zoom:3;" id="asdasd-btn">
<input    type="button" value="stoptts" onclick="  window.speechSynthesis.cancel(); " style="zoom:3;" id="asdasd-btn">

<input    type="button" value="full" onclick="bFull=1; bVar=0;  getPage(parseInt($('#myPage').val())); " style="zoom:3;" id="mfeoff-btn">
<input    type="button" value="extreme" onclick="bExtreme = !bExtreme; bVar=0;  getPage(parseInt($('#myPage').val())); " style="zoom:3;" id="mfeoff-btn">
<input    type="button" value="bloque" onclick="bBloque=1; bVar=0;  getPage(parseInt($('#myPage').val())); " style="zoom:3;" id="mfeoff-btn">
<input    type="button" value="var off" onclick="bVar=0;  getPage(parseInt($('#myPage').val())); " style="zoom:3;" id="mfeoff-btn">
<input    type="button" value="var on" onclick="bVar=1;  getPage(parseInt($('#myPage').val())); " style="zoom:3; float:left;" id="mfeon-btn">
<input    type="button" value="50" onclick="bVar=0; b50=1;  getPage(parseInt($('#myPage').val())); " style="zoom:3; float:left;" id="mfeon-btn">
<input    type="button" value="50bVar" onclick="bVar=1; b50=1;  getPage(parseInt($('#myPage').val())); " style="zoom:3; float:left;" id="mfeon-btn">
<input    type="button" value="20" onclick="bVar=0; b20=1;  getPage(parseInt($('#myPage').val())); " style="zoom:3; float:left;" id="mfeon-btn">
<input    type="button" value="20 bvar" onclick="bVar=1; b20=1;  getPage(parseInt($('#myPage').val())); " style="zoom:3; float:left;" id="mfeon-btn">

<input    type="button" value="o" onclick=" bVar=1; myflash();  " style="zoom:3;" id="mf-btn">
<input    type="button" value="C fondo" onclick="bVar=0; modeC=1;  getPage(parseInt($('#myPage').val()));" style="zoom:3;" id="mc-btn">
<input    type="button" value="C2 fondo var" onclick="bVar=1; modeC=1;  getPage(parseInt($('#myPage').val()));" style="zoom:3;" id="mc2-btn">
<input    type="button" value="C3 fondo var flash" onclick="modeC=1; bVar=1;   myflash3(); /* getPage(parseInt($('#myPage').val()));*/" style="zoom:3;" id="mc3-btn">
<span id="color3-span" style="zoom:3;"></span><script type="text/javascript">_newSel("color3",0,200,1,50,``," "," ","","");</script>

<input    type="button" value="o2" onclick="myflash2();" style="zoom:3;" id="mf2-btn">
<input    type="button" value="flash" onclick="bFl=!bFl; if(bFl){ $('#flash').val('200'); update(); }else{  $('#flash').val('0'); update();   }" style="zoom:3;" id="mf2-btn">

<div id="cat3"></div>
<br>
<span id="ee1">
<div id="screen3" style="width:970px; word-wrap:break-word; background-color: black;  font-size:45px; z-index:1;"></div>

</span>
<br>
<span id="ee2">
<canvas id="lienzo" width="400" height="300" style="margin-top: 5px; <?=!isset($_GET['lienzo'])?'display:none;':''?>">Su navegador no soporta canvas :( </canvas>

</span>


<script>
function populate(){
return
if(_.random(0,1)){
$("#ee1").html( `  <canvas id="lienzo" width="400" height="300" style="margin-top: 5px; <?=!isset($_GET['lienzo'])?'display:none;':''?>">Su navegador no soporta canvas :( </canvas>
 `   )
$("#ee2").html( `  <div id="screen3" style="width:970px; word-wrap:break-word; background-color: black;  font-size:45px;"></div>
 `   )
}else{
$("#ee1").html( `   <div id="screen3" style="width:970px; word-wrap:break-word; background-color: black;  font-size:45px;"></div>
`   )
$("#ee2").html( `   <canvas id="lienzo" width="400" height="300" style="margin-top: 5px; <?=!isset($_GET['lienzo'])?'display:none;':''?>">Su navegador no soporta canvas :( </canvas>      

`   )
}

}

setTimeout(()=>{ 

//$("#screen3").css("width","970px")
//$("#screen3").css("font-size","36px")
//$("#screen3").css("zoom","1")
return;
if(myHtml.length<100) return;
if(myHtml!=$("#screen3").html()) $("#screen3").html(myHtml)



 },500)
</script>



<textarea id="input1" rows="4" cols="100" style="font-family: monospace; background-color: rgb(174,183,175); display: none;">Para Sherlock Holmes ella es siempre la mujer. Rara vez he oído que la mencione por otro nombre. A sus ojos, ella eclipsa al resto del sexo débil. No es que haya sentido por Irene Adler una emoción que pueda compararse al amor. Todas las emociones, y ésa particularmente, son opuestas a su mente fría, precisa, pero admirablemente equilibrada. Es, puedo asegurarlo, la máquina de observación y razonamiento más perfecta que el mundo ha visto; pero como amante, como enamorado, Sherlock Holmes había estado en una posición completamente falsa. Jamás hablaba de las pasiones, aun de las más suaves, sin un dejo de burla y desprecio. Eran cosas admirables para el observador... excelentes para recorrer el velo de los motivos y acciones de los hombres. Pero para el razonador preparado, admitir tales intromisiones en su propio temperamento, cuidadosamente ajustado, era introducir un factor que distraería y descompensaría todos los delicados resultados mentales. Una basura en un instrumento sensitivo o una grieta en un lente finísimo, no habría sido más perjudicial que una emoción intensa en una naturaleza como la suya. Y, sin embargo, para él no hubo más que una mujer, y esa mujer fue la difunta Irene Adler, de dudosa y turbia memoria.
Había visto poco a Holmes últimamente. Mi matrimonio nos había alejado. Mi propia felicidad y los intereses domésticos que surgén alrededor del hombre que se encuentra por primera vez convertido en amo y señor de su casa, eran suficientes para absorber toda mi atención; mientras que Holmes, que odiaba cualquier forma de sociedad con toda su alma de bohemio, permaneció en nuestras habitaciones de Baker Street, sumergido entre sus viejos libros y alternando, de semana en semana, entre la cocaína con la ambición, la somnolencia de la droga con la feroz energía de su propia naturaleza inquieta. Continuaba, como siempre, profundamente interesado en el estudio del crimen y ocupando sus inmensas facultades y sus extraordinarios poderes de observación en seguir las pistas y aclarar los misterios que habían sido abandonados por la policía oficial, como casos desesperados. De vez en cuando escuchaba algún vago relato de sus hazañas: su intervención en el caso del asesinato Trepoff, en Odessa; su solución en la singular tragedia de los hermanos Atkinson, en Trincomalee, y, finalmente, en la misión que había realizado, con tanto éxito, para la familia reinante de Holanda. Sin embargo, más allá de estas muestras de actividad, que me concretaba a compartir con todos los lectores de la prensa diaria, sabía muy poco de mi antiguo amigo y compañero.
Una noche -fue el 20 de marzo de 1888- volvía de visitar a un paciente (había vuelto al ejercicio de mi profesión como médico civil), cuando mi recorrido de regreso a casa me obligó a pasar por Baker Street. Al pasar por aquella puerta tan familiar para mí, que siempre estará asociada en mi mente a la época de mi noviazgo y a los oscuros incidentes del Estudio en escarlata, me sentí invadido por un intenso deseo de ver a Holmes y de saber cómo estaba empleando, ahora, sus extraordinarias facultades. Sus habitaciones estaban brillantemente iluminadas. Al levantar la mirada hacia ellas, noté su figura alta y esbelta pasar dos veces, convertida en negra silueta, cerca de la cortina. Estaba recorriendo la habitación rápida, ansiosamente, con la cabeza sumida en el pecho y las manos unidas a la espalda. Para mí, que conocía a fondo cada uno de sus hábitos y de sus estados de ánimo, su actitud y su comportamiento eran reveladores. Estaba trabajando de nuevo. Se había sacudido de sus ensueños toxicómanos y estaba sobre la pista candente de algún nuevo caso. Toqué la campanilla y fui conducido a la sala que por tanto tiempo compartí con Sherlock.
No fue muy efusivo. Rara vez lo era; pero creo que se alegró de verme. Casi sin decir palabra, aunque con los ojos brillándole bondadosamente, me indicó un sillón, me arrojó su cajetilla de cigarrillos y señaló hacia una botella de whisky y un sifón que había encima de una cómoda. Entonces se puso de pie frente al fuego y me miró con el detenimiento tan peculiar de él.
</textarea>
<br>
<div style="position: fixed; bottom:0px; left:0px;"><span id="show-me" onclick="$('#show-me').html('');"></span></div>
<span id="controls">
<span style="display:none">
    <input    type="button" value="start" onclick="mode=1; bPrev=0; bNext=0;  play();" id="play-btn">
  <input type="button" value="prev page" onclick="prev()">
  <input type="button" value="next page" onclick="next()">
 </span>

 <br>
<div id="espan">
</div>
    <select id="book" onchange="getBook(this.value);" style="width: 400px;"></select>
  <script type="text/javascript">

abc4="EAOSRNIDLCTUMPBGVYQHFZJÑXKW0123456789"

abc5="áéíóúEAOSRNIDLCTUMPBGVYQHFZJÑXKW0123456789"

//abc6="áéíóú"+"EAOSRNIDLCTUMPBGVYQHFZJÑXKW0123456789".toLowerCase()

setInterval(function(){
    return
    espan="<style>"
    
    for(let i=0;i<abc4.length;i++){
        try{
 //  $(".l-" + abc4.charAt(i).toLowerCase() ).html( _.sample(abc4.split("")) )
    }catch(err){
        $("#screen3").html(err)
        
    }
        
   }
    for(let i=0;i<abc5.length;i++){
          
        
   //      $(".l-"+abc5[i].toUpperCase()).css("color","rgb("+ _.random(0,255) +","+ _.random(0,255) +","+  _.random(0,255) + ")"  );
     //   $(".l-"+abc5[i].toLowerCase()).css("color","rgb("+ _.random(0,255) +","+ _.random(0,255) +","+  _.random(0,255) + ")"  );
        r=_.random(0,1)?-_.random(0,60):_.random(0,60);
        r1=_.random(0,1)?-_.random(0,20):_.random(0,20)
    let  a=_.random(0,2)
    if(a==0){  r00=1;  r01=0;   r02=0; }
    if(a==1){  r00=0;  r01=1;   r02=0; }
    if(a==2){  r00=0;  r01=0;   r02=1; }
    
       espan+=` 
    
        .l-${abc5[i].toLowerCase()} , .l-${abc5[i].toUpperCase()}
        {
          /*  transform: rotate3d( ${r00} , ${r01} ,   ${r02},  ${r}deg );*/
            /*  transform: rotate3d(0, 1, 0, 60deg); */
       transform: rotate( ${r}deg );
      /*  transform: rotateX( ${r1}deg ); */
            display: inline-block;
        }
        `
        
    }
    espan+="</style>"
    $("#espan").html(espan)
    
},100)

varDib="";
bDiv=0;

  function oculta(){
    
    
      
    bDiv=!bDiv;
    
    if(bDiv){
        
      $("#screen3").css("opacity","1");
    $("#lienzo").css("opacity","1");
        setTimeout(function(){
            oculta();
            
        },parseInt($("#flash").val()));
        
    }else{
       if(parseInt($("#flash").val())!=0){
        
        $("#screen3").css("opacity",opacidad);
        
           $("#lienzo").css("opacity",opacidad);
       } 
        setTimeout(function(){
            oculta();
            
        },parseInt($("#flash1").val()));
    }
    
    
        
    
  }

    
    lib=`01 - Harry Potter y la Piedra Filosofal.html|aleph.html|Elsenordelosanillos.html|boys dont cry.html|Haruki Murakami - Kafka en la Orilla.html|divergente.html|HarukiMurakami.DeQueHAbloCuandoHabloDeCorrer.html|el capital en el siglo xxi - piketty thomas.html|Homero.LaIliada1.html|hp3.html|La Torre Oscura I.html|hp3e.html|La conjura de los necios.html||Rayuela_libro.html|The 4-Hour Body.html|rae.html|William Gibson - Neuromante.html|rand ayn - el manantial.html`;

    <?

      function explora_ruta($ruta){
          
          $cadena = "";
          $manejador = @dir($ruta);
          
          while ($recurso = $manejador->read()){
          
              $nombre = "$recurso";
             
            if(stripos($nombre,".html")>2 || stripos($nombre,".txt")>2  || stripos($nombre,".str")>2 ){
            
            
              $cadena .= "$nombre|";

              
              
              
            }
          }
          $manejador->close();
          return $cadena;
      }

      $ruta = "libros/";


        //Si la ruta es vacia, pone la del presente script
        if ($ruta == "") $ruta = "libros/";

        $presenta_nodos = "";
        $presenta_archivo = "";

        //Si la ruta es una carpeta, la exploramos. Si es un archivo
        //sacamos tambi�n el contenido del archivo.

        if (is_dir($ruta)){//ES UNA CARPETA
          
            $presenta_nodos = explora_ruta($ruta);
        } 

      ?>

      lib="<?=$presenta_nodos?>";



    lib=lib.split("|");

    for(let i=0;i<lib.length-1;i++){
      $("#book").append(`<option value="${lib[i]}">${lib[i]}</option>`)
    }

 //   $("#book").val("hp3e.html")
   $("#book").val("hp3.html")
$("#book").val(_.sample(lib))

bMultiColor=1;

function update(){
    localStorage.setItem("myCat2",$("#flash").val() +"##"+$("#flash1").val() )
}
  </script>

   page<span id="myPage-span"></span><script type="text/javascript">_newSel("myPage",0,1000,1,0,`getPage(this.value);`," "," ","","");</script>

flash<span id="flash-span"></span><script type="text/javascript">_newSel("flash",0,1026,25,50,`update();`," "," ","","");</script>
flash1<span id="flash1-span"></span><script type="text/javascript">_newSel("flash1",0,1026,25,450,`update();`," "," ","","");</script>

<select id="repeat" onchange="getPage(this.value);">
        <option value="1" selected>1</option>
        <option value="2" >2</option>
        <option value="3" >3</option>
        <option value="4" >4</option>
        <option value="5">5</option>
</select>
 <input type="button" value="get" onclick="getPage($('#myPage').val());" style="">
 <input type="button" value="multicolor" onclick=" bMultiColor=!bMultiColor;  getPage($('#myPage').val());" style="">

    <input type="button" value="clear text" onclick="$('#input1').val('');" style="display: none;">
    
    <select id="tamano">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="5">5</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="20">20</option>
      <option value="25">25</option>
    <option value="27">27</option>
      <option value="30">30</option>
      <option value="35">35</option>
      <option value="40">40</option>
      <option value="50">50</option>
      <option value="55">55</option>
      <option value="60">60</option>
      <option value="65">65</option>
      <option value="70" selected>70</option>
      <option value="75">75</option>
      <option value="80">80</option>
      <option value="85">85</option>
      <option value="90">90</option>
      <option value="95">95</option>
      <option value="100">100</option>
    <option value="120">120</option>
    <option value="130">130</option>
    </select>
    <select id="alphabetSelected" onchange="bLoad=0; /* actualiza();*/ getPage($('#myPage').val());" style="zoom:1.2;">
        <option value="0"   >Christian</option>
        <option value="1"  >Kromofons</option>        
        <option value="3"  >Green</option>
        <option value="4">Blue</option>
        <option value="5">Red</option> 
        <option value="6">Skin</option>
        <option value="7">gray</option>
        <option value="8">Yellow</option>
        <option value="9">Pink</option>
        <option value="10">Orange</option>
        <option value="11" >Violet</option>
        <option value="2">Random</option>
      <option value="12" >Random 2</option>
   
 <option value="14" selected   >green</option>
      <option value="15">red</option>
      <option value="16">blue</option>
      <option value="17">yellow</option>
      <option value="18">pink</option>
      <option value="19">gray</option>
      <option value="20">violet</option>
      <option value="21">green hd</option>
      <option value="22">orange</option>
      <option value="23">skin</option>
      <option value="24">sky</option>
      <option value="25">brown</option>
      <option value="26">emerald</option>
      <option value="27">near white 1</option>
    <option value="28" >multi</option>
    <option value="29"  >two</option>
 </select>

<span style="display:none">
    <br><br>
    <span id="crazy-span">
        &nbsp;<input    type="button" value="crazyMode" onclick="crazy();" id="c-btn">
        <select id="changeColorTime">   
        <option value="60000">1m</option>
        <option value="120000">2m</option>
        <option value="180000">3m</option>
        <option value="3000" selected>3s</option>
        <option value="4000">4s</option>
        <option value="5000">5s</option>
        <option value="6000">6s</option>
        <option value="7000">7s</option>
        <option value="8000">8s</option>
        <option value="9000">9s</option>
        <option value="10000">10s</option>
      </select>
  </span>
    &nbsp; <input    type="button" value="nightMode" onclick="night();" id="nm-btn">
    &nbsp;<input    type="button" value="getRandomTxt"  onclick="getRndTxt();" id="rnd-btn">
    &nbsp;<input    type="button" value="reduceTxt" onclick="reduceTxt();" id="reduce-btn">
    <select id="superRnd" onchange="activaSRnd(this.value)">
        <option value="0" selected>Super Random none</option>
        <option value="0.01">0.01 (test)</option>
        <option value="0.1">0.1</option>
        <option value="0.15">0.15</option>
        <option value="0.2">0.2</option>
        <option value="0.25">0.25</option>
        <option value="0.3">0.3</option>
        <option value="0.35">0.35</option>
        <option value="0.5">0.5</option>
        <option value="0.8">0.8</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="20">20</option>
      <option value="25">25</option>
      <option value="30">30</option>
      <option value="35">35</option>
      <option value="40">40</option>
      <option value="50">50</option>
      <option value="55">55</option>
      <option value="60">60</option>
      <option value="65">65</option>
      <option value="70">70</option>
      <option value="100">100</option>
    </select>
    &nbsp;<a href="#" onclick="window.location=myLang;" id="goto-lang"></a>
    &nbsp;<a href="#" onclick="alert('You can use arrows keys to pass the pages.\ncontact: robertchalean@gmail.com c2020');">[?]</a>
    &nbsp;<div class="fb-share-button" data-href="http://leerencolores.appspot.com/circleColorAlphabet" data-layout="button_count" style="float:right;"></div>
    <br>
    <script type="text/javascript">
        bLoad=0;
    </script>
    <a href="#" onclick="bLoad=1; actualiza();" id="load">load</a>
    <a href="#" onclick="$('#put-all').val( JSON.stringify(alphabetColors)  );" id="show">show</a>
    <a href="#" onclick="$('#put-all').val(''); bLoad=0;" id="x-btn">[x]</a>
    <br>
    <textarea id="put-all" style="display:none;">
        {"0":"rgb(163,196,127)","1":"rgb(177,214,135)","2":"rgb(166,200,130)","3":"rgb(153,176,112)","4":"rgb(178,217,136)","5":"rgb(183,222,146)","6":"rgb(171,208,132)","7":"rgb(156,189,121)","8":"rgb(146,171,109)","9":"rgb(154,181,116)","a":"rgb(163,196,127)","b":"rgb(177,214,135)","c":"rgb(166,200,130)","d":"rgb(153,176,112)","e":"rgb(178,217,136)","f":"rgb(183,222,146)","g":"rgb(171,208,132)","h":"rgb(156,189,121)","i":"rgb(146,171,109)","j":"rgb(154,181,116)","k":"rgb(147,173,111)","l":"rgb(178,219,139)","m":"rgb(156,185,120)","n":"rgb(153,178,115)","ñ":"rgb(155,183,118)","o":"rgb(167,204,130)","p":"rgb(181,221,144)","q":"rgb(143,169,109)","r":"rgb(157,192,122)","s":"rgb(171,211,134)","t":"rgb(158,194,124)","u":"rgb(180,219,142)","v":"rgb(168,206,132)","w":"rgb(165,198,128)","x":"rgb(160,194,127)","y":"rgb(173,213,135)","z":"rgb(151,174,111)","A":"rgb(163,196,127)","á":"rgb(163,196,127)","Á":"rgb(163,196,127)","B":"rgb(177,214,135)","C":"rgb(166,200,130)","D":"rgb(153,176,112)","E":"rgb(178,217,136)","é":"rgb(178,217,136)","É":"rgb(178,217,136)","F":"rgb(183,222,146)","G":"rgb(171,208,132)","H":"rgb(156,189,121)","I":"rgb(146,171,109)","í":"rgb(146,171,109)","Í":"rgb(146,171,109)","J":"rgb(154,181,116)","K":"rgb(147,173,111)","L":"rgb(178,219,139)","M":"rgb(156,185,120)","N":"rgb(153,178,115)","Ñ":"rgb(155,183,118)","O":"rgb(167,204,130)","ó":"rgb(167,204,130)","Ó":"rgb(167,204,130)","P":"rgb(181,221,144)","Q":"rgb(143,169,109)","R":"rgb(157,192,122)","S":"rgb(171,211,134)","T":"rgb(158,194,124)","U":"rgb(180,219,142)","ú":"rgb(180,219,142)","Ú":"rgb(180,219,142)","V":"rgb(168,206,132)","W":"rgb(165,198,128)","X":"rgb(160,194,127)","Y":"rgb(173,213,135)","Z":"rgb(151,174,111)"}
    </textarea>
    <span style="display: none;">
    <br><br>    
    Get Text by Url <form id="enviar-url"><input type="text" value="http://www.pagina12.com.ar/diario/ultimas/20-306915-2016-08-15.html" name="url-text" id="url-text1"  style="width: 400px" onclick="$('#url-text1').val('');"> 
    <input    type="button" value="Ok" value="" onclick="getText();">    
    </form>
    </span>
    <br>
    <span id="manage-color">
        <input    type="button" value="saveColor" value="" onclick="saveColor();" id="saveColor-btn">
        &nbsp;<input    type="button" value="loadColor" value="" onclick="loadColor();" id="loadColor-btn">
        &nbsp;<input    type="button" value="showColor" value="" onclick="showColor();" id="showColor-btn">
        &nbsp;<input    type="button" value="saveColorText" value="" onclick="saveColorText();" id="saveColorText-btn">
        <br>
        <textarea id="color-input" rows="4" cols="100" style="font-family: monospace; background-color: rgb(174,183,175);"></textarea>
    </span>
</span>
</span>
<br>

<script type="text/javascript">bMyHide=0;</script>
<div id="esconder" style="position: fixed; right: 0px; bottom: 0px; zoom: 3;" onclick="bMyHide=!bMyHide; if(bMyHide){ $('#controls').hide(); }else{ $('#controls').show(); } ">O</div>



<script type="text/javascript">
myHtml=""

setTimeout(()=>{ 


//$(".fn").css("font-size","36px")
$(".fn").css("zoom","1")
return;
if(myHtml.length<100) return;
if(myHtml!=$("#screen3").html()) $("#screen3").html(myHtml)



 },500)
$(document.body).on('touchmove', onScroll); // for mobile
$(window).on('scroll', onScroll); 
//time=0
// callback
//alert()
bScroll=0
function onScroll(){ 
/*
if(bScroll) return;
bScroll=1
setTimeout(()=>{ bScroll=0; },500)


$("#screen3").html($("#screen3").html())
return
if(bScroll) return;
bScroll=1
setTimeout(()=>{ bScroll=0; },500)
pp=parseInt($("#myPage").val())
    $("#myPage").val(pp)
    console.log(pp)
    getPage(pp)
//alert()
*/
/*
    if( $(window).scrollTop() + window.innerHeight >= document.body.scrollHeight ) { 
        track_page++; 
        load_contents(track_page); 
    }*/
}

oculta();

jQuery( "#screen3, #lienzo" ).on( "swiperight", function( event ) 
  {
    pp=parseInt($("#myPage").val())-1
    if(pp<=0) pp=1;
    $("#myPage").val(pp)
    console.log(pp)
    getPage(pp)
    
  } );

jQuery( "#screen3, #lienzo" ).on( "swipeleft", function( event ) 
  {
    pp=parseInt($("#myPage").val())+1
    $("#myPage").val(pp)
    console.log(pp)
    getPage(pp)
    
  } );







result=true;
setInterval(function(){ 
      if(!result) return;
   // result=confirm();
 },5*1000*60)

arrPutSystem=[];
arrPutSystem[0]=`{"0":"rgb(163,196,127)","1":"rgb(177,214,135)","2":"rgb(166,200,130)","3":"rgb(153,176,112)","4":"rgb(178,217,136)","5":"rgb(183,222,146)","6":"rgb(171,208,132)","7":"rgb(156,189,121)","8":"rgb(146,171,109)","9":"rgb(154,181,116)","a":"rgb(163,196,127)","b":"rgb(177,214,135)","c":"rgb(166,200,130)","d":"rgb(153,176,112)","e":"rgb(178,217,136)","f":"rgb(183,222,146)","g":"rgb(171,208,132)","h":"rgb(156,189,121)","i":"rgb(146,171,109)","j":"rgb(154,181,116)","k":"rgb(147,173,111)","l":"rgb(178,219,139)","m":"rgb(156,185,120)","n":"rgb(153,178,115)","ñ":"rgb(155,183,118)","o":"rgb(167,204,130)","p":"rgb(181,221,144)","q":"rgb(143,169,109)","r":"rgb(157,192,122)","s":"rgb(171,211,134)","t":"rgb(158,194,124)","u":"rgb(180,219,142)","v":"rgb(168,206,132)","w":"rgb(165,198,128)","x":"rgb(160,194,127)","y":"rgb(173,213,135)","z":"rgb(151,174,111)","A":"rgb(163,196,127)","á":"rgb(163,196,127)","Á":"rgb(163,196,127)","B":"rgb(177,214,135)","C":"rgb(166,200,130)","D":"rgb(153,176,112)","E":"rgb(178,217,136)","é":"rgb(178,217,136)","É":"rgb(178,217,136)","F":"rgb(183,222,146)","G":"rgb(171,208,132)","H":"rgb(156,189,121)","I":"rgb(146,171,109)","í":"rgb(146,171,109)","Í":"rgb(146,171,109)","J":"rgb(154,181,116)","K":"rgb(147,173,111)","L":"rgb(178,219,139)","M":"rgb(156,185,120)","N":"rgb(153,178,115)","Ñ":"rgb(155,183,118)","O":"rgb(167,204,130)","ó":"rgb(167,204,130)","Ó":"rgb(167,204,130)","P":"rgb(181,221,144)","Q":"rgb(143,169,109)","R":"rgb(157,192,122)","S":"rgb(171,211,134)","T":"rgb(158,194,124)","U":"rgb(180,219,142)","ú":"rgb(180,219,142)","Ú":"rgb(180,219,142)","V":"rgb(168,206,132)","W":"rgb(165,198,128)","X":"rgb(160,194,127)","Y":"rgb(173,213,135)","Z":"rgb(151,174,111)"}`;

arrPutSystem[1]=`{"0":"rgb(194,7,7)","1":"rgb(190,3,1)","2":"rgb(222,40,44)","3":"rgb(228,49,57)","4":"rgb(242,65,69)","5":"rgb(235,53,60)","6":"rgb(231,50,60)","7":"rgb(219,40,40)","8":"rgb(217,38,37)","9":"rgb(239,63,67)","a":"rgb(194,7,7)","b":"rgb(190,3,1)","c":"rgb(222,40,44)","d":"rgb(228,49,57)","e":"rgb(242,65,69)","f":"rgb(235,53,60)","g":"rgb(231,50,60)","h":"rgb(219,40,40)","i":"rgb(217,38,37)","j":"rgb(239,63,67)","k":"rgb(237,56,62)","l":"rgb(222,41,50)","m":"rgb(193,5,3)","n":"rgb(211,22,24)","ñ":"rgb(213,27,31)","o":"rgb(213,24,27)","p":"rgb(205,16,15)","q":"rgb(203,13,13)","r":"rgb(211,19,20)","s":"rgb(239,59,64)","t":"rgb(225,47,55)","u":"rgb(216,34,35)","v":"rgb(208,18,17)","w":"rgb(199,12,11)","x":"rgb(195,10,10)","y":"rgb(223,43,54)","z":"rgb(215,31,32)","A":"rgb(194,7,7)","á":"rgb(194,7,7)","Á":"rgb(194,7,7)","B":"rgb(190,3,1)","C":"rgb(222,40,44)","D":"rgb(228,49,57)","E":"rgb(242,65,69)","é":"rgb(242,65,69)","É":"rgb(242,65,69)","F":"rgb(235,53,60)","G":"rgb(231,50,60)","H":"rgb(219,40,40)","I":"rgb(217,38,37)","í":"rgb(217,38,37)","Í":"rgb(217,38,37)","J":"rgb(239,63,67)","K":"rgb(237,56,62)","L":"rgb(222,41,50)","M":"rgb(193,5,3)","N":"rgb(211,22,24)","Ñ":"rgb(213,27,31)","O":"rgb(213,24,27)","ó":"rgb(213,24,27)","Ó":"rgb(213,24,27)","P":"rgb(205,16,15)","Q":"rgb(203,13,13)","R":"rgb(211,19,20)","S":"rgb(239,59,64)","T":"rgb(225,47,55)","U":"rgb(216,34,35)","ú":"rgb(216,34,35)","Ú":"rgb(216,34,35)","V":"rgb(208,18,17)","W":"rgb(199,12,11)","X":"rgb(195,10,10)","Y":"rgb(223,43,54)","Z":"rgb(215,31,32)"}`;

arrPutSystem[2]=`{"0":"rgb(61,45,236)","1":"rgb(32,22,210)","2":"rgb(76,66,248)","3":"rgb(74,64,246)","4":"rgb(65,50,239)","5":"rgb(47,34,225)","6":"rgb(39,28,221)","7":"rgb(40,30,224)","8":"rgb(58,43,235)","9":"rgb(71,57,244)","a":"rgb(61,45,236)","b":"rgb(32,22,210)","c":"rgb(76,66,248)","d":"rgb(74,64,246)","e":"rgb(65,50,239)","f":"rgb(47,34,225)","g":"rgb(39,28,221)","h":"rgb(40,30,224)","i":"rgb(58,43,235)","j":"rgb(71,57,244)","k":"rgb(38,25,219)","l":"rgb(62,48,238)","m":"rgb(27,18,195)","n":"rgb(72,61,245)","ñ":"rgb(31,21,206)","o":"rgb(34,25,217)","p":"rgb(27,19,200)","q":"rgb(53,38,233)","r":"rgb(32,25,213)","s":"rgb(56,39,235)","t":"rgb(70,54,242)","u":"rgb(77,68,251)","v":"rgb(48,36,228)","w":"rgb(51,36,231)","x":"rgb(42,33,225)","y":"rgb(28,19,205)","z":"rgb(68,51,241)","A":"rgb(61,45,236)","á":"rgb(61,45,236)","Á":"rgb(61,45,236)","B":"rgb(32,22,210)","C":"rgb(76,66,248)","D":"rgb(74,64,246)","E":"rgb(65,50,239)","é":"rgb(65,50,239)","É":"rgb(65,50,239)","F":"rgb(47,34,225)","G":"rgb(39,28,221)","H":"rgb(40,30,224)","I":"rgb(58,43,235)","í":"rgb(58,43,235)","Í":"rgb(58,43,235)","J":"rgb(71,57,244)","K":"rgb(38,25,219)","L":"rgb(62,48,238)","M":"rgb(27,18,195)","N":"rgb(72,61,245)","Ñ":"rgb(31,21,206)","O":"rgb(34,25,217)","ó":"rgb(34,25,217)","Ó":"rgb(34,25,217)","P":"rgb(27,19,200)","Q":"rgb(53,38,233)","R":"rgb(32,25,213)","S":"rgb(56,39,235)","T":"rgb(70,54,242)","U":"rgb(77,68,251)","ú":"rgb(77,68,251)","Ú":"rgb(77,68,251)","V":"rgb(48,36,228)","W":"rgb(51,36,231)","X":"rgb(42,33,225)","Y":"rgb(28,19,205)","Z":"rgb(68,51,241)"}`;

arrPutSystem[3]=`{"0":"rgb(229,206,22)","1":"rgb(223,203,11)","2":"rgb(239,220,38)","3":"rgb(234,217,30)","4":"rgb(234,211,28)","5":"rgb(231,208,26)","6":"rgb(226,205,18)","7":"rgb(218,195,4)","8":"rgb(247,225,49)","9":"rgb(234,214,29)","a":"rgb(229,206,22)","b":"rgb(223,203,11)","c":"rgb(239,220,38)","d":"rgb(234,217,30)","e":"rgb(234,211,28)","f":"rgb(231,208,26)","g":"rgb(226,205,18)","h":"rgb(218,195,4)","i":"rgb(247,225,49)","j":"rgb(234,214,29)","k":"rgb(233,208,28)","l":"rgb(237,220,36)","m":"rgb(221,198,6)","n":"rgb(245,223,45)","ñ":"rgb(242,221,38)","o":"rgb(225,205,15)","p":"rgb(236,218,35)","q":"rgb(222,200,7)","r":"rgb(224,204,13)","s":"rgb(220,196,5)","t":"rgb(223,202,8)","u":"rgb(243,222,44)","v":"rgb(227,206,20)","w":"rgb(246,223,48)","x":"rgb(230,207,24)","y":"rgb(235,217,33)","z":"rgb(243,221,41)","A":"rgb(229,206,22)","á":"rgb(229,206,22)","Á":"rgb(229,206,22)","B":"rgb(223,203,11)","C":"rgb(239,220,38)","D":"rgb(234,217,30)","E":"rgb(234,211,28)","é":"rgb(234,211,28)","É":"rgb(234,211,28)","F":"rgb(231,208,26)","G":"rgb(226,205,18)","H":"rgb(218,195,4)","I":"rgb(247,225,49)","í":"rgb(247,225,49)","Í":"rgb(247,225,49)","J":"rgb(234,214,29)","K":"rgb(233,208,28)","L":"rgb(237,220,36)","M":"rgb(221,198,6)","N":"rgb(245,223,45)","Ñ":"rgb(242,221,38)","O":"rgb(225,205,15)","ó":"rgb(225,205,15)","Ó":"rgb(225,205,15)","P":"rgb(236,218,35)","Q":"rgb(222,200,7)","R":"rgb(224,204,13)","S":"rgb(220,196,5)","T":"rgb(223,202,8)","U":"rgb(243,222,44)","ú":"rgb(243,222,44)","Ú":"rgb(243,222,44)","V":"rgb(227,206,20)","W":"rgb(246,223,48)","X":"rgb(230,207,24)","Y":"rgb(235,217,33)","Z":"rgb(243,221,41)"}`;


arrPutSystem[4]=`{"0":"rgb(227,36,227)","1":"rgb(229,37,227)","2":"rgb(222,30,220)","3":"rgb(234,42,235)","4":"rgb(210,14,212)","5":"rgb(215,19,214)","6":"rgb(221,25,217)","7":"rgb(223,31,224)","8":"rgb(217,22,215)","9":"rgb(213,14,212)","a":"rgb(227,36,227)","b":"rgb(229,37,227)","c":"rgb(222,30,220)","d":"rgb(234,42,235)","e":"rgb(210,14,212)","f":"rgb(215,19,214)","g":"rgb(221,25,217)","h":"rgb(223,31,224)","i":"rgb(217,22,215)","j":"rgb(213,14,212)","k":"rgb(221,29,219)","l":"rgb(210,12,211)","m":"rgb(231,38,233)","n":"rgb(230,38,228)","ñ":"rgb(218,23,216)","o":"rgb(226,34,227)","p":"rgb(233,40,235)","q":"rgb(220,24,216)","r":"rgb(224,34,226)","s":"rgb(215,16,214)","t":"rgb(221,27,218)","u":"rgb(216,21,214)","v":"rgb(232,40,233)","w":"rgb(223,34,224)","x":"rgb(213,16,213)","y":"rgb(231,38,230)","z":"rgb(222,30,223)","A":"rgb(227,36,227)","á":"rgb(227,36,227)","Á":"rgb(227,36,227)","B":"rgb(229,37,227)","C":"rgb(222,30,220)","D":"rgb(234,42,235)","E":"rgb(210,14,212)","é":"rgb(210,14,212)","É":"rgb(210,14,212)","F":"rgb(215,19,214)","G":"rgb(221,25,217)","H":"rgb(223,31,224)","I":"rgb(217,22,215)","í":"rgb(217,22,215)","Í":"rgb(217,22,215)","J":"rgb(213,14,212)","K":"rgb(221,29,219)","L":"rgb(210,12,211)","M":"rgb(231,38,233)","N":"rgb(230,38,228)","Ñ":"rgb(218,23,216)","O":"rgb(226,34,227)","ó":"rgb(226,34,227)","Ó":"rgb(226,34,227)","P":"rgb(233,40,235)","Q":"rgb(220,24,216)","R":"rgb(224,34,226)","S":"rgb(215,16,214)","T":"rgb(221,27,218)","U":"rgb(216,21,214)","ú":"rgb(216,21,214)","Ú":"rgb(216,21,214)","V":"rgb(232,40,233)","W":"rgb(223,34,224)","X":"rgb(213,16,213)","Y":"rgb(231,38,230)","Z":"rgb(222,30,223)"}`;

arrPutSystem[5]=`{"0":"rgb(112,113,124)","1":"rgb(143,147,161)","2":"rgb(135,131,149)","3":"rgb(118,121,140)","4":"rgb(132,128,149)","5":"rgb(142,145,158)","6":"rgb(105,103,111)","7":"rgb(117,119,137)","8":"rgb(121,122,142)","9":"rgb(110,112,121)","a":"rgb(112,113,124)","b":"rgb(143,147,161)","c":"rgb(135,131,149)","d":"rgb(118,121,140)","e":"rgb(132,128,149)","f":"rgb(142,145,158)","g":"rgb(105,103,111)","h":"rgb(117,119,137)","i":"rgb(121,122,142)","j":"rgb(110,112,121)","k":"rgb(116,117,134)","l":"rgb(140,135,152)","m":"rgb(128,127,148)","n":"rgb(149,149,165)","ñ":"rgb(141,139,153)","o":"rgb(107,107,117)","p":"rgb(101,99,107)","q":"rgb(124,124,143)","r":"rgb(127,124,146)","s":"rgb(137,135,149)","t":"rgb(109,108,120)","u":"rgb(113,115,127)","v":"rgb(141,142,156)","w":"rgb(107,104,114)","x":"rgb(102,101,110)","y":"rgb(115,117,129)","z":"rgb(145,148,164)","A":"rgb(112,113,124)","á":"rgb(112,113,124)","Á":"rgb(112,113,124)","B":"rgb(143,147,161)","C":"rgb(135,131,149)","D":"rgb(118,121,140)","E":"rgb(132,128,149)","é":"rgb(132,128,149)","É":"rgb(132,128,149)","F":"rgb(142,145,158)","G":"rgb(105,103,111)","H":"rgb(117,119,137)","I":"rgb(121,122,142)","í":"rgb(121,122,142)","Í":"rgb(121,122,142)","J":"rgb(110,112,121)","K":"rgb(116,117,134)","L":"rgb(140,135,152)","M":"rgb(128,127,148)","N":"rgb(149,149,165)","Ñ":"rgb(141,139,153)","O":"rgb(107,107,117)","ó":"rgb(107,107,117)","Ó":"rgb(107,107,117)","P":"rgb(101,99,107)","Q":"rgb(124,124,143)","R":"rgb(127,124,146)","S":"rgb(137,135,149)","T":"rgb(109,108,120)","U":"rgb(113,115,127)","ú":"rgb(113,115,127)","Ú":"rgb(113,115,127)","V":"rgb(141,142,156)","W":"rgb(107,104,114)","X":"rgb(102,101,110)","Y":"rgb(115,117,129)","Z":"rgb(145,148,164)"}`

arrPutSystem[6]=`{"0":"rgb(151,33,229)","1":"rgb(153,34,231)","2":"rgb(160,40,233)","3":"rgb(140,25,218)","4":"rgb(178,47,248)","5":"rgb(187,53,253)","6":"rgb(164,43,236)","7":"rgb(146,30,222)","8":"rgb(182,50,251)","9":"rgb(128,20,215)","a":"rgb(151,33,229)","b":"rgb(153,34,231)","c":"rgb(160,40,233)","d":"rgb(140,25,218)","e":"rgb(178,47,248)","f":"rgb(187,53,253)","g":"rgb(164,43,236)","h":"rgb(146,30,222)","i":"rgb(182,50,251)","j":"rgb(128,20,215)","k":"rgb(174,45,244)","l":"rgb(134,23,216)","m":"rgb(185,52,251)","n":"rgb(155,36,232)","ñ":"rgb(147,30,226)","o":"rgb(132,21,215)","p":"rgb(158,37,233)","q":"rgb(142,27,219)","r":"rgb(136,25,217)","s":"rgb(170,43,240)","t":"rgb(168,43,237)","u":"rgb(181,48,249)","v":"rgb(150,30,228)","w":"rgb(176,47,245)","x":"rgb(172,43,243)","y":"rgb(144,28,221)","z":"rgb(163,40,235)","A":"rgb(151,33,229)","á":"rgb(151,33,229)","Á":"rgb(151,33,229)","B":"rgb(153,34,231)","C":"rgb(160,40,233)","D":"rgb(140,25,218)","E":"rgb(178,47,248)","é":"rgb(178,47,248)","É":"rgb(178,47,248)","F":"rgb(187,53,253)","G":"rgb(164,43,236)","H":"rgb(146,30,222)","I":"rgb(182,50,251)","í":"rgb(182,50,251)","Í":"rgb(182,50,251)","J":"rgb(128,20,215)","K":"rgb(174,45,244)","L":"rgb(134,23,216)","M":"rgb(185,52,251)","N":"rgb(155,36,232)","Ñ":"rgb(147,30,226)","O":"rgb(132,21,215)","ó":"rgb(132,21,215)","Ó":"rgb(132,21,215)","P":"rgb(158,37,233)","Q":"rgb(142,27,219)","R":"rgb(136,25,217)","S":"rgb(170,43,240)","T":"rgb(168,43,237)","U":"rgb(181,48,249)","ú":"rgb(181,48,249)","Ú":"rgb(181,48,249)","V":"rgb(150,30,228)","W":"rgb(176,47,245)","X":"rgb(172,43,243)","Y":"rgb(144,28,221)","Z":"rgb(163,40,235)"}`

arrPutSystem[7]=`{"0":"rgb(206,238,99)","1":"rgb(187,231,83)","2":"rgb(195,234,93)","3":"rgb(191,231,88)","4":"rgb(182,226,78)","5":"rgb(184,227,78)","6":"rgb(201,237,96)","7":"rgb(181,226,76)","8":"rgb(199,234,95)","9":"rgb(188,231,85)","a":"rgb(206,238,99)","b":"rgb(187,231,83)","c":"rgb(195,234,93)","d":"rgb(191,231,88)","e":"rgb(182,226,78)","f":"rgb(184,227,78)","g":"rgb(201,237,96)","h":"rgb(181,226,76)","i":"rgb(199,234,95)","j":"rgb(188,231,85)","k":"rgb(190,231,86)","l":"rgb(186,229,80)","m":"rgb(202,238,97)","n":"rgb(186,230,82)","ñ":"rgb(204,238,98)","o":"rgb(178,226,73)","p":"rgb(193,231,89)","q":"rgb(179,226,75)","r":"rgb(193,233,90)","s":"rgb(193,234,92)","t":"rgb(199,237,95)","u":"rgb(177,224,73)","v":"rgb(207,239,103)","w":"rgb(185,228,79)","x":"rgb(206,238,102)","y":"rgb(209,239,104)","z":"rgb(197,234,94)","A":"rgb(206,238,99)","á":"rgb(206,238,99)","Á":"rgb(206,238,99)","B":"rgb(187,231,83)","C":"rgb(195,234,93)","D":"rgb(191,231,88)","E":"rgb(182,226,78)","é":"rgb(182,226,78)","É":"rgb(182,226,78)","F":"rgb(184,227,78)","G":"rgb(201,237,96)","H":"rgb(181,226,76)","I":"rgb(199,234,95)","í":"rgb(199,234,95)","Í":"rgb(199,234,95)","J":"rgb(188,231,85)","K":"rgb(190,231,86)","L":"rgb(186,229,80)","M":"rgb(202,238,97)","N":"rgb(186,230,82)","Ñ":"rgb(204,238,98)","O":"rgb(178,226,73)","ó":"rgb(178,226,73)","Ó":"rgb(178,226,73)","P":"rgb(193,231,89)","Q":"rgb(179,226,75)","R":"rgb(193,233,90)","S":"rgb(193,234,92)","T":"rgb(199,237,95)","U":"rgb(177,224,73)","ú":"rgb(177,224,73)","Ú":"rgb(177,224,73)","V":"rgb(207,239,103)","W":"rgb(185,228,79)","X":"rgb(206,238,102)","Y":"rgb(209,239,104)","Z":"rgb(197,234,94)"}`

arrPutSystem[8]=`{"0":"rgb(247,166,44)","1":"rgb(239,152,30)","2":"rgb(247,169,45)","3":"rgb(253,179,53)","4":"rgb(225,142,18)","5":"rgb(236,151,26)","6":"rgb(234,148,23)","7":"rgb(237,152,28)","8":"rgb(230,148,23)","9":"rgb(241,154,34)","a":"rgb(247,166,44)","b":"rgb(239,152,30)","c":"rgb(247,169,45)","d":"rgb(253,179,53)","e":"rgb(225,142,18)","f":"rgb(236,151,26)","g":"rgb(234,148,23)","h":"rgb(237,152,28)","i":"rgb(230,148,23)","j":"rgb(241,154,34)","k":"rgb(248,174,47)","l":"rgb(236,149,24)","m":"rgb(242,158,37)","n":"rgb(240,154,31)","ñ":"rgb(246,164,43)","o":"rgb(251,176,50)","p":"rgb(252,178,51)","q":"rgb(245,162,42)","r":"rgb(250,175,48)","s":"rgb(242,156,35)","t":"rgb(229,147,21)","u":"rgb(254,182,53)","v":"rgb(244,159,38)","w":"rgb(244,161,40)","x":"rgb(227,146,20)","y":"rgb(248,171,46)","z":"rgb(226,144,19)","A":"rgb(247,166,44)","á":"rgb(247,166,44)","Á":"rgb(247,166,44)","B":"rgb(239,152,30)","C":"rgb(247,169,45)","D":"rgb(253,179,53)","E":"rgb(225,142,18)","é":"rgb(225,142,18)","É":"rgb(225,142,18)","F":"rgb(236,151,26)","G":"rgb(234,148,23)","H":"rgb(237,152,28)","I":"rgb(230,148,23)","í":"rgb(230,148,23)","Í":"rgb(230,148,23)","J":"rgb(241,154,34)","K":"rgb(248,174,47)","L":"rgb(236,149,24)","M":"rgb(242,158,37)","N":"rgb(240,154,31)","Ñ":"rgb(246,164,43)","O":"rgb(251,176,50)","ó":"rgb(251,176,50)","Ó":"rgb(251,176,50)","P":"rgb(252,178,51)","Q":"rgb(245,162,42)","R":"rgb(250,175,48)","S":"rgb(242,156,35)","T":"rgb(229,147,21)","U":"rgb(254,182,53)","ú":"rgb(254,182,53)","Ú":"rgb(254,182,53)","V":"rgb(244,159,38)","W":"rgb(244,161,40)","X":"rgb(227,146,20)","Y":"rgb(248,171,46)","Z":"rgb(226,144,19)"}`

arrPutSystem[9]=`{"0":"rgb(223,175,156)","1":"rgb(221,173,152)","2":"rgb(228,191,163)","3":"rgb(224,178,156)","4":"rgb(228,188,162)","5":"rgb(231,197,170)","6":"rgb(222,174,154)","7":"rgb(217,168,145)","8":"rgb(220,172,150)","9":"rgb(234,198,174)","a":"rgb(223,175,156)","b":"rgb(221,173,152)","c":"rgb(228,191,163)","d":"rgb(224,178,156)","e":"rgb(228,188,162)","f":"rgb(231,197,170)","g":"rgb(222,174,154)","h":"rgb(217,168,145)","i":"rgb(220,172,150)","j":"rgb(234,198,174)","k":"rgb(236,201,177)","l":"rgb(225,182,159)","m":"rgb(238,204,188)","n":"rgb(232,198,172)","ñ":"rgb(225,180,157)","o":"rgb(229,194,167)","p":"rgb(218,169,147)","q":"rgb(238,201,183)","r":"rgb(228,193,165)","s":"rgb(218,171,149)","t":"rgb(225,184,161)","u":"rgb(238,203,185)","v":"rgb(227,186,161)","w":"rgb(216,165,145)","x":"rgb(231,194,169)","y":"rgb(236,201,181)","z":"rgb(234,201,175)","A":"rgb(223,175,156)","á":"rgb(223,175,156)","Á":"rgb(223,175,156)","B":"rgb(221,173,152)","C":"rgb(228,191,163)","D":"rgb(224,178,156)","E":"rgb(228,188,162)","é":"rgb(228,188,162)","É":"rgb(228,188,162)","F":"rgb(231,197,170)","G":"rgb(222,174,154)","H":"rgb(217,168,145)","I":"rgb(220,172,150)","í":"rgb(220,172,150)","Í":"rgb(220,172,150)","J":"rgb(234,198,174)","K":"rgb(236,201,177)","L":"rgb(225,182,159)","M":"rgb(238,204,188)","N":"rgb(232,198,172)","Ñ":"rgb(225,180,157)","O":"rgb(229,194,167)","ó":"rgb(229,194,167)","Ó":"rgb(229,194,167)","P":"rgb(218,169,147)","Q":"rgb(238,201,183)","R":"rgb(228,193,165)","S":"rgb(218,171,149)","T":"rgb(225,184,161)","U":"rgb(238,203,185)","ú":"rgb(238,203,185)","Ú":"rgb(238,203,185)","V":"rgb(227,186,161)","W":"rgb(216,165,145)","X":"rgb(231,194,169)","Y":"rgb(236,201,181)","Z":"rgb(234,201,175)"}`

arrPutSystem[10]=`{"0":"rgb(35,211,215)","1":"rgb(31,204,211)","2":"rgb(26,192,208)","3":"rgb(45,217,224)","4":"rgb(33,205,213)","5":"rgb(23,185,203)","6":"rgb(17,179,200)","7":"rgb(29,201,211)","8":"rgb(38,215,218)","9":"rgb(42,217,222)","a":"rgb(35,211,215)","b":"rgb(31,204,211)","c":"rgb(26,192,208)","d":"rgb(45,217,224)","e":"rgb(33,205,213)","f":"rgb(23,185,203)","g":"rgb(17,179,200)","h":"rgb(29,201,211)","i":"rgb(38,215,218)","j":"rgb(42,217,222)","k":"rgb(21,184,201)","l":"rgb(48,219,224)","m":"rgb(52,221,233)","n":"rgb(55,224,237)","ñ":"rgb(52,220,229)","o":"rgb(25,186,205)","p":"rgb(17,177,197)","q":"rgb(49,220,227)","r":"rgb(54,221,236)","s":"rgb(59,225,237)","t":"rgb(38,212,216)","u":"rgb(28,197,211)","v":"rgb(25,188,208)","w":"rgb(40,217,219)","x":"rgb(17,183,201)","y":"rgb(34,208,214)","z":"rgb(26,195,210)","A":"rgb(35,211,215)","á":"rgb(35,211,215)","Á":"rgb(35,211,215)","B":"rgb(31,204,211)","C":"rgb(26,192,208)","D":"rgb(45,217,224)","E":"rgb(33,205,213)","é":"rgb(33,205,213)","É":"rgb(33,205,213)","F":"rgb(23,185,203)","G":"rgb(17,179,200)","H":"rgb(29,201,211)","I":"rgb(38,215,218)","í":"rgb(38,215,218)","Í":"rgb(38,215,218)","J":"rgb(42,217,222)","K":"rgb(21,184,201)","L":"rgb(48,219,224)","M":"rgb(52,221,233)","N":"rgb(55,224,237)","Ñ":"rgb(52,220,229)","O":"rgb(25,186,205)","ó":"rgb(25,186,205)","Ó":"rgb(25,186,205)","P":"rgb(17,177,197)","Q":"rgb(49,220,227)","R":"rgb(54,221,236)","S":"rgb(59,225,237)","T":"rgb(38,212,216)","U":"rgb(28,197,211)","ú":"rgb(28,197,211)","Ú":"rgb(28,197,211)","V":"rgb(25,188,208)","W":"rgb(40,217,219)","X":"rgb(17,183,201)","Y":"rgb(34,208,214)","Z":"rgb(26,195,210)"}`

arrPutSystem[11]=`{"0":"rgb(186,114,47)","1":"rgb(220,150,72)","2":"rgb(199,136,57)","3":"rgb(223,151,73)","4":"rgb(208,142,67)","5":"rgb(206,140,66)","6":"rgb(192,123,52)","7":"rgb(203,139,60)","8":"rgb(189,118,50)","9":"rgb(193,126,53)","a":"rgb(186,114,47)","b":"rgb(220,150,72)","c":"rgb(199,136,57)","d":"rgb(223,151,73)","e":"rgb(208,142,67)","f":"rgb(206,140,66)","g":"rgb(192,123,52)","h":"rgb(203,139,60)","i":"rgb(189,118,50)","j":"rgb(193,126,53)","k":"rgb(178,107,37)","l":"rgb(202,137,58)","m":"rgb(211,143,68)","n":"rgb(182,109,41)","ñ":"rgb(191,119,52)","o":"rgb(183,112,42)","p":"rgb(180,108,39)","q":"rgb(186,116,50)","r":"rgb(194,129,54)","s":"rgb(218,149,70)","t":"rgb(212,146,69)","u":"rgb(217,146,69)","v":"rgb(184,113,45)","w":"rgb(196,131,55)","x":"rgb(205,139,63)","y":"rgb(175,107,35)","z":"rgb(198,132,57)","A":"rgb(186,114,47)","á":"rgb(186,114,47)","Á":"rgb(186,114,47)","B":"rgb(220,150,72)","C":"rgb(199,136,57)","D":"rgb(223,151,73)","E":"rgb(208,142,67)","é":"rgb(208,142,67)","É":"rgb(208,142,67)","F":"rgb(206,140,66)","G":"rgb(192,123,52)","H":"rgb(203,139,60)","I":"rgb(189,118,50)","í":"rgb(189,118,50)","Í":"rgb(189,118,50)","J":"rgb(193,126,53)","K":"rgb(178,107,37)","L":"rgb(202,137,58)","M":"rgb(211,143,68)","N":"rgb(182,109,41)","Ñ":"rgb(191,119,52)","O":"rgb(183,112,42)","ó":"rgb(183,112,42)","Ó":"rgb(183,112,42)","P":"rgb(180,108,39)","Q":"rgb(186,116,50)","R":"rgb(194,129,54)","S":"rgb(218,149,70)","T":"rgb(212,146,69)","U":"rgb(217,146,69)","ú":"rgb(217,146,69)","Ú":"rgb(217,146,69)","V":"rgb(184,113,45)","W":"rgb(196,131,55)","X":"rgb(205,139,63)","Y":"rgb(175,107,35)","Z":"rgb(198,132,57)"}`

arrPutSystem[12] =`{"0":"rgb(56,205,110)","1":"rgb(69,214,128)","2":"rgb(33,190,83)","3":"rgb(36,192,88)","4":"rgb(71,216,129)","5":"rgb(44,195,97)","6":"rgb(40,193,93)","7":"rgb(59,206,111)","8":"rgb(65,211,120)","9":"rgb(52,201,108)","a":"rgb(56,205,110)","b":"rgb(69,214,128)","c":"rgb(33,190,83)","d":"rgb(36,192,88)","e":"rgb(71,216,129)","f":"rgb(44,195,97)","g":"rgb(40,193,93)","h":"rgb(59,206,111)","i":"rgb(65,211,120)","j":"rgb(52,201,108)","k":"rgb(68,212,126)","l":"rgb(48,198,105)","m":"rgb(47,195,99)","n":"rgb(50,199,107)","ñ":"rgb(75,222,134)","o":"rgb(31,189,81)","p":"rgb(47,196,103)","q":"rgb(60,207,114)","r":"rgb(38,192,91)","s":"rgb(61,210,115)","t":"rgb(54,203,109)","u":"rgb(73,221,132)","v":"rgb(42,195,94)","w":"rgb(33,191,87)","x":"rgb(72,218,131)","y":"rgb(66,211,124)","z":"rgb(64,211,116)","A":"rgb(56,205,110)","á":"rgb(56,205,110)","Á":"rgb(56,205,110)","B":"rgb(69,214,128)","C":"rgb(33,190,83)","D":"rgb(36,192,88)","E":"rgb(71,216,129)","é":"rgb(71,216,129)","É":"rgb(71,216,129)","F":"rgb(44,195,97)","G":"rgb(40,193,93)","H":"rgb(59,206,111)","I":"rgb(65,211,120)","í":"rgb(65,211,120)","Í":"rgb(65,211,120)","J":"rgb(52,201,108)","K":"rgb(68,212,126)","L":"rgb(48,198,105)","M":"rgb(47,195,99)","N":"rgb(50,199,107)","Ñ":"rgb(75,222,134)","O":"rgb(31,189,81)","ó":"rgb(31,189,81)","Ó":"rgb(31,189,81)","P":"rgb(47,196,103)","Q":"rgb(60,207,114)","R":"rgb(38,192,91)","S":"rgb(61,210,115)","T":"rgb(54,203,109)","U":"rgb(73,221,132)","ú":"rgb(73,221,132)","Ú":"rgb(73,221,132)","V":"rgb(42,195,94)","W":"rgb(33,191,87)","X":"rgb(72,218,131)","Y":"rgb(66,211,124)","Z":"rgb(64,211,116)"}`

arrPutSystem[13]=`{"0":"rgb(200,189,189)","1":"rgb(198,188,187)","2":"rgb(218,208,202)","3":"rgb(233,233,227)","4":"rgb(219,210,204)","5":"rgb(202,191,190)","6":"rgb(222,214,207)","7":"rgb(214,204,200)","8":"rgb(205,198,195)","9":"rgb(205,193,195)","a":"rgb(200,189,189)","b":"rgb(198,188,187)","c":"rgb(218,208,202)","d":"rgb(233,233,227)","e":"rgb(219,210,204)","f":"rgb(202,191,190)","g":"rgb(222,214,207)","h":"rgb(214,204,200)","i":"rgb(205,198,195)","j":"rgb(205,193,195)","k":"rgb(226,224,213)","l":"rgb(211,202,200)","m":"rgb(208,200,195)","n":"rgb(227,226,215)","ñ":"rgb(235,233,230)","o":"rgb(230,230,218)","p":"rgb(228,228,217)","q":"rgb(226,218,209)","r":"rgb(238,234,231)","s":"rgb(223,217,208)","t":"rgb(220,212,206)","u":"rgb(230,231,222)","v":"rgb(203,193,192)","w":"rgb(226,221,211)","x":"rgb(210,200,198)","y":"rgb(231,232,225)","z":"rgb(216,207,200)","A":"rgb(200,189,189)","á":"rgb(200,189,189)","Á":"rgb(200,189,189)","B":"rgb(198,188,187)","C":"rgb(218,208,202)","D":"rgb(233,233,227)","E":"rgb(219,210,204)","é":"rgb(219,210,204)","É":"rgb(219,210,204)","F":"rgb(202,191,190)","G":"rgb(222,214,207)","H":"rgb(214,204,200)","I":"rgb(205,198,195)","í":"rgb(205,198,195)","Í":"rgb(205,198,195)","J":"rgb(205,193,195)","K":"rgb(226,224,213)","L":"rgb(211,202,200)","M":"rgb(208,200,195)","N":"rgb(227,226,215)","Ñ":"rgb(235,233,230)","O":"rgb(230,230,218)","ó":"rgb(230,230,218)","Ó":"rgb(230,230,218)","P":"rgb(228,228,217)","Q":"rgb(226,218,209)","R":"rgb(238,234,231)","S":"rgb(223,217,208)","T":"rgb(220,212,206)","U":"rgb(230,231,222)","ú":"rgb(230,231,222)","Ú":"rgb(230,231,222)","V":"rgb(203,193,192)","W":"rgb(226,221,211)","X":"rgb(210,200,198)","Y":"rgb(231,232,225)","Z":"rgb(216,207,200)"}`


abc4="EAOSRNIDLCTUMPBGVYQHFZJÑXKW0123456789"
abc44="EAOSRNIDLCTUMPBGVYQHFZJÑXKW"
abc45="EAOSRNIDLCTUMPBGVYQHFJÑKW"

bNightMode=0;
bPrev=0;
bNext=0;
contadorRnd=0;

bCrazy=0;
var killCrazy;

bNoChangePage=0;



function crazy(){
    bCrazy=!bCrazy;
    bNoChangePage=!bNoChangePage;

    if(bCrazy){

        $("#alphabetSelected").val("2");

        mode=1; bPrev=0; bNext=0;  play();

        killCrazy=setInterval(function(){

            mode=1; bPrev=0; bNext=0;  play();

        },parseInt($("#changeColorTime").val()));

    }else{

        clearInterval(killCrazy);
    }
}

function getRndTxt(){
  //  contadorRnd++;
  // if(contadorRnd>4)
   //  return;
 try{

    if(rndtxt=="e"){   
         $.ajax({url: "./mr.php?rnd=1&libro="+$("#book").val()+"&cPage=aleatory&limit=10000", success: function(result){
        $("#input1").val(result);
        mode=1; bPrev=0; bNext=0;  play();
        }});

    }else{
         $.ajax({url: "./mr.php?rnd=1&libro="+$("#book").val()+rndtxt+"&cPage=aleatory&limit=1600", success: function(result){
        $("#input1").val(result);
        mode=1; bPrev=0; bNext=0;  play();
        $("#screen3").html("")
        
         as = parseInt($("#alphabetSelected").val());

    if(as==0) alphabetColors = abc1;
    if(as==1) alphabetColors = abc3;
    if(as==2){ 
        if(loadColorMode==0) rndAlpha(); 
        alphabetColors = abcRand; 

    } 
    if(as==3) alphabetColors = abcGreen;
    if(as==4) alphabetColors = abcBlue;
    if(as==5) alphabetColors = abcRed;
    if(as==6) alphabetColors = abcSkin;
    if(as==7) alphabetColors = abcGray;
    if(as==8) alphabetColors = abcYellow;
    if(as==9) alphabetColors = abcPink;
    if(as==10) alphabetColors = abcOrange;
    if(as==11) alphabetColors = abcViolet;
    if(as==3) alphabetColors = abcGreen;
  if(as>13 && as<28){
      alphabetColors = eval(JSON.parse(arrPutSystem[as-14]));
 
 }
    
        for(let i=0;i<result.length;i++){
            
            let a=result[i];
            try{
            if(a==" "){
                $("#screen3").append(`<span>&nbsp;</span>`);
            }else{
                
                
                    $("#screen3").append(`<span style="color: ${alphabetColors[a]};">${a}</span>`);
                    
                
            }
            }catch(err){
          $("#screen3").append(err)
                    
                }
        }
        
    }});

    }

   
 }catch(err){
     alert(err)
 }


}

function saveTime(){
countWords=0  
if(time>10 && time<800 && !bScroll){
    localStorage.setItem("myCat3", time+","+cat3 )
   if(!bScroll)  time=0; 
}    

cat3 = localStorage.getItem("myCat3");

$("#cat3").html(cat3)

}

function getBook(x){
    
        //$("body").scrollLeft(0)
    var bb=x
    //var set= x+"##"+ $("#book").val() +"##"+ $("#alphabetSelected").val()
    cat1=localStorage.getItem("myCat1" )
   //$("#myPage").val(x)

var split=cat1.split("||")
var pp=""
lib2=[]

for(let i=0;i<split.length;i++){
    sp1=split[i].split("##")
    lib2[i]=[]
    lib2[i]=sp1
    
}
var bSelect=0;
var pageSelect=1;
for(let i=0;i<lib.length;i++){
   // var pp1="1##"+lib[i]+"##"+$("#alphabetSelected").val()
   // var current=lib[i]+""
console.log(lib[i])
    
    if( lib[i] ==bb){
        for(var j=0;j<lib2.length;j++){
       if(lib[i]== lib2[j][1] ){
         // pp1=   lib2[j][0]+ "##"+ lib2[j][1] +"##"+ lib2[j][2]
            pageSelect=lib2[j][0]
            bSelect=1;
            break;
          }
       }
    }
    
    if(bSelect) break;
    
   // pp+=pp1
    
   // if(i<lib.length-1) pp+="||";
    
     continue;
    sp1=split[i].split("##")
    lib2[i]=[]
    lib2[i]=sp1
    
}

setTimeout(
    function(pageSelect){
        getPage(pageSelect);
        
    },50,pageSelect )



//alert(pp)

//localStorage.setItem("myCat1", pp)
    
    
}
result=""


function getPage(x){


  saveTime()

  
    
    
    wordTxt = $("#words-txt").html();
    
arrayPalabras=wordTxt.split(" ");
po=arrayPalabras
po=_.shuffle(arrayPalabras).join("")
//po=_.shuffle(arrayPalabras).join("")
//alert(po)
    
    //alert($("#lienzo").css("visibility"))
    
  //  document.getElementById("screen3").scrollIntoView({behavior: 'smooth'})
 if($("#lienzo").css("visibility")!="visible")  window.scrollTo({ top: 0, behavior: 'smooth' }); 
    //$("body").scrollLeft(0)
    bb=$("#book").val()
    var set= x+"##"+ $("#book").val() +"##"+ $("#alphabetSelected").val()
    localStorage.setItem("myCat", set )
   $("#myPage").val(x)

var split=cat1.split("||")
var pp=""
lib2=[]

for(let i=0;i<split.length;i++){
    sp1=split[i].split("##")
    lib2[i]=[]
    lib2[i]=sp1
    
}
for(let i=0;i<lib.length;i++){
    var pp1="1##"+lib[i]+"##"+$("#alphabetSelected").val()
   // var current=lib[i]+""
console.log(lib[i])
    for(let j=0;j<lib2.length;j++){
        if(lib[i]==lib2[j][1]){
            pp1=   lib2[j][0]+ "##"+ lib2[j][1] +"##"+ lib2[j][2]
            
        }
    }
    if( lib[i] ==bb){
        pp1=set
    }
    
    pp+=pp1
    
    if(i<lib.length-1) pp+="||";
    
     continue;
    sp1=split[i].split("##")
    lib2[i]=[]
    lib2[i]=sp1
    
}

//alert(pp)

localStorage.setItem("myCat1", pp)
//re=RegExp("/\d+##"+bb+"/")
  // cat1=cat1.replace(/\d+##${bb}/, x+"##"+bb);
 //alert(lib2)
    try{

   if(parseInt(x)==0) return;

     tipoMuestra=0;
    //ontadorRnd++;

    //$("#center-screen").append("<br>Loading page...");
    largo=1600;
    if(bb.search("youtube")!=-1) largo=3200;

<? if($_SERVER['SERVER_PORT'] ==8013){ ?>
    x=_.random(1,200)

<? } ?>

    $.ajax({url: "./mr.php?rnd=1&libro="+$("#book").val()+"&cPage="+x+"&limit="+largo, success: function(result){
        //$("#input1").val(result);
  indiceLeer=0;
//result="      aAÁáeESS"
       $("#input1").val(result.replace(/[0-9]/g, ""));
asdasd=(result)
        mode=1; bPrev=0; bNext=0;  play();
      if(bb.search("youtube")!=-1)  result=result.replace(/[0-9]/g, "").split(",").join("");
        // $("#center-screen").append("<br>");
       // mode=1; bPrev=0; bNext=0;  play();
      $("#screen3").html("") 
    
    //$("#screen3").css("background-color","#82a67e");
    
    as = parseInt($("#alphabetSelected").val());
    
   // if(as>0) $("#screen3").css("background-color","black");

    alphabetColors = abc1;
    
    if(as==0) alphabetColors = abc1;
    if(as==1 || as==29) alphabetColors = abc3;
    if(as==2){ 
        if(loadColorMode==0) rndAlpha(); 
        alphabetColors = abcRand; 

    } 
    if(as==3) alphabetColors = abcGreen;
    if(as==4) alphabetColors = abcBlue;
    if(as==5) alphabetColors = abcRed;
    if(as==6) alphabetColors = abcSkin;
    if(as==7) alphabetColors = abcGray;
    if(as==8) alphabetColors = abcYellow;
    if(as==9) alphabetColors = abcPink;
    if(as==10) alphabetColors = abcOrange;
    if(as==11) alphabetColors = abcViolet;
    
    if(as>13 && as<28){
    //  alphabetColors = eval(arrPutSystem[as-14]);
  alphabetColors = eval(JSON.parse(arrPutSystem[as-14]));
 ponerMuestraLetras()
}

p=""
p1=result.split(".")
for(let i=0;i<p1.length;i++){
    for(let j=0;j<parseInt($("#repeat").val());j++){
        p+=p1[i]+". ";
    }
}
result=p

 myColor=0;
myColor1=0;
rndAlpha(); 
abcRand1=abcRand
rndAlpha(); 
        //alphabetColors = abcRand; 
    bColorear=1
    xxx=0
    xxx1=0
bPML = 1
bCha1=0;
$("#clock1").html(result.split(" ").length)
   for(let i=0;i<result.length;i++){
    
    
    if(bMultiColor && parseInt($("#repeat").val())>1){
       
      if(myColor==0){
        alphabetColors=abc1;
      }
    if(myColor==1){
   //     alphabetColors=eval(JSON.parse(arrPutSystem[myColor-1]))
        alphabetColors=abc3;
      }
    if(myColor==2){
   //     alphabetColors=eval(JSON.parse(arrPutSystem[myColor-1]))
        //alphabetColors=abc3;
        alphabetColors=eval(JSON.parse(arrPutSystem[myColor-2]))
   
        alphabetColors = abcRand1;
   }
    if(myColor>2){
        alphabetColors=eval(JSON.parse(arrPutSystem[myColor-2]));
       // rndAlpha(); 
         
        alphabetColors = abcRand; 
      }
        
    }
    if(as==28){
        
        if(myColor1==14) myColor1=0;
        
        alphabetColors=eval(JSON.parse(arrPutSystem[myColor1]))
        
        
    }

if( bPML ){   bPML=0;  ponerMuestraLetras(); }
      as = parseInt($("#alphabetSelected").val());
    
   // if(as>0) $("#screen3").css("background-color","black");

    alphabetColors = abc1;
    
    if(as==0) alphabetColors = abc1;
    if(as==1 || as==29) alphabetColors = abc3;
    if(as==2){ 
        if(loadColorMode==0) rndAlpha(); 
        alphabetColors = abcRand; 

    } 
    if(as==3) alphabetColors = abcGreen;
    if(as==4) alphabetColors = abcBlue;
    if(as==5) alphabetColors = abcRed;
    if(as==6) alphabetColors = abcSkin;
    if(as==7) alphabetColors = abcGray;
    if(as==8) alphabetColors = abcYellow;
    if(as==9) alphabetColors = abcPink;
    if(as==10) alphabetColors = abcOrange;
    if(as==11) alphabetColors = abcViolet;
if(bCha){
if(bJump%3==0 && bJump!=0) bCha1=elegido;
if(bCha1==0) alphabetColors = abc1; 
if(bCha1==1) alphabetColors = abc3; 
if(bCha1==2 ) alphabetColors = abc100;
if(bCha1==3 ) alphabetColors = abc101;
if(bCha1==4 ) alphabetColors = abc102;
if(bCha1==5 ) alphabetColors = abc109;
if(bCha1==6 ) alphabetColors = abc104;
if(bCha1==7 ) alphabetColors = abc103;
if(bCha1==8 ) alphabetColors = abc110;
if(bCha1==9 ) alphabetColors = abc111;
   } 
    aaaa=result[i+5];
            
            let a= result[i];
            try{
                
                if(a=="\n"){
                    $("#screen3").append(`<span style="color:white;">,&nbsp;</span>`)
                    continue;
                }
                if(a==","){
                    $("#screen3").append(`<span style="color:white;">,&nbsp;</span>`)
                    continue;
                }
                
                if(a=="."){
                    $("#screen3").append(`<span style="color:white;">.&nbsp;</span>`)
                   myColor++
                myColor1++
                if(myColor==parseInt($("#repeat").val())) myColor=0;
                
                
                 continue;
                }
            if(a==" "){
//if(bCha1==2) bCha1=_.random(0,1);
//bCha1=!bCha1;
bCha1++
if(bCha1==limitation) bCha1=0;
//if(_.random(1,100)<20) bCha1=2;
          //    countWords++
               // xxx++
                bColorear=1
                $("#screen3").append(`<span> &nbsp;  &nbsp; </span>`);
           continue;
         }
        if(a=="\n" || a=="–" || a=="¡" || a=="‘" || a=="“" || a=="¿" || a=="—"){
                bColorear=1
               $("#screen3").append(`<span>${a}</span>`);
           continue;
         }
         col2=""
    if(as==29){
        col2=`-webkit-text-stroke-width: 3px; -webkit-text-stroke-color: ${abc1[a]}; font-size:39px;`
    }
    try{
        
        colcol=alphabetColors[a]
          if(bColorear){
              bColorear=0
           // colcol=alphabetColors[a]
          }   
          //  if(_.random(0,1)) colcol=alphabetColors[_.sample(abecedario33.split(""))+""];
            po1 =_.sample(abc44.split(""))
if(b50 && _.random(0,1)) po1=a.toUpperCase();
if(b20 && _.random(0,100)<=20) po1=a.toUpperCase();
if(bBloque) po1="■";
if(bFull) po1=a.toUpperCase();
             //po1=po[xxx]
           colcol1=colcol
           colcol= varcolor(colcol)
border=""
if(bExtreme){

if(_.random(0,1)){

}else{
colcol=abc1[_.sample(abc45.replace("z","").replace("x","").split(""))]
po1=a.toUpperCase()
if(_.random(1,5)==1) colcol=abc1[po1];

}


}
abecedario ="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
mul=0
sis=28
try{
mul=abecedario.search(quitaAcentos(a).toUpperCase())
sis+=(4* mul )
if(limitation<=2) sis=60;
limitOpacity=0
limitOpacity1=255
bg=""
//cmode
if(modeC){ bg="background-color: "+ 'rgb('+randomIntFromInterval( limitOpacity ,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+'); ';
 +";";
try{

bg="background-color: " +  alphabetColors[aaaa]+"; ";

}catch(err){}
//arrayFlash[a.toLowerCase()]='rgb('+randomIntFromInterval( limitOpacity ,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+'); ';
}
trans='transform: scale(0.5, 1) !important; transform-origin: left; '
if(bTrans){
tx=_.random(0,30)
tay=_.random(0,30)
tz=_.random(0,30)
if(_.random(0,1)) tx*=-1;
if(_.random(0,1)) ty*=-1;
if(_.random(0,1)) tz*=-1;
//trans='  transform: rotateX('+tx+'deg); transform: rotateY('+ty+'deg); transform: rotateZ('+tz+'deg);'
//$("#screen3").append(trans)
}

//<?=!isset($_GET['big'])?"sis=60":""?>

var fuentes = [

            'Arial', 'Verdana', 'Helvetica', 'Tahoma', 

            'Trebuchet MS', 'Times New Roman', 'Georgia', 

            'Garamond', 'Courier New', 'Brush Script MT'

        ];
 

        // Seleccionar una fuente al azar

        var fuenteAleatoria = _.sample(fuentes);
 var fuenteAleatoria = fuentes[0];


        // Crear una variable CSS

        var css = `   z-index:1;  font-size: ${sis}px; /* font-family: 'Roboto'; */ `;


if(bVar) border="-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: "+varcolor(colcol1)+";";
      if(a.toLowerCase()=="z" || a.toLowerCase()=="x"  || a.toLowerCase()=="a")  border="-webkit-text-stroke-width: 0.5px; -webkit-text-stroke-color: gray;";
        if(bSame) po1=a;
//if(bCha1==2 ) po1=a;
           $("#screen3").append(`<span class="l-${a.toLowerCase()} fn pos-${i}" style="${bg}; color: ${ colcol}; ${col2}  ${border} ${css} ${trans} " oncontextmenu="window.speechSynthesis.cancel();" onclick="if(this.count==null){ this.count=0; } this.count++;   /*$(this).css('background-color','gray'); */ indiceLeer=${i}; leer(asdasd); $(this).html('${a.toUpperCase()}'); gp();"><div class="lll-${a.toUpperCase()}" style="${trans} padding: 0px $-{mul*5}px 0px -${mul*5}px;   display:inline-block; ">${ po1 }</div><!-- ${colcol1} ${colcol}--></span>`);
  }catch(err){
//alert(err);
}         

     xxx++
           //     if(xxx1==po[xxx].length) xxx1=0;
                if(xxx==500){
                    wordTxt = $("#words-txt").html();
    
arrayPalabras=wordTxt.split(" ");
po=_.shuffle(arrayPalabras).join("")
xxx=0;
                }   
    }catch(err){
       // alert(err);
        bColorear=1;
    }     
            
            }catch(err){
          $("#screen3").append(err)
                    
                }
        }


     }});
    
    }catch(err){
     //   alert(err)
    }
acum=0;
for(let i=0;i<result.length;i++){
setTimeout(function(x,y){
$(".pos-"+x).html(y);
},acum,i,result[i]);
acum+=500;
}
mode=1; bPrev=0; bNext=0;  play();
    myHtml=$("#screen3").html()

}

function night(){

    bNightMode=!bNightMode;

    if(bNightMode){
        $("#nm-btn").val("dayMode");

        $("body").css("background-color","black");
        $("body").css("color","green");

    }else{

        $("#nm-btn").val("nightMode");

        $("body").css("background-color","white");
        $("body").css("color","black");


    }
}

function varcolor(x,zz=-1){

 //  if(bVar==0) return x;
    var as=parseInt($("#alphabetSelected").val())
    
    
    y=parseInt($("#color").val())
    y1=parseInt($("#color1").val())

  if(zz!=-1) y=parseInt($("#color3").val());   //y=zz;
 if(zz!=-1) y=50;  
y=20;
 
    if(as>2 || y==0) return x;

//alert("var")
    
   // console.log(x)
   x=x.split(" ").join("")
    x=x.split("rgb(").join("")
    x=x.split(")").join("")
    x=x.split(" ").join("")
    x=x.split(",")
  
    x[0]=parseInt(x[0])
    x[1]=parseInt(x[1])
    x[2]=parseInt(x[2])
    
    for(;;){
        var m=[]
        m[0]=_.random(0,1)?parseInt("-"+_.random(y1,y)):parseInt(_.random(1,y))
        m[1]=_.random(0,1)?parseInt("-"+_.random(y1,y)):parseInt(_.random(1,y))
        m[2]=_.random(0,1)?parseInt("-"+_.random(y1,y)):parseInt(_.random(1,y))
            
        if((x[0]+m[0])>255 || (x[0]+m[0])<0) continue;
        if((x[1]+m[1])>255 || (x[1]+m[1])<0) continue;
        if((x[2]+m[2])>255 || (x[2]+m[2])<0) continue;
        
        break;
    }
    
    x[0]+=m[0]
    x[1]+=m[1] 
    x[2]+=m[2]
    
    var r= "rgb("+x[0]+","+x[1]+","+x[2]+")";
    //console.log(r)
    return(r)
    
}

var abc1  =  {
'a' : 'rgb(0,0,180)','A' : 'rgb(0,0,180)','á' : 'rgb(0,0,180)','Á' : 'rgb(0,0,180)','b' : 'rgb(175,13,102)','B' : 'rgb(175,13,102)','c' : 'rgb(146,248,70)','C' : 'rgb(146,248,70)','d' : 'rgb(255,200,47)','D' : 'rgb(255,200,47)','e' : 'rgb(255,118,0)','E' : 'rgb(255,118,0)','é' : 'rgb(255,118,0)','É' : 'rgb(255,118,0)','f' : 'rgb(255,152,213)','F' : 'rgb(255,152,213)','g' : 'rgb(235,235,222)','G' : 'rgb(235,235,222)','h' : 'rgb(100,100,100)','H' : 'rgb(100,100,100)','i' : 'rgb(255,255,0)','I' : 'rgb(255,255,0)','í' : 'rgb(255,255,0)','Í' : 'rgb(255,255,0)','j' : 'rgb(255,255,150)','J' : 'rgb(255,255,150)','k' : 'rgb(55,19,112) ','K' : 'rgb(55,19,112) ','l' : 'rgb(202,62,94)','L' : 'rgb(202,62,94)','m' : 'rgb(205,145,63)','M' : 'rgb(205,145,63)','n' : 'rgb(12,75,100)','N' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','o' : 'rgb(255,0,0)','O' : 'rgb(255,0,0)','ó' : 'rgb(255,0,0)','Ó' : 'rgb(255,0,0)','p' : 'rgb(175,155,50)','P' : 'rgb(175,155,50)','q' : 'rgb(185,185,185)','Q' : 'rgb(185,185,185)','r' : 'rgb(37,70,25)','R' : 'rgb(37,70,25)','s' : 'rgb(121,33,135)','S' : 'rgb(121,33,135)','t' : 'rgb(83,140,208)','T' : 'rgb(83,140,208)','u' : 'rgb(0,154,37)','U' : 'rgb(0,154,37)','ú' : 'rgb(0,154,37)','Ú' : 'rgb(0,154,37)','v' : 'rgb(178,220,205)','V' : 'rgb(178,220,205)','w' : 'rgb(169,34,0)','W' : 'rgb(169,34,0)','x' : 'rgb(0,0,74)','X' : 'rgb(0,0,74)','y' : 'rgb(175,200,74)','Y' : 'rgb(175,200,74)','z' : 'rgb(63,25,12)','Z' : 'rgb(63,25,12)','0' : 'rgb(0,0,180)','0' : 'rgb(0,0,180)','1' : 'rgb(175,13,102)','1' : 'rgb(175,13,102)','2' : 'rgb(146,248,70)','2' : 'rgb(146,248,70)','3' : 'rgb(255,200,47)','3' : 'rgb(255,200,47)','4' : 'rgb(255,118,0)','4' : 'rgb(255,118,0)','5' : 'rgb(255,152,213)','5' : 'rgb(255,152,213)','6' : 'rgb(235,235,222)','6' : 'rgb(235,235,222)','7' : 'rgb(100,100,100)','7' : 'rgb(100,100,100)','8' : 'rgb(255,255,0)','8' : 'rgb(255,255,0)','9' : 'rgb(255,255,150)','9' : 'rgb(255,255,150)'        
};

abecedario ="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
abecedario2="ABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789";
console.log(abecedario2.length)
abecedario33="ABCDEFGHIJKLMNOPQRSTUVWXYZ".toLowerCase()
function myflash(){
setInterval(function(){

var abecedario33 ="áéíóúABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
var a=abecedario33.toLowerCase().split("")
for(let i=0;i<a.length;i++){
try{
$(".l-"+a[i]).css("color",varcolor(abc1[a[i]],100))
}catch(err){
 // alert(err);
}

}

},50)
}
function myflash3(){
setInterval(function(){

var abecedario33 ="áéíóúABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
var a=abecedario33.toLowerCase().split("")
for(let i=0;i<a.length;i++){
try{
$(".l-"+a[i]).css("color",varcolor(abc1[a[i]],100))
$(".l-"+a[i]).css("background-color",  'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')' )
}catch(err){
 // alert(err);
}

}

},50)
}

function myflash2(){
setInterval(function(){

var abecedario33 ="áéíóúABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
var a=abecedario33.toLowerCase().split("")
for(let i=0;i<a.length;i++){
try{
//$(".l-"+a[i]).css("color",varcolor(abc1[a[i]],100))
//$(".l-"+a[i]).css("width","20px")
$(".l-"+a[i]).html('<div style="color:${varcolor(abc1[a[i]],100)}; float: left; width:30px;">'+_.sample(a)+'</div>')
}catch(err){
 // alert(err);
}

}


},50)
}

function rgbToHex(color) {
    //console.log("->"+color);
  var bg = color.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
  function hex(x) {
    return ("0" + parseInt(x).toString(16)).slice(-2);
  }
  return  "#" + hex(bg[1]) + hex(bg[2]) + hex(bg[3]);
}

ww = $(window).width();
wh = $(window).height()-400;
wh=850-200;

if(ww<1000){

    $("#controls").css("zoom","4");

    $("#tamano").val("70");

    $('#show-me').css("zoom","2.5")

    wh=7600;

}


//$("#lienzo").

function randomIntFromInterval(min,max){ return Math.floor(Math.random()*(max-min+1)+min); }

function tiene_letras(str){
    
    if(str == "á" || str=="é" || str=="í" || str=="ó" || str=="ú" || str=="ñ"){

         return 1;
    }
    if(str == "0" || str=="1" || str=="2" || str=="3" || str=="4" || str=="5" || str=="6" || str=="7" || str=="8" || str=="9"){

         return 1;
    }
    return str.length === 1 && str.match(/[a-z]/i);
}

function sectorCircular(ap, af, color) {
    var r= tamano;

  var Xap = X + r * Math.cos(ap);
  var Yap = Y + r * Math.sin(ap);

  ctx.beginPath();
  ctx.fillStyle = color;
  ctx.moveTo(X, Y);
  ctx.lineTo(Xap, Yap);
  ctx.arc(X, Y, r, ap, af);
  ctx.closePath();
  ctx.fill();
}

var canvas = document.getElementById('lienzo');
var ctx = canvas.getContext('2d');
ctx.canvas.width = ww;
ctx.canvas.height = wh;

var r = 100;
// las coordenadas del centro del canvas
/*var X = canvas.width / 2
var Y = canvas.height / 2;*/

var X = 200;
var Y = 100;

var ap = Math.PI;
//var af = ap + (2 * Math.PI / 100) * oData.IE;

//sectorCircular(ap,af,oColores.IE);
var tamano;

limite = 0;
var pPrev = 0;
var pageLength=0;
arrLimit = [];
page=0;
bFin=0;

function next(){
    if(bFin) return;

    page++; bPrev=0; bNext=1;  play();

}

function prev(){
    page--; bPrev=1; bNext=0; play();
}

function ponerMuestraLetras(){
    rndAlpha(); 
    poner="";
    for(i=0;i<abc4.length-10;i++){
        //console.log(abecedario[i]);
        _color = rgbToHex( alphabetColors[abc4[i].toLowerCase()].replace(/\s+/g, '') );
_color1 = rgbToHex( abc3[abc4[i].toLowerCase()].replace(/\s+/g, '') );
//_color2 = rgbToHex( abcRand[abc4[i].toLowerCase()].replace(/\s+/g, '') );
_color2 = abc103[abc4[i].toLowerCase()];
_color3 = abc101[abc4[i].toLowerCase()];
_color4 = abc102[abc4[i].toLowerCase()];
_color5 = abc103[abc4[i].toLowerCase()];
_color6 = abc104[abc4[i].toLowerCase()];
_color7 = abc109[abc4[i].toLowerCase()];
_color8 = abc110[abc4[i].toLowerCase()];
_color9 = abc111[abc4[i].toLowerCase()];



// abcRand
         poner+=`
    <div style="float:left; padding-bottom: 6px; z-index:9999999;">
      <span style="color: ${_color}; font-size: 35px;  /*transform: scale(3);*/" onclick="bJump++; limitation=1; getPage(parseInt($('#myPage').val()));" ><b>${abc4[i]}</b></span><br>
      <!--<div style="background-color: ${_color}; width: 66px; height: 58px; ">&nbsp;</div> <br>-->
<div style="background-color: ${_color1}; width: 66px; height: 45px; "  onclick="bJump++; limitation=2; getPage(parseInt($('#myPage').val()));">&nbsp;</div>
<br class="-hh">
<div class="-hh" style="background-color: ${_color2}; width: 66px; height: 45px; " onclick="bJump++; limitation=3; getPage(parseInt($('#myPage').val()));" >&nbsp;</div>
<br  class="hh">
<div class="hh" style="background-color: ${_color3}; width: 66px; height: 45px; "  onclick="bJump++; limitation=4; getPage(parseInt($('#myPage').val()));" >&nbsp;</div>
<br class="hh" >
<div  class="hh"  style="background-color: ${_color4}; width: 66px; height: 45px; " onclick="bJump++; limitation=5; getPage(parseInt($('#myPage').val()));"  >&nbsp;</div>
<br class="hh" >
<div   class="hh" style="background-color: ${_color7}; width: 66px; height: 45px; " onclick="bJump++; limitation=6; getPage(parseInt($('#myPage').val()));"   >&nbsp;</div>
<br  class="hh">
<div   class="hh" style="background-color: ${_color6}; width: 66px; height: 45px; "  onclick="bJump++; limitation=7; getPage(parseInt($('#myPage').val()));" >&nbsp;</div>
<br class="hh">
<div class="hh" style="background-color: ${_color5}; width: 66px; height: 45px; " onclick="bJump++; limitation=8; getPage(parseInt($('#myPage').val()));"   >&nbsp;</div>
<br class="hh" >
<div class="hh" style="background-color: ${_color8}; width: 66px; height: 45px; "  onclick="bJump++; limitation=9; getPage(parseInt($('#myPage').val()));" >&nbsp;</div>
<br class="hh">
<div class="hh" style="background-color: ${_color9}; width: 66px; height: 45px; "  onclick="bJump++; limitation=10; getPage(parseInt($('#myPage').val()));" >&nbsp;</div>

    </div>
    `;


        //poner+=`<span style="color: ${_color}; font-size: 52px;  /*transform: scale(3);*/"><b>${abecedario[i]}</b></span>`;
    }
    //console.log(poner);
    var b=_.first(_.shuffle("IDLCTUMPBGVYQHF".split("")).join(""),2)
    var a=_.shuffle("AENORSXL".split("")).join("")
    $("#output1").html(poner+a+"|"+b);

if(bhh) $(".hh").hide();
}

_circles=[];

function isIntersect(point, circle) {
  return Math.sqrt((point.x-circle.x) ** 2 + (point.y - circle.y) ** 2) < circle.radius;
}

function getRelativeCoords(event) {
    return { x: event.offsetX, y: event.offsetY };
}

var pos;

antTam=0
 antA={}
function play(){
     _circles=[];

    as = parseInt($("#alphabetSelected").val());
    alphabetColors = abc1;
    if(as==0) alphabetColors = abc1;
    if(as==1) alphabetColors = abc3;
    if(as==2){ 
        if(loadColorMode==0) rndAlpha(); 
        alphabetColors = abcRand; 

    } 
    if(as==3) alphabetColors = abcGreen;
    if(as==4) alphabetColors = abcBlue;
    if(as==5) alphabetColors = abcRed;
    if(as==6) alphabetColors = abcSkin;
    if(as==7) alphabetColors = abcGray;
    if(as==8) alphabetColors = abcYellow;
    if(as==9) alphabetColors = abcPink;
    if(as==10) alphabetColors = abcOrange;
    if(as==11) alphabetColors = abcViolet;
    if(as==12){
        _abc= "aábcdeéfghiíjklmnñoópqrstuúvwxyz"
        _abc2= "abcdefghijklmnopqrstuvwxyz"
        console.log(_abc2.length)
        _abc1= _.shuffle(_abc2.split("")).join("")

        emo2={}
        for(i=0;i<_abc1.length;i++){
            emo2[_abc1[i]]=abc1[_abc2[i]]
            emo2[_abc1[i].toUpperCase()]=abc1[_abc2[i]]
        }
        for(i=0;i<_abc.length;i++){
            l=_abc[i]
            l1 =_abc[i].toUpperCase()
            if(l=="ñ" || l=="Ñ"){emo2[l]=emo2["n"]; emo2[l1]=emo2["n"]; }
            if(l=="á" || l=="Á"){emo2[l]=emo2["a"]; emo2[l1]=emo2["a"]; } 
            if(l=="é" || l=="É"){ emo2[l]=emo2["e"]; emo2[l1]=emo2["e"];}
            if(l=="í" || l=="Í"){emo2[l]=emo2["i"]; emo2[l1]=emo2["i"];} 
            if(l=="ó" || l=="Ó"){emo2[l]=emo2["o"]; emo2[l1]=emo2["o"];} 
            if(l=="ú" || l=="Ú"){ emo2[l]=emo2["u"]; emo2[l1]=emo2["u"];}
            
        }
        alphabetColors=emo2;
    } 
    
if(as>13 && as<28 ){
   // alphabetColors = eval(arrPutSystem[as-14]);
alphabetColors = eval(JSON.parse(arrPutSystem[as-14]));

   
}

antA = alphabetColors
tamano2 = 0

//<?=isset($_GET['lienzo'])?'alphabetColors = abc1;':''?>

    ponerMuestraLetras();

    ctx.clearRect(0, 0, canvas.width, canvas.height);

    txt = $("#input1").val()+" ";
    str = txt;

    limpia = str.split("\n").join(". ");
    //limpia = limpia.split("\t").join(". ");
    //limpia = limpia.split("\r").join(". ");
    //limpia = limpia.split(",").join(". ");
    //limpia = limpia.split(".").join(". ");
    //limpia = limpia.split(")").join(". ");
    //limpia = limpia.split("?").join(". ");
    //limpia = limpia.split(";").join(". ");
    //limpia = limpia.split("-").join(". ");
    //limpia = limpia.split(". . .").join(". ");
    //limpia = limpia.split(". . ").join(". ");
    limpia = limpia.split(". .").join(". ");

    txt = limpia;
  txtP=txt.split(" ")

    //alert(txt);
    var countLetraPalabra=0;
    var arrPalabra = [];

    tamano = parseInt($("#tamano").val());
antTam=tamano

    X = tamano*2;
    Y = tamano;

    var countPalabras=0;
    lineas = 0;

    

    if(!bPrev && !bNext){

        //if(!bNoChangePage){
            page=0;
            console.log("0");
        //}
        limite=0;
        pPrev=0;
    }

    if(bPrev){
        if(page<0){
            page=0;
        }
        limite = arrLimit[page];
        if(limite<0){
            limite=0;
            page=0;
        }
    }

    //console.log(page);
    
    pageLength=0;

    arrLimit[page] = limite;
xxx=0
    for(i=0;i<txt.length;i++){
        
        if(i<limite && limite!=0)
            continue;

        pageLength++;

        if(txt[i]==" "){

xxx++

            porcentLetra = 100/arrPalabra.length;
            var ap = Math.PI;

             _circles.push( {
        id: _.random(1,10000),
        x: X,
        y: Y,
        radius: tamano,
        word: arrPalabra.join("")

        });

      multi=1;
multi1=1
tamano=antTam



 if(arrPalabra.length<=4) {

multi=0.5;
multi1=1
try{
if(txtP[xxx-2].length>4){

X-=27
}

}catch(err){
console.log("hola error"+err)
}

//X-=(tamano*2)
tamano*=multi;
//X+=50

             

}else{

try{
if(txtP[xxx-2].length<=4){

X+=38
}

}catch(err){
console.log("hola error"+err)
}


}
 if(arrPalabra.length<=5 && arrPalabra.length>3) {
/*
      multi1=2
multi=0.75;

X-=(tamano)
tamano*=multi;       
*/
}
bCha1=bCha1
            for(j=0;j<arrPalabra.length;j++){

if(bCha){
if(bCha1) alphabetColors = abc1; else alphabetColors = abc3;
   } 
               try{ 

tamano2=tamano
                //console.log(abc1[arrPalabra[j].toLowerCase()]);

                var af = ap+ (2 * Math.PI / 100) * porcentLetra;

                //console.log(arrPalabra[j]);

                _color = rgbToHex( varcolor(alphabetColors[arrPalabra[j]].replace(/\s+/g, '')) );

                sectorCircular(ap,af,_color);

                ap = af;
/*
tamano=tamano/2

var af = ap+ (2 * Math.PI / 100) * porcentLetra;

                //console.log(arrPalabra[j]);

                _color = rgbToHex( varcolor(abc3[arrPalabra[j]].replace(/\s+/g, '')) );

                sectorCircular(ap,af,_color);

                ap = af;*/

              //  console.log(ap)
               }catch(err){}

            }

tamano=tamano/2

for(j=0;j<arrPalabra.length;j++){
continue;


               try{ 


                //console.log(abc1[arrPalabra[j].toLowerCase()]);

                var af = ap+ (2 * Math.PI / 100) * porcentLetra;

                //console.log(arrPalabra[j]);

                _color = rgbToHex( varcolor(abc3[arrPalabra[j]].replace(/\s+/g, '')) );

                sectorCircular(ap,af,_color);

                ap = af;
/*
tamano=tamano/2

var af = ap+ (2 * Math.PI / 100) * porcentLetra;

                //console.log(arrPalabra[j]);

                _color = rgbToHex( varcolor(abc3[arrPalabra[j]].replace(/\s+/g, '')) );

                sectorCircular(ap,af,_color);

                ap = af;*/

              //  console.log(ap)
               }catch(err){}

            }
            if(txt[i-1]=="." || txt[i-1]=="?" || txt[i-1]==";" || txt[i-1]=="-" || txt[i-1]==":"){
                X+=tamano*2;
            }

tamano=tamano2
            
            countLetraPalabra=0;
            arrPalabra=[];
            X+=(tamano*multi1)*(2);
            countPalabras++;

            if(X>ww-tamano*2){
               tamano=antTam
                X=tamano;
                Y+=tamano*2+10;
                lineas++;

                if(Y>wh-tamano*2){
                   
                    limite=i;
                    
                    break;

                }
            }

        }else{
            if(tiene_letras(txt[i])){
                poner=txt[i].toLowerCase();
                if(poner=="á"){ poner="á";  }
                if(poner=="é"){ poner="e"; }
                if(poner=="í"){ poner="i";  }
                if(poner=="ó"){ poner="o";  }
                if(poner=="ú"){ poner="u";  }
                if(poner=="ñ"){ poner="n";  }

                arrPalabra[countLetraPalabra]=poner;

                countLetraPalabra++;
            }
        }
        if(i==txt.length-1)
            bFin=1;
        else
            bFin=0;
    }//for i


  canvas.addEventListener('click', (e) => {
  /*pos = {
    x: e.clientX,
    y: e.clientY
  };*/
  pos=getRelativeCoords(e);
  console.log(pos)
  _circles.forEach(circle => {
    if (isIntersect(pos, circle)) {
      //alert('click on circle: ' + circle.id);
      $("#show-me").html(circle.word)
    }
    });
  });

}

$(document).keydown(function(e) {
    switch(e.which) {
        case 37: // left
        prev();
        break;

        case 39: // right
        next();

        break;

        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
});

var abcRand;

function rndAlpha(){

    var limitOpacity = 0;
    var limitOpacity1 = 255;


    var a = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var b = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var c = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var d = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var e = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var f = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var g = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var h = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var i = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';


    var j =  'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var k = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var l = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var m = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var n = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var o = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var p = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var q = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var r = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var s = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var t = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var u = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var v = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var w = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var x = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var y = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var z = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';
    var nn = 'rgb('+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+','+randomIntFromInterval(limitOpacity,limitOpacity1)+')';

    abcRand = {
    'a' : a, 'A' : a,'á' : a,'Á' : a,'b' : b,'B' : b,'c' : c,'C' : c,'d' : d,'D' : d,'e' : e,'E' : e,'é' : e,'É' : e,'f' : f,'F' : f,'g' : g,'G' : g,'h' : h,'H' : h,'i' : i,'I' : i,'í' : i,'Í' : i,'j' : f,'J' : f,'k' : k,'K' : k,'l' : l,'L' : l,'m' : m,'M' : m,'n' : n,'N' : n,'ñ' : nn,'Ñ' : nn,'o' : o,'O' : o,'ó' : o,'Ó' : o,'p' : p,'P' : p,'q' : q,'Q' : q,'r' : r,'R' : r,'s' : s,'S' : s,'t' : t,'T' : t,'u' : u,'U' : u,'ú' : u,'Ú' : u,'v' : v,'V' : v,'w' : w,'W' : w,'x' : x,'X' : x,'y' : y,'Y' : y,'z' : z,'Z' : z,'0' : a,'0' : a,'1' : b,'1' : b,'2' :c,'2' : c,'3' : d,'3' : d,'4' : e,'4' : e,'5' : f,'5' : f,'6' : g,'6' : g,'7' : h,'7' : h,'8' : i,'8' : i,'9' : j,'9' : j    
    };


}


all_letters=("ABCDEFGHIJKLMNÑOPQRSTUVWXYZ").toLowerCase().split("");
all_vocals={ "a": ["á","Á"], "e": ["é","É"], "i": ["í","Í"], "o": ["ó","Ó"], "u": ["ú","Ú"]};
vocals=("aeiou").split("").join("");
elementsTotal=[];

function isInt(value) {
  return !isNaN(value) && 
         parseInt(Number(value)) == value && 
         !isNaN(parseInt(value, 10));
}

const findDuplicates = (arr) => {
  let sorted_arr = arr.slice().sort(); // You can define the comparing function here. 
  // JS by default uses a crappy string compare.
  // (we use slice to clone the array so the
  // original array won't be modified)
  let results = [];
  for (let i = 0; i < sorted_arr.length - 1; i++) {
    if (sorted_arr[i + 1] == sorted_arr[i]) {
      results.push(sorted_arr[i]);
    }
  }
  return results;
}


function createAlphabet(x){
    object=x;
    elementsTotal=[];


    $.each(object, function(index, value) {

        //try{

            

            object[index.toUpperCase()]=value;

            if(vocals.search(index)!=-1){
                object[all_vocals[index][0]]=value; object[all_vocals[index][1]]=value;
            }


        //}catch(err){}

        if(isInt(index)){

            object[index]=object[all_letters[parseInt(index)]];


        }

        if(!isInt(index)) elementsTotal.push(value);

    //console.log(value);
    });

    //console.log(findDuplicates(elementsTotal))
    //console.log(_.uniq(elementsTotal))

    return object;

}

function hexToRgb(hex) {

    var bigint = parseInt(hex, 16);
    var r = (bigint >> 16) & 255;
    var g = (bigint >> 8) & 255;
    var b = bigint & 255;

    return "rgb("+ r + "," + g + "," + b + ")";
}

function populateColor(x){



    dict={};
    x=x.split(" ").join("");
    x=x.split("_");

    //x=_.uniq(x);



    for(i=0;i<abecedario2.length;i++){

        dict[abecedario2.charAt(i).toLowerCase()]=x[i];


    }

    return createAlphabet( dict );


}

rndAlpha();

var abc1  =  {
'a' : 'rgb(0,0,180)','A' : 'rgb(0,0,180)','á' : 'rgb(0,0,180)','Á' : 'rgb(0,0,180)','b' : 'rgb(175,13,102)','B' : 'rgb(175,13,102)','c' : 'rgb(146,248,70)','C' : 'rgb(146,248,70)','d' : 'rgb(255,200,47)','D' : 'rgb(255,200,47)','e' : 'rgb(255,118,0)','E' : 'rgb(255,118,0)','é' : 'rgb(255,118,0)','É' : 'rgb(255,118,0)','f' : 'rgb(255,152,213)','F' : 'rgb(255,152,213)','g' : 'rgb(235,235,222)','G' : 'rgb(235,235,222)','h' : 'rgb(100,100,100)','H' : 'rgb(100,100,100)','i' : 'rgb(255,255,0)','I' : 'rgb(255,255,0)','í' : 'rgb(255,255,0)','Í' : 'rgb(255,255,0)','j' : 'rgb(255,255,150)','J' : 'rgb(255,255,150)','k' : 'rgb(55,19,112) ','K' : 'rgb(55,19,112) ','l' : 'rgb(202,62,94)','L' : 'rgb(202,62,94)','m' : 'rgb(205,145,63)','M' : 'rgb(205,145,63)','n' : 'rgb(12,75,100)','N' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','o' : 'rgb(255,0,0)','O' : 'rgb(255,0,0)','ó' : 'rgb(255,0,0)','Ó' : 'rgb(255,0,0)','p' : 'rgb(175,155,50)','P' : 'rgb(175,155,50)','q' : 'rgb(185,185,185)','Q' : 'rgb(185,185,185)','r' : 'rgb(37,70,25)','R' : 'rgb(37,70,25)','s' : 'rgb(121,33,135)','S' : 'rgb(121,33,135)','t' : 'rgb(83,140,208)','T' : 'rgb(83,140,208)','u' : 'rgb(0,154,37)','U' : 'rgb(0,154,37)','ú' : 'rgb(0,154,37)','Ú' : 'rgb(0,154,37)','v' : 'rgb(178,220,205)','V' : 'rgb(178,220,205)','w' : 'rgb(169,34,0)','W' : 'rgb(169,34,0)','x' : 'rgb(0,0,74)','X' : 'rgb(0,0,74)','y' : 'rgb(175,200,74)','Y' : 'rgb(175,200,74)','z' : 'rgb(63,25,12)','Z' : 'rgb(63,25,12)','0' : 'rgb(0,0,180)','0' : 'rgb(0,0,180)','1' : 'rgb(175,13,102)','1' : 'rgb(175,13,102)','2' : 'rgb(146,248,70)','2' : 'rgb(146,248,70)','3' : 'rgb(255,200,47)','3' : 'rgb(255,200,47)','4' : 'rgb(255,118,0)','4' : 'rgb(255,118,0)','5' : 'rgb(255,152,213)','5' : 'rgb(255,152,213)','6' : 'rgb(235,235,222)','6' : 'rgb(235,235,222)','7' : 'rgb(100,100,100)','7' : 'rgb(100,100,100)','8' : 'rgb(255,255,0)','8' : 'rgb(255,255,0)','9' : 'rgb(255,255,150)','9' : 'rgb(255,255,150)'        
};

//christian Faur
abc2 = {
'a' : 'rgb(0,0,180)','A' : 'rgb(0,0,180)','á' : 'rgb(0,0,180)','Á' : 'rgb(0,0,180)','b' : 'rgb(175,13,102)','B' : 'rgb(175,13,102)','c' : 'rgb(146,248,70)','C' : 'rgb(146,248,70)','d' : 'rgb(255,200,47)','D' : 'rgb(255,200,47)','e' : 'rgb(255,118,0)','E' : 'rgb(255,118,0)','é' : 'rgb(255,118,0)','É' : 'rgb(255,118,0)','f' : 'rgb(185,185,185)','F' : 'rgb(185,185,185)','g' : 'rgb(235,235,222)','G' : 'rgb(235,235,222)','h' : 'rgb(100,100,100)','H' : 'rgb(100,100,100)','i' : 'rgb(255,255,0)','I' : 'rgb(255,255,0)','í' : 'rgb(255,255,0)','Í' : 'rgb(255,255,0)','j' : 'rgb(55,19,112)','J' : 'rgb(55,19,112)','k' : 'rgb(255,255,150) ','K' : 'rgb(255,255,150) ','l' : 'rgb(202,62,94)','L' : 'rgb(202,62,94)','m' : 'rgb(205,145,63)','M' : 'rgb(205,145,63)','n' : 'rgb(12,75,100)','N' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','o' : 'rgb(255,0,0)','O' : 'rgb(255,0,0)','ó' : 'rgb(255,0,0)','Ó' : 'rgb(255,0,0)','p' : 'rgb(175,155,50)','P' : 'rgb(175,155,50)','q' : 'rgb(0,0,0)','Q' : 'rgb(0,0,0)','r' : 'rgb(37,70,25)','R' : 'rgb(37,70,25)','s' : 'rgb(121,33,135)','S' : 'rgb(121,33,135)','t' : 'rgb(83,140,208)','T' : 'rgb(83,140,208)','u' : 'rgb(0,154,37)','U' : 'rgb(0,154,37)','ú' : 'rgb(0,154,37)','Ú' : 'rgb(0,154,37)','v' : 'rgb(178,220,205)','V' : 'rgb(178,220,205)','w' : 'rgb(255,152,213)','W' : 'rgb(255,152,213)','x' : 'rgb(0,0,74)','X' : 'rgb(0,0,74)','y' : 'rgb(175,200,74)','Y' : 'rgb(175,200,74)','z' : 'rgb(63,25,12)','Z' : 'rgb(63,25,12)','0' : 'rgb(0,0,180)','0' : 'rgb(0,0,180)','1' : 'rgb(175,13,102)','1' : 'rgb(175,13,102)','2' : 'rgb(146,248,70)','2' : 'rgb(146,248,70)','3' : 'rgb(255,200,47)','3' : 'rgb(255,200,47)','4' : 'rgb(255,118,0)','4' : 'rgb(255,118,0)','5' : 'rgb(255,152,213)','5' : 'rgb(255,152,213)','6' : 'rgb(235,235,222)','6' : 'rgb(235,235,222)','7' : 'rgb(100,100,100)','7' : 'rgb(100,100,100)','8' : 'rgb(255,255,0)','8' : 'rgb(255,255,0)','9' : 'rgb(255,255,150)','9' : 'rgb(255,255,150)'        
};

//Kromofons
abc3 = {
'a' : 'rgb(255,255,106)','A' : 'rgb(255,255,106)','á' : 'rgb(255,255,106)','Á' : 'rgb(255,255,106)','b' : 'rgb(255,5,172)','B' : 'rgb(255,5,172)','c' : 'rgb(255,213,255)','C' : 'rgb(255,213,255)','d' : 'rgb(230,230,230)','D' : 'rgb(230,230,230)','e' : 'rgb(255,153,0)','E' : 'rgb(255,153,0)','é' : 'rgb(255,153,0)','É' : 'rgb(255,153,0)','f' : 'rgb(255,204,153)','F' : 'rgb(255,204,153)','g' : 'rgb(186,22,131)','G' : 'rgb(186,22,131)','h' : 'rgb(255,255,153)','H' : 'rgb(255,255,153)','i' : 'rgb(0,255,0)','I' : 'rgb(0,255,0)','í' : 'rgb(0,255,0)','Í' : 'rgb(0,255,0)','j' : 'rgb(255,153,153)','J' : 'rgb(255,153,153)','k' : 'rgb(122,0,122) ','K' : 'rgb(122,0,122) ','l' : 'rgb(255,0,0)','L' : 'rgb(255,0,0)','m' : 'rgb(186,230,0)','M' : 'rgb(186,230,0)','n' : 'rgb(204,153,102)','N' : 'rgb(204,153,102)','ñ' : 'rgb(204,153,102)','Ñ' : 'rgb(204,153,102)','o' : 'rgb(153,153,153)','O' : 'rgb(153,153,153)','ó' : 'rgb(153,153,153)','Ó' : 'rgb(153,153,153)','p' : 'rgb(204,255,204)','P' : 'rgb(204,255,204)','q' : 'rgb(164,39,0)','Q' : 'rgb(164,39,0)','r' : 'rgb(255,102,204)','R' : 'rgb(255,102,204)','s' : 'rgb(133,194,255)','S' : 'rgb(133,194,255)','t' : 'rgb(48,95,190)','T' : 'rgb(48,95,190)','u' : 'rgb(255,255,0)','U' : 'rgb(255,255,0)','ú' : 'rgb(255,255,0)','Ú' : 'rgb(255,255,0)','v' : 'rgb(0,0,255)','V' : 'rgb(0,0,255)','w' : 'rgb(0,112,0)','W' : 'rgb(0,112,0)','x' : 'rgb(153,102,102)','X' : 'rgb(153,102,102)','y' : 'rgb(255,102,102)','Y' : 'rgb(255,102,102)','z' : 'rgb(204,204,102)','Z' : 'rgb(204,204,102)','0' : 'rgb(255,255,106)','0' : 'rgb(255,255,106)','1' : 'rgb(255,5,172)','1' : 'rgb(255,5,172)','2' : 'rgb(255,213,255)','2' : 'rgb(255,213,255)','3' : 'rgb(230,230,230)','3' : 'rgb(230,230,230)','4' : 'rgb(255,153,0)','4' : 'rgb(255,153,0)','5' : 'rgb(255,204,153)','5' : 'rgb(255,204,153)','6' : 'rgb(186,22,131)','6' : 'rgb(186,22,131)','7' : 'rgb(255,255,153)','7' : 'rgb(255,255,153)','8' : 'rgb(0,255,0)','8' : 'rgb(0,255,0)','9' : 'rgb(255,153,153)','9' : 'rgb(255,153,153)'        
};

var alphabetColors = {
'a' : 'rgb(0,0,180)','A' : 'rgb(0,0,180)','á' : 'rgb(0,0,180)','Á' : 'rgb(0,0,180)','b' : 'rgb(175,13,102)','B' : 'rgb(175,13,102)','c' : 'rgb(146,248,70)','C' : 'rgb(146,248,70)','d' : 'rgb(255,200,47)','D' : 'rgb(255,200,47)','e' : 'rgb(255,118,0)','E' : 'rgb(255,118,0)','é' : 'rgb(255,118,0)','É' : 'rgb(255,118,0)','f' : 'rgb(255,152,213)','F' : 'rgb(255,152,213)','g' : 'rgb(235,235,222)','G' : 'rgb(235,235,222)','h' : 'rgb(100,100,100)','H' : 'rgb(100,100,100)','i' : 'rgb(255,255,0)','I' : 'rgb(255,255,0)','í' : 'rgb(255,255,0)','Í' : 'rgb(255,255,0)','j' : 'rgb(255,255,150)','J' : 'rgb(255,255,150)','k' : 'rgb(55,19,112) ','K' : 'rgb(55,19,112) ','l' : 'rgb(202,62,94)','L' : 'rgb(202,62,94)','m' : 'rgb(205,145,63)','M' : 'rgb(205,145,63)','n' : 'rgb(12,75,100)','N' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','ñ' : 'rgb(12,75,100)','o' : 'rgb(255,0,0)','O' : 'rgb(255,0,0)','ó' : 'rgb(255,0,0)','Ó' : 'rgb(255,0,0)','p' : 'rgb(175,155,50)','P' : 'rgb(175,155,50)','q' : 'rgb(185,185,185)','Q' : 'rgb(185,185,185)','r' : 'rgb(37,70,25)','R' : 'rgb(37,70,25)','s' : 'rgb(121,33,135)','S' : 'rgb(121,33,135)','t' : 'rgb(83,140,208)','T' : 'rgb(83,140,208)','u' : 'rgb(0,154,37)','U' : 'rgb(0,154,37)','ú' : 'rgb(0,154,37)','Ú' : 'rgb(0,154,37)','v' : 'rgb(178,220,205)','V' : 'rgb(178,220,205)','w' : 'rgb(169,34,0)','W' : 'rgb(169,34,0)','x' : 'rgb(0,0,74)','X' : 'rgb(0,0,74)','y' : 'rgb(175,200,74)','Y' : 'rgb(175,200,74)','z' : 'rgb(63,25,12)','Z' : 'rgb(63,25,12)','0' : 'rgb(0,0,180)','0' : 'rgb(0,0,180)','1' : 'rgb(175,13,102)','1' : 'rgb(175,13,102)','2' : 'rgb(146,248,70)','2' : 'rgb(146,248,70)','3' : 'rgb(255,200,47)','3' : 'rgb(255,200,47)','4' : 'rgb(255,118,0)','4' : 'rgb(255,118,0)','5' : 'rgb(255,152,213)','5' : 'rgb(255,152,213)','6' : 'rgb(235,235,222)','6' : 'rgb(235,235,222)','7' : 'rgb(100,100,100)','7' : 'rgb(100,100,100)','8' : 'rgb(255,255,0)','8' : 'rgb(255,255,0)','9' : 'rgb(255,255,150)','9' : 'rgb(255,255,150)'        
};


var abcGreen  =  {
'a' : 'rgb(11,102,35)','A' : 'rgb(11,102,35)','á' : 'rgb(11,102,35)','Á' : 'rgb(11,102,35)','b' : 'rgb(157,193,131)','B' : 'rgb(157,193,131)','c' : 'rgb(112,130,56)','C' : 'rgb(112,130,56)','d' : 'rgb(199,234,70)','D' : 'rgb(199,234,70)','e' : 'rgb(63,122,77)','E' : 'rgb(63,122,77)','é' : 'rgb(63,122,77)','É' : 'rgb(63,122,77)','f' : 'rgb(0,168,107)','F' : 'rgb(0,168,107)','g' : 'rgb(143,151,121)','G' : 'rgb(143,151,121)','h' : 'rgb(79,121,66)','H' : 'rgb(79,121,66)','i' : 'rgb(41,171,135)','I' : 'rgb(41,171,135)','í' : 'rgb(41,171,135)','Í' : 'rgb(41,171,135)','j' : 'rgb(169,186,157)','J' : 'rgb(169,186,157)','k' : 'rgb(208, 230, 204)','K' : 'rgb(208, 230, 204)','l' : 'rgb(138,154,91)','L' : 'rgb(138,154,91)','m' : 'rgb(152,251,152)','M' : 'rgb(152,251,152)','n' : 'rgb(1,121,111)','N' : 'rgb(1,121,111)','ñ' : 'rgb(1,121,111)','Ñ' : 'rgb(1,121,111)','o' : 'rgb(208,240,192)','O' : 'rgb(208,240,192)','ó' : 'rgb(208,240,192)','Ó' : 'rgb(208,240,192)','p' : 'rgb(0,165,114)','P' : 'rgb(0,165,114)','q' : 'rgb(75,83,32)','Q' : 'rgb(75,83,32)','r' : 'rgb(80,220,100)','R' : 'rgb(80,220,100)','s' : 'rgb(76,187,23)','S' : 'rgb(76,187,23)','t' : 'rgb(57,255,20)','T' : 'rgb(57,255,20)','u' : 'rgb(68,76,56)','U' : 'rgb(68,76,56)','ú' : 'rgb(68,76,56)','Ú' : 'rgb(68,76,56)','v' : 'rgb(0,78,56)','V' : 'rgb(0,78,56)','w' : 'rgb(186, 230, 1)','W' : 'rgb(186, 230, 1)','x' : 'rgb(103,146,103)','X' : 'rgb(103,146,103)','y' : 'rgb(46,139,87)','Y' : 'rgb(46,139,87)','z' : 'rgb(80,200,120)','Z' : 'rgb(80,200,120)','0' : 'rgb(0,0,180)','0' : 'rgb(0,0,180)','1' : 'rgb(175,13,102)','1' : 'rgb(175,13,102)','2' : 'rgb(112,130,56)','2' : 'rgb(112,130,56)','3' : 'rgb(255,200,47)','3' : 'rgb(255,200,47)','4' : 'rgb(255,118,0)','4' : 'rgb(255,118,0)','5' : 'rgb(255,152,213)','5' : 'rgb(255,152,213)','6' : 'rgb(235,235,222)','6' : 'rgb(235,235,222)','7' : 'rgb(100,100,100)','7' : 'rgb(100,100,100)','8' : 'rgb(255,255,0)','8' : 'rgb(255,255,0)','9' : 'rgb(255,255,150)','9' : 'rgb(255,255,150)'        
};

abcSkin = {

    'a' : 'rgb(211, 147, 145)','b' : 'rgb(197, 135, 110)','c' : 'rgb(217, 140, 134)','d' : 'rgb(245, 193, 172)','e' : 'rgb(200, 136, 111)','f' : 'rgb(228, 173, 168)','g' : 'rgb(187, 121, 104)','h' : 'rgb(249, 215, 216)','i' : 'rgb(238, 241, 240)','j' : 'rgb(209, 153, 126)','k' : 'rgb(174, 100, 73)','l' : 'rgb(230, 158, 133)','m' : 'rgb(243, 194, 180)','n' : 'rgb(233, 197, 206)','ñ' : 'rgb(63, 46, 54)','o' : 'rgb(206, 129, 103)','p' : 'rgb(232, 190, 176)','q' : 'rgb(80, 38, 37)','r' : 'rgb(218, 140, 138)','s' : 'rgb(219, 136, 96)','t' : 'rgb(231, 192, 175)','u' : 'rgb(127, 73, 61)','v' : 'rgb(243, 194, 189)','w' : 'rgb(216, 152, 127)','x' : 'rgb(246, 140, 85)','y' : 'rgb(225, 170, 166)','z' : 'rgb(147, 85, 68)','0' : 'rgb(0,0,180)','0' : 'rgb(0,0,180)','1' : 'rgb(175,13,102)','1' : 'rgb(175,13,102)','2' : 'rgb(112,130,56)','2' : 'rgb(112,130,56)','3' : 'rgb(255,200,47)','3' : 'rgb(255,200,47)','4' : 'rgb(255,118,0)','4' : 'rgb(255,118,0)','5' : 'rgb(255,152,213)','5' : 'rgb(255,152,213)','6' : 'rgb(235,235,222)','6' : 'rgb(235,235,222)','7' : 'rgb(100,100,100)','7' : 'rgb(100,100,100)','8' : 'rgb(255,255,0)','8' : 'rgb(255,255,0)','9' : 'rgb(255,255,150)','9' : 'rgb(255,255,150)'        

};

// abecedario



// newAbc  = `rgb(218, 219, 220) rgb(201, 202, 204) rgb(197, 198, 200) rgb(179, 181, 184)`;
/*
newAbc  = "rgb(45, 44, 45)_rgb(57, 56, 58)_rgb(70, 70, 72)_rgb(79, 79, 81)_rgb(88, 88, 90)_rgb(97, 97, 99)_rgb(105, 106, 108)_rgb(121, 122, 125)_rgb(129, 130, 133)_rgb(136, 137, 140)_rgb(147, 149, 152)_rgb(155, 157, 160)_rgb(159, 161, 164)_rgb(179, 181, 184)_rgb(197, 198, 200)_rgb(201, 202, 204)_rgb(218, 219, 220)_rgb(222, 223, 224)_rgb(13, 13, 13)_rgb(197,198,199)_rgb(164,156,160)_rgb(106,106,106)_rgb(213,203,210)_rgb(187,188,188)_rgb(99,95,77)_rgb(106,108,112)";

newAbc = _.shuffle(newAbc.split("_")).join("_");
newAbc+=("_"+newAbc);*/

newAbc="rgb(106,108,112)_rgb(155, 157, 160)_rgb(13, 13, 13)_rgb(129, 130, 133)_rgb(57, 56, 58)_rgb(164,156,160)_rgb(183,190,203)_rgb(45, 44, 45)_rgb(187,188,188)_rgb(136, 137, 140)_rgb(99,95,77)_rgb(88, 88, 90)_rgb(159, 161, 164)_rgb(147, 149, 152)_rgb(197, 198, 200)_rgb(70, 70, 72)_rgb(97, 97, 99)_rgb(121, 122, 125)_rgb(201, 202, 204)_rgb(105, 106, 108)_rgb(197,198,199)_rgb(213,203,210)_rgb(79, 79, 81)_rgb(179, 181, 184)_rgb(218, 219, 220)_rgb(222, 223, 224)_rgb(160,173,170)_rgb(155, 157, 160)_rgb(13, 13, 13)_rgb(129, 130, 133)_rgb(57, 56, 58)_rgb(164,156,160)_rgb(106,106,106)_rgb(45, 44, 45)_rgb(187,188,188)_rgb(136, 137, 140)_rgb(99,95,77)_rgb(88, 88, 90)_rgb(159, 161, 164)_rgb(147, 149, 152)_rgb(197, 198, 200)_rgb(70, 70, 72)_rgb(97, 97, 99)_rgb(121, 122, 125)_rgb(201, 202, 204)_rgb(105, 106, 108)_rgb(197,198,199)_rgb(213,203,210)_rgb(79, 79, 81)_rgb(179, 181, 184)_rgb(218, 219, 220)_rgb(222, 223, 224)";


abcGray = populateColor(newAbc);


newAbc="rgb(205, 177, 129)_rgb(251, 221, 175)_rgb(249, 220, 86)_rgb(248, 228, 115)_rgb(239, 252, 95)_rgb(251, 229, 180)_rgb(245, 245, 221)_rgb(239, 219, 130)_rgb(247, 190, 2)_rgb(205, 119, 33)_rgb(246, 165, 16)_rgb(249, 225, 3)_rgb(196, 145, 0)_rgb(248, 195, 9)_rgb(248, 209, 41)_rgb(219, 165, 33)_rgb(195, 176, 144)_rgb(209, 181, 91)_rgb(248, 211, 0)_rgb(246, 166, 0)_rgb(249, 218, 95)_rgb(248, 222, 126)_rgb(238,234,151)_rgb(223,230,159)_rgb(237,237,183)_rgb(227,176,75)_rgb(236,233,155)_rgb(237,233,173)_rgb(255,211,0)_rgb(204,147,80)_rgb(220,201,158)_rgb(190,138,74)_rgb(255,215,99)_rgb(238,150,38)_rgb(239,220,117)_rgb(223,216,126)_rgb(203,142,22)_rgb(212,204,154)_rgb(254,213,93)_rgb(237,255,0)_rgb(212,171,49)_rgb(247,183,24)_rgb(241,191,112)_rgb(248,231,44)_rgb(249,161,46)_rgb(241,227,173)_rgb(238,231,142)_rgb(244,236,194)_rgb(216,185,101)_rgb(251,183,85)_rgb(196,166,71)_rgb(246,211,0)_rgb(211,156,67)_rgb(240,221,157)_rgb(240,205,91)_rgb(255,220,1)"

//p=[]; for(i=0;i<27;i++){ p.push(abcGray[abecedario2.charAt(i)]); } console.log(findDuplicates(p))

abcYellow = populateColor(newAbc);

newAbc = "rgb(147, 59, 22)_rgb(141, 2, 30)_rgb(94, 24, 19)_rgb(184, 14, 9)_rgb(65, 12, 9)_rgb(244, 40, 1)_rgb(192, 9, 49)_rgb(202, 52, 51)_rgb(211, 30, 60)_rgb(180, 55, 87)_rgb(244, 9, 2)_rgb(127, 23, 27)_rgb(234, 60, 85)_rgb(165, 91, 82)_rgb(150, 0, 24)_rgb(178, 33, 33)_rgb(224, 16, 95)_rgb(195, 24, 5)_rgb(206, 91, 92)_rgb(238, 41, 58)_rgb(124, 10, 0)_rgb(244, 36, 0)_rgb(246, 128, 113)_rgb(122,31,61)_rgb(123,53,57)_rgb(119,33,46)_rgb(124,41,70)_rgb(189,22,44)_rgb(193,74,100)_rgb(171,52,117)_rgb(158,16,48)_rgb(164,41,46)_rgb(187,54,63)_rgb(194,30,86)_rgb(120,42,57)_rgb(178,16,60)_rgb(208,28,31)_rgb(190,19,45)_rgb(228,65,101)_rgb(162,102,102)_rgb(145,56,50)_rgb(164,90,82)_rgb(185,38,54)_rgb(191,25,50)_rgb(240,86,39)_rgb(220,52,59)_rgb(124,36,57)_rgb(194,69,45)_rgb(185,58,50)_rgb(96,55,61)_rgb(149,66,78)_rgb(112,57,63)_rgb(143,66,59)_rgb(138,34,50)_rgb(163,87,118)_rgb(200,29,49)_rgb(172,14,46)_rgb(188,39,49)";

abcRed = populateColor(newAbc);

newAbc = "rgb(17, 29, 108)_rgb(20, 0, 128)_rgb(61, 128, 255)_rgb(115, 194, 251)_rgb(88, 159, 211)_rgb(138, 205, 241)_rgb(149, 200, 217)_rgb(176, 223, 229)_rgb(70, 130, 180)_rgb(114, 132, 165)_rgb(76, 80, 110)_rgb(32, 77, 146)_rgb(29, 41, 80)_rgb(15, 48, 81)_rgb(32, 51, 166)_rgb(54, 142, 204)_rgb(40, 128, 129)_rgb(79, 151, 163)_rgb(129, 216, 208)_rgb(126, 249, 255)_rgb(74, 224, 208)_rgb(67,72,84)_rgb(39,67,87)_rgb(129,154,189)_rgb(0,77,140)_rgb(88,110,125)_rgb(144,168,164)_rgb(62,79,92)_rgb(88,201,212)_rgb(188,204,218)_rgb(0,126,177)_rgb(70,75,101)_rgb(192,189,209)_rgb(64,63,111)_rgb(112,120,155)_rgb(78,129,173)_rgb(68,123,140)_rgb(0,160,176)_rgb(224,230,224)_rgb(163,180,196)_rgb(44,51,62)_rgb(93,171,213)_rgb(220,224,220)_rgb(115,145,200)_rgb(76,126,134)_rgb(49,130,132)_rgb(54,134,160)_rgb(0,117,143)_rgb(95,141,159)_rgb(82,163,214)_rgb(49,61,100)_rgb(0,89,154)_rgb(0,83,156)_rgb(118,157,166)_rgb(106,139,149)_rgb(99,141,183)_rgb(15,78,103)_rgb(144,192,204)_rgb(157,181,185)_rgb(129,215,211)_rgb(31,93,160)_rgb(0,101,110)_rgb(39,60,118)_rgb(140,173,211)";

abcBlue = populateColor(newAbc);

newAbc = "rgb(248, 171, 159)_rgb(246, 128, 157)_rgb(224, 81, 135)_rgb(245, 195, 194)_rgb(246, 90, 173)_rgb(246, 105, 177)_rgb(247, 135, 195)_rgb(249, 175, 211)_rgb(241, 156, 187)_rgb(247, 103, 203)_rgb(245, 1, 144)_rgb(248, 162, 183)_rgb(249, 166, 202)_rgb(224, 112, 162)_rgb(249, 186, 200)_rgb(221, 48, 99)_rgb(249, 111, 254)_rgb(236, 85, 120)_rgb(245, 73, 138)_rgb(224, 16, 95)_rgb(245, 24, 149)_rgb(247, 0, 255)_rgb(246, 15, 193)_rgb(239,165,200)_rgb(237,208,221)_rgb(198,33,104)_rgb(241,221,207)_rgb(220,177,175)_rgb(255,62,165)_rgb(246,200,195)_rgb(219,178,209)_rgb(205,78,124)_rgb(237,208,206)_rgb(236,161,166)_rgb(242,226,224)_rgb(222,173,149)_rgb(222,170,155)_rgb(234,125,164)_rgb(215,167,180)_rgb(241,138,173)_rgb(245,211,212)_rgb(230,128,170)_rgb(206,107,164)_rgb(253,196,189)_rgb(211,97,163)_rgb(244,131,133)_rgb(232,167,152)";

abcPink = populateColor(newAbc);

newAbc = "rgb(246, 153, 99)_rgb(191, 84, 2)_rgb(240, 94, 34)_rgb(215, 114, 44)_rgb(203, 92, 10)_rgb(179, 103, 42)_rgb(177, 85, 14)_rgb(239, 130, 12)_rgb(247, 191, 0)_rgb(204, 120, 33)_rgb(239, 114, 22)_rgb(149, 64, 0)_rgb(245, 116, 23)_rgb(122, 57, 2)_rgb(235, 150, 3)_rgb(219, 165, 33)_rgb(136, 48, 1)_rgb(245, 106, 3)_rgb(246, 166, 0)_rgb(139, 64, 0)_rgb(245, 129, 42)_rgb(245, 103, 2)_rgb(255,111,29)_rgb(240,86,39)_rgb(205,132,114)_rgb(249,99,59)_rgb(255,116,32)_rgb(255,163,104)_rgb(218,50,28)_rgb(255,190,121)_rgb(229,118,31)_rgb(255,164,74)_rgb(215,146,50)_rgb(249,170,125)_rgb(243,116,31)_rgb(195,101,60)_rgb(226,85,44)_rgb(250,122,53)_rgb(220,121,58)_rgb(199,98,43)_rgb(255,109,43)_rgb(232,112,58)_rgb(249,101,49)_rgb(244,128,55)_rgb(180,38,42)_rgb(243,148,112)_rgb(255,186,82)_rgb(226,122,83)_rgb(187,91,70)_rgb(215,60,38)_rgb(249,142,48)_rgb(194,90,60)_rgb(223,117,0)_rgb(249,103,20)_rgb(233,105,61)_rgb(216,109,57)";

abcOrange = populateColor(newAbc);

newAbc = "rgb(139,121,166)_rgb(88,69,135)_rgb(193,147,192)_rgb(117,64,106)_rgb(139,141,178)_rgb(163,87,118)_rgb(116,124,168)_rgb(192,66,138)_rgb(131,94,129)_rgb(120,67,132)_rgb(88,96,162)_rgb(62,40,92)_rgb(187,188,188)_rgb(100,58,76)_rgb(141,70,135)_rgb(182,38,246)_rgb(95,75,139)_rgb(84,66,117)_rgb(172,73,245)_rgb(115,77,133)_rgb(190,129,182)_rgb(162,107,243)_rgb(155,144,200)_rgb(178,132,190)_rgb(139,73,99)_rgb(91,72,92)_rgb(142, 175, 240)_rgb(191, 84, 2)_rgb(240, 94, 34)_rgb(215, 114, 44)_rgb(203, 92, 10)_rgb(179, 103, 42)_rgb(177, 85, 14)_rgb(239, 130, 12)_rgb(247, 191, 0)_rgb(204, 120, 33)_rgb(239, 114, 22)_rgb(149, 64, 0)_rgb(245, 116, 23)_rgb(122, 57, 2)_rgb(235, 150, 3)_rgb(219, 165, 33)_rgb(136, 48, 1)_rgb(245, 106, 3)_rgb(246, 166, 0)_rgb(139, 64, 0)_rgb(245, 129, 42)_rgb(245, 103, 2)_rgb(255,111,29)_rgb(240,86,39)_rgb(205,132,114)_rgb(249,99,59)_rgb(255,116,32)_rgb(255,163,104)_rgb(218,50,28)_rgb(255,190,121)_rgb(229,118,31)_rgb(255,164,74)_rgb(215,146,50)_rgb(249,170,125)_rgb(243,116,31)_rgb(195,101,60)_rgb(226,85,44)_rgb(250,122,53)_rgb(220,121,58)_rgb(199,98,43)_rgb(255,109,43)_rgb(232,112,58)_rgb(249,101,49)_rgb(244,128,55)_rgb(180,38,42)_rgb(243,148,112)_rgb(255,186,82)_rgb(226,122,83)_rgb(187,91,70)_rgb(215,60,38)_rgb(249,142,48)_rgb(194,90,60)_rgb(223,117,0)_rgb(249,103,20)_rgb(233,105,61)_rgb(216,109,57)";

abcViolet = populateColor(newAbc);



abcSkin=createAlphabet(abcSkin);
abcGreen=createAlphabet(abcGreen);

//console.log(abcSkin)




function getText(){
    /*
    if(isURL($("#url-text1").val()) ){
        return;
    }*/

    console.log($("#enviar-url").serialize() );
    /*
    url="/getText";
    var posting = $.post( url, $("#enviar-url").serialize() );

    // Put the results in a div
    posting.done(function( data ) {
        $("#input1").val(data);
    });
    
*/
    $.ajax({
        method: "GET",
        url: "/getText?"+$("#enviar-url").serialize(),
          //data: " url = " +  $("#url-text").val() + "",
        cache: false
    })
    .done(function( html ) {
        $("#input1").val(html);
        play();
    });
    
}



function reduceTxt(){
    txt=$("#input1").val();

    limpia=txt;

 _a = ["De "," de "," en ","El "," el ","La ", " la ", "Las ", " las "," y "," un "," los "," con ","A "," a "," al "," que "," lo "," por "," tras "," desde "," hacia "," entre "," durante "," hasta ", " por ", "Por ", " sus ", "sus "];

  for (i=0;i<_a.length;i++) {
    //console.log(val)
    limpia = limpia.split(_a[i]).join(" ");
  }

  $("#input1").val(limpia);

  play();
}

myColors = localStorage.getItem("myColors");

if(myColors==null){

    localStorage.setItem("myColors", "");

}

function saveColor(){


    var r = confirm("Are you sure?");
    if (r == true) {
      
    } else {
      return;
    }

    localStorage.setItem("myColors", JSON.stringify(abcRand));


}

loadColorMode=0;

function loadColor(){

    loadColorMode=!loadColorMode;

    $("#alphabetSelected").val("2");

    abcRand = JSON.parse(localStorage.getItem("myColors"));

}

function showColor(){

    a = localStorage.getItem("myColors");

    $("#color-input").val(a);

    $("#color-input").show();



}

function saveColorText(){


    var r = confirm("Are you sure?");
    if (r == true) {
      
    } else {
      return;
    }


    a=$("#color-input").val();


    //a=JSON.stringify(a);

    localStorage.setItem("myColors", a );

}

$("#color-input").hide();

//alert(JSON.stringify(abcRand))

// 
// Retrieve

rndtxt="";
myLang=window.location+"?en=1";

$("#goto-lang").html("English");

<? if(isset($_GET["en"])){ ?>  

myLang=(window.location+"").split("?")[0];

$("#goto-lang").html("Spanish");

rndtxt="e";

textoEn = `To Sherlock Holmes she is always THE woman. I have seldom heard him mention her under any other name. In his eyes she eclipses and predominates the whole of her sex. It was not that he felt any emotion akin to love for Irene Adler. All emotions, and that one particularly, were abhorrent to his cold, precise but admirably balanced mind. He was, I take it, the most perfect reasoning and observing machine that the world has seen, but as a lover he would have placed himself in a false position. He never spoke of the softer passions, save with a gibe and a sneer. They were admirable things for the observer--excellent for drawing the veil from mens motives and actions. But for the trained reasoner to admit such intrusions into his own delicate and finely adjusted temperament was to introduce a distracting factor which might throw a doubt upon all his mental results. Grit in a sensitive instrument, or a crack in one of his own high-power lenses, would not be more disturbing than a strong emotion in a nature such as his. And yet there was but one woman to him, and that woman was the late Irene Adler, of dubious and questionable memory.
I had seen little of Holmes lately. My marriage had drifted us away from each other. My own complete happiness, and the home-centred interests which rise up around the man who first finds himself master of his own establishment, were sufficient to absorb all my attention, while Holmes, who loathed every form of society with his whole Bohemian soul, remained in our lodgings in Baker Street, buried among his old books, and alternating from week to week between cocaine and ambition, the drowsiness of the drug, and the fierce energy of his own keen nature. He was still, as ever, deeply attracted by the study of crime, and occupied his immense faculties and extraordinary powers of observation in following out those clues, and clearing up those mysteries which had been abandoned as hopeless by the official police. From time to time I heard some vague account of his doings: of his summons to Odessa in the case of the Trepoff murder, of his clearing up of the singular tragedy of the Atkinson brothers at Trincomalee, and finally of the mission which he had accomplished so delicately and successfully for the reigning family of Holland.
Beyond these signs of his activity, however, which I merely shared with all the readers of the daily press, I knew little of my former friend and companion.
One night--it was on the twentieth of March, 1888--I was returning from a journey to a patient (for I had now returned to civil practice), when my way led me through Baker Street. As I passed the
well-remembered door, which must always be associated in my mind with my wooing, and with the dark incidents of the Study in Scarlet, I was seized with a keen desire to see Holmes again, and to
know how he was employing his extraordinary powers.
His rooms were brilliantly lit, and, even as I looked up, I saw his tall, spare figure pass twice in a dark silhouette against the blind. He was pacing the room swiftly, eagerly, with his head sunk
upon his chest and his hands clasped behind him. To me, who knew his every mood and habit, his attitude and manner told their own story. He was at work again. He had risen out of his drug-created
dreams and was hot upon the scent of some new problem. I rang the bell and was shown up to the chamber which had formerly been in part my own.
His manner was not effusive. It seldom was; but he was glad, I think, to see me. With hardly a word spoken, but with a kindly eye, he waved me to an armchair, threw across his case of cigars, and
indicated a spirit case and a gasogene in the corner. Then he stood before the fire and looked me over in his singular introspective fashion.
`;

$("#input1").val(textoEn);

$("#reduce-btn").hide();
$("#crazy-span").hide();
$("#manage-color").hide();


<? } ?>

function actualiza(){

    next(); prev();
}

function activaSRnd(x){

    console.log(x);


    $("#superRnd").val(x);

    x=parseFloat(x);

    clearInterval(killCrazy);

    if(x==0) return;

    
        $("#alphabetSelected").val(_.random(3,10));
        // mode=1; bPrev=0; bNext=1;  play();

        next(); prev();

        killCrazy=setInterval(function(){


            $("#alphabetSelected").val(_.random(3,10));

            next(); prev();
            // mode=1; bPrev=0; bNext=1;  play();

        },x*1000*60);

}

//activaSRnd(0.1)


function rgbToHex(color) {
  //console.log("->"+color);
  var bg = color.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
  function hex(x) {
    return ("0" + parseInt(x).toString(16)).slice(-2);
  }
  try{
    return  "#" + hex(bg[1]) + hex(bg[2]) + hex(bg[3]);
  }catch(err){

    return rgbToHex("rgb(121,33,135)")
  }
  
}


function point(color) {
  //console.log("->"+color);
  var bg = color.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);

  return parseInt(bg[1])+parseInt(bg[2])+parseInt(bg[3]);

}

var abcGreen  =  {
'a' : 'rgb(11,102,35)','A' : 'rgb(11,102,35)','á' : 'rgb(11,102,35)','Á' : 'rgb(11,102,35)','b' : 'rgb(157,193,131)','B' : 'rgb(157,193,131)','c' : 'rgb(112,130,56)','C' : 'rgb(112,130,56)','d' : 'rgb(199,234,70)','D' : 'rgb(199,234,70)','e' : 'rgb(63,122,77)','E' : 'rgb(63,122,77)','é' : 'rgb(63,122,77)','É' : 'rgb(63,122,77)','f' : 'rgb(0,168,107)','F' : 'rgb(0,168,107)','g' : 'rgb(143,151,121)','G' : 'rgb(143,151,121)','h' : 'rgb(79,121,66)','H' : 'rgb(79,121,66)','i' : 'rgb(41,171,135)','I' : 'rgb(41,171,135)','í' : 'rgb(41,171,135)','Í' : 'rgb(41,171,135)','j' : 'rgb(169,186,157)','J' : 'rgb(169,186,157)','k' : 'rgb(208, 230, 204)','K' : 'rgb(208, 230, 204)','l' : 'rgb(138,154,91)','L' : 'rgb(138,154,91)','m' : 'rgb(152,251,152)','M' : 'rgb(152,251,152)','n' : 'rgb(1,121,111)','N' : 'rgb(1,121,111)','ñ' : 'rgb(1,121,111)','Ñ' : 'rgb(1,121,111)','o' : 'rgb(208,240,192)','O' : 'rgb(208,240,192)','ó' : 'rgb(208,240,192)','Ó' : 'rgb(208,240,192)','p' : 'rgb(0,165,114)','P' : 'rgb(0,165,114)','q' : 'rgb(75,83,32)','Q' : 'rgb(75,83,32)','r' : 'rgb(80,220,100)','R' : 'rgb(80,220,100)','s' : 'rgb(76,187,23)','S' : 'rgb(76,187,23)','t' : 'rgb(57,255,20)','T' : 'rgb(57,255,20)','u' : 'rgb(68,76,56)','U' : 'rgb(68,76,56)','ú' : 'rgb(68,76,56)','Ú' : 'rgb(68,76,56)','v' : 'rgb(0,78,56)','V' : 'rgb(0,78,56)','w' : 'rgb(186, 230, 1)','W' : 'rgb(186, 230, 1)','x' : 'rgb(103,146,103)','X' : 'rgb(103,146,103)','y' : 'rgb(46,139,87)','Y' : 'rgb(46,139,87)','z' : 'rgb(80,200,120)','Z' : 'rgb(80,200,120)','0' : 'rgb(0,0,180)','0' : 'rgb(0,0,180)','1' : 'rgb(175,13,102)','1' : 'rgb(175,13,102)','2' : 'rgb(112,130,56)','2' : 'rgb(112,130,56)','3' : 'rgb(255,200,47)','3' : 'rgb(255,200,47)','4' : 'rgb(255,118,0)','4' : 'rgb(255,118,0)','5' : 'rgb(255,152,213)','5' : 'rgb(255,152,213)','6' : 'rgb(235,235,222)','6' : 'rgb(235,235,222)','7' : 'rgb(100,100,100)','7' : 'rgb(100,100,100)','8' : 'rgb(255,255,0)','8' : 'rgb(255,255,0)','9' : 'rgb(255,255,150)','9' : 'rgb(255,255,150)'   
};

abcSkin = {

  'a' : 'rgb(211, 147, 145)','b' : 'rgb(197, 135, 110)','c' : 'rgb(217, 140, 134)','d' : 'rgb(245, 193, 172)','e' : 'rgb(200, 136, 111)','f' : 'rgb(228, 173, 168)','g' : 'rgb(187, 121, 104)','h' : 'rgb(249, 215, 216)','i' : 'rgb(238, 241, 240)','j' : 'rgb(209, 153, 126)','k' : 'rgb(174, 100, 73)','l' : 'rgb(230, 158, 133)','m' : 'rgb(243, 194, 180)','n' : 'rgb(233, 197, 206)','ñ' : 'rgb(63, 46, 54)','o' : 'rgb(206, 129, 103)','p' : 'rgb(232, 190, 176)','q' : 'rgb(80, 38, 37)','r' : 'rgb(218, 140, 138)','s' : 'rgb(219, 136, 96)','t' : 'rgb(231, 192, 175)','u' : 'rgb(127, 73, 61)','v' : 'rgb(243, 194, 189)','w' : 'rgb(216, 152, 127)','x' : 'rgb(246, 140, 85)','y' : 'rgb(225, 170, 166)','z' : 'rgb(147, 85, 68)','0' : 'rgb(0,0,180)','0' : 'rgb(0,0,180)','1' : 'rgb(175,13,102)','1' : 'rgb(175,13,102)','2' : 'rgb(112,130,56)','2' : 'rgb(112,130,56)','3' : 'rgb(255,200,47)','3' : 'rgb(255,200,47)','4' : 'rgb(255,118,0)','4' : 'rgb(255,118,0)','5' : 'rgb(255,152,213)','5' : 'rgb(255,152,213)','6' : 'rgb(235,235,222)','6' : 'rgb(235,235,222)','7' : 'rgb(100,100,100)','7' : 'rgb(100,100,100)','8' : 'rgb(255,255,0)','8' : 'rgb(255,255,0)','9' : 'rgb(255,255,150)','9' : 'rgb(255,255,150)'   

};


all_c=""
function createAlphabet(x){
  object=x;
  elementsTotal=[];
  all_c=""

  $.each(object, function(index, value) {

    console.log(index)


    if(all_c.search(index)!=-1) return;

    all_c+=index.toLowerCase();

    //try{

      

      object[index.toUpperCase()]=value;

      if(vocals.search(index)!=-1){
        object[all_vocals[index][0]]=value; object[all_vocals[index][1]]=value;
      }


    //}catch(err){}

    if(isInt(index)){

      object[index]=object[all_letters[parseInt(index)]];


    }

    if(!isInt(index)) elementsTotal.push(value);

    //console.log(value);
  });

  //console.log(findDuplicates(elementsTotal))
  //console.log(_.uniq(elementsTotal))

  return object;

}

function hexToRgb(hex) {

    var bigint = parseInt(hex, 16);
    var r = (bigint >> 16) & 255;
    var g = (bigint >> 8) & 255;
    var b = bigint & 255;

    return "rgb("+ r + "," + g + "," + b + ")";
}

function hexToRgb2(hex) {

    var bigint = parseInt(hex, 16);
    var r = (bigint >> 16) & 255;
    var g = (bigint >> 8) & 255;
    var b = bigint & 255;

    return [r,g,b]

    return "rgb("+ r + "," + g + "," + b + ")";
}

function populateColor(x){



  dict={};
  x=x.split(" ").join("");
  x=x.split("_");

  //x=_.uniq(x);

  all_c=""

  for(var i=0;i<abecedario2.length;i++){

    if(all_c.search(abecedario2.charAt(i).toLowerCase())!=-1) continue;

    all_c+=abecedario2.charAt(i).toLowerCase();

    dict[abecedario2.charAt(i).toLowerCase()]=x[i];


  }

  //console.log(all_c)

  return createAlphabet( dict );


}


// abecedario



// newAbc  = `rgb(218, 219, 220) rgb(201, 202, 204) rgb(197, 198, 200) rgb(179, 181, 184)`;
/*
newAbc  = "rgb(45, 44, 45)_rgb(57, 56, 58)_rgb(70, 70, 72)_rgb(79, 79, 81)_rgb(88, 88, 90)_rgb(97, 97, 99)_rgb(105, 106, 108)_rgb(121, 122, 125)_rgb(129, 130, 133)_rgb(136, 137, 140)_rgb(147, 149, 152)_rgb(155, 157, 160)_rgb(159, 161, 164)_rgb(179, 181, 184)_rgb(197, 198, 200)_rgb(201, 202, 204)_rgb(218, 219, 220)_rgb(222, 223, 224)_rgb(13, 13, 13)_rgb(197,198,199)_rgb(164,156,160)_rgb(106,106,106)_rgb(213,203,210)_rgb(187,188,188)_rgb(99,95,77)_rgb(106,108,112)";

newAbc = _.shuffle(newAbc.split("_")).join("_");
newAbc+=("_"+newAbc);*/

newAbc="rgb(106,108,112)_rgb(155, 157, 160)_rgb(13, 13, 13)_rgb(129, 130, 133)_rgb(57, 56, 58)_rgb(164,156,160)_rgb(183,190,203)_rgb(45, 44, 45)_rgb(187,188,188)_rgb(136, 137, 140)_rgb(99,95,77)_rgb(88, 88, 90)_rgb(159, 161, 164)_rgb(147, 149, 152)_rgb(197, 198, 200)_rgb(70, 70, 72)_rgb(97, 97, 99)_rgb(121, 122, 125)_rgb(201, 202, 204)_rgb(105, 106, 108)_rgb(197,198,199)_rgb(213,203,210)_rgb(79, 79, 81)_rgb(179, 181, 184)_rgb(218, 219, 220)_rgb(222, 223, 224)_rgb(160,173,170)_rgb(155, 157, 160)_rgb(13, 13, 13)_rgb(129, 130, 133)_rgb(57, 56, 58)_rgb(164,156,160)_rgb(106,106,106)_rgb(45, 44, 45)_rgb(187,188,188)_rgb(136, 137, 140)_rgb(99,95,77)_rgb(88, 88, 90)_rgb(159, 161, 164)_rgb(147, 149, 152)_rgb(197, 198, 200)_rgb(70, 70, 72)_rgb(97, 97, 99)_rgb(121, 122, 125)_rgb(201, 202, 204)_rgb(105, 106, 108)_rgb(197,198,199)_rgb(213,203,210)_rgb(79, 79, 81)_rgb(179, 181, 184)_rgb(218, 219, 220)_rgb(222, 223, 224)";


abcGray = populateColor(newAbc);


newAbc="rgb(205, 177, 129)_rgb(251, 221, 175)_rgb(249, 220, 86)_rgb(248, 228, 115)_rgb(239, 252, 95)_rgb(251, 229, 180)_rgb(245, 245, 221)_rgb(239, 219, 130)_rgb(247, 190, 2)_rgb(205, 119, 33)_rgb(246, 165, 16)_rgb(249, 225, 3)_rgb(196, 145, 0)_rgb(248, 195, 9)_rgb(248, 209, 41)_rgb(219, 165, 33)_rgb(195, 176, 144)_rgb(209, 181, 91)_rgb(248, 211, 0)_rgb(246, 166, 0)_rgb(249, 218, 95)_rgb(248, 222, 126)_rgb(238,234,151)_rgb(223,230,159)_rgb(237,237,183)_rgb(227,176,75)_rgb(236,233,155)_rgb(237,233,173)_rgb(255,211,0)_rgb(204,147,80)_rgb(220,201,158)_rgb(190,138,74)_rgb(255,215,99)_rgb(238,150,38)_rgb(239,220,117)_rgb(223,216,126)_rgb(203,142,22)_rgb(212,204,154)_rgb(254,213,93)_rgb(237,255,0)_rgb(212,171,49)_rgb(247,183,24)_rgb(241,191,112)_rgb(248,231,44)_rgb(249,161,46)_rgb(241,227,173)_rgb(238,231,142)_rgb(244,236,194)_rgb(216,185,101)_rgb(251,183,85)_rgb(196,166,71)_rgb(246,211,0)_rgb(211,156,67)_rgb(240,221,157)_rgb(240,205,91)_rgb(255,220,1)"

//p=[]; for(i=0;i<27;i++){ p.push(abcGray[abecedario2.charAt(i)]); } console.log(findDuplicates(p))

abcYellow = populateColor(newAbc);

newAbc = "rgb(147, 59, 22)_rgb(141, 2, 30)_rgb(94, 24, 19)_rgb(184, 14, 9)_rgb(65, 12, 9)_rgb(244, 40, 1)_rgb(192, 9, 49)_rgb(202, 52, 51)_rgb(211, 30, 60)_rgb(180, 55, 87)_rgb(244, 9, 2)_rgb(127, 23, 27)_rgb(234, 60, 85)_rgb(165, 91, 82)_rgb(150, 0, 24)_rgb(178, 33, 33)_rgb(224, 16, 95)_rgb(195, 24, 5)_rgb(206, 91, 92)_rgb(238, 41, 58)_rgb(124, 10, 0)_rgb(244, 36, 0)_rgb(246, 128, 113)_rgb(122,31,61)_rgb(123,53,57)_rgb(119,33,46)_rgb(124,41,70)_rgb(189,22,44)_rgb(193,74,100)_rgb(171,52,117)_rgb(158,16,48)_rgb(164,41,46)_rgb(187,54,63)_rgb(194,30,86)_rgb(120,42,57)_rgb(178,16,60)_rgb(208,28,31)_rgb(190,19,45)_rgb(228,65,101)_rgb(162,102,102)_rgb(145,56,50)_rgb(164,90,82)_rgb(185,38,54)_rgb(191,25,50)_rgb(240,86,39)_rgb(220,52,59)_rgb(124,36,57)_rgb(194,69,45)_rgb(185,58,50)_rgb(96,55,61)_rgb(149,66,78)_rgb(112,57,63)_rgb(143,66,59)_rgb(138,34,50)_rgb(163,87,118)_rgb(200,29,49)_rgb(172,14,46)_rgb(188,39,49)";

abcRed = populateColor(newAbc);

newAbc = "rgb(17, 29, 108)_rgb(20, 0, 128)_rgb(61, 128, 255)_rgb(115, 194, 251)_rgb(88, 159, 211)_rgb(138, 205, 241)_rgb(149, 200, 217)_rgb(176, 223, 229)_rgb(70, 130, 180)_rgb(114, 132, 165)_rgb(76, 80, 110)_rgb(32, 77, 146)_rgb(29, 41, 80)_rgb(15, 48, 81)_rgb(32, 51, 166)_rgb(54, 142, 204)_rgb(40, 128, 129)_rgb(79, 151, 163)_rgb(129, 216, 208)_rgb(126, 249, 255)_rgb(74, 224, 208)_rgb(67,72,84)_rgb(39,67,87)_rgb(129,154,189)_rgb(0,77,140)_rgb(88,110,125)_rgb(144,168,164)_rgb(62,79,92)_rgb(88,201,212)_rgb(188,204,218)_rgb(0,126,177)_rgb(70,75,101)_rgb(192,189,209)_rgb(64,63,111)_rgb(112,120,155)_rgb(78,129,173)_rgb(68,123,140)_rgb(0,160,176)_rgb(224,230,224)_rgb(163,180,196)_rgb(44,51,62)_rgb(93,171,213)_rgb(220,224,220)_rgb(115,145,200)_rgb(76,126,134)_rgb(49,130,132)_rgb(54,134,160)_rgb(0,117,143)_rgb(95,141,159)_rgb(82,163,214)_rgb(49,61,100)_rgb(0,89,154)_rgb(0,83,156)_rgb(118,157,166)_rgb(106,139,149)_rgb(99,141,183)_rgb(15,78,103)_rgb(144,192,204)_rgb(157,181,185)_rgb(129,215,211)_rgb(31,93,160)_rgb(0,101,110)_rgb(39,60,118)_rgb(140,173,211)";

abcBlue = populateColor(newAbc);

newAbc = "rgb(248, 171, 159)_rgb(246, 128, 157)_rgb(224, 81, 135)_rgb(245, 195, 194)_rgb(246, 90, 173)_rgb(246, 105, 177)_rgb(247, 135, 195)_rgb(249, 175, 211)_rgb(241, 156, 187)_rgb(247, 103, 203)_rgb(245, 1, 144)_rgb(248, 162, 183)_rgb(249, 166, 202)_rgb(224, 112, 162)_rgb(249, 186, 200)_rgb(221, 48, 99)_rgb(249, 111, 254)_rgb(236, 85, 120)_rgb(245, 73, 138)_rgb(224, 16, 95)_rgb(245, 24, 149)_rgb(247, 0, 255)_rgb(246, 15, 193)_rgb(239,165,200)_rgb(237,208,221)_rgb(198,33,104)_rgb(241,221,207)_rgb(220,177,175)_rgb(255,62,165)_rgb(246,200,195)_rgb(219,178,209)_rgb(205,78,124)_rgb(237,208,206)_rgb(236,161,166)_rgb(242,226,224)_rgb(222,173,149)_rgb(222,170,155)_rgb(234,125,164)_rgb(215,167,180)_rgb(241,138,173)_rgb(245,211,212)_rgb(230,128,170)_rgb(206,107,164)_rgb(253,196,189)_rgb(211,97,163)_rgb(244,131,133)_rgb(232,167,152)";

abcPink = populateColor(newAbc);

newAbc2 = "rgb(246, 153, 99)_rgb(191, 84, 2)_rgb(240, 94, 34)_rgb(215, 114, 44)_rgb(203, 92, 10)_rgb(179, 103, 42)_rgb(177, 85, 14)_rgb(239, 130, 12)_rgb(247, 191, 0)_rgb(204, 120, 33)_rgb(239, 114, 22)_rgb(149, 64, 0)_rgb(245, 116, 23)_rgb(122, 57, 2)_rgb(235, 150, 3)_rgb(219, 165, 33)_rgb(136, 48, 1)_rgb(245, 106, 3)_rgb(246, 166, 0)_rgb(139, 64, 0)_rgb(245, 129, 42)_rgb(245, 103, 2)_rgb(255,111,29)_rgb(240,86,39)_rgb(205,132,114)_rgb(249,99,59)_rgb(255,116,32)_rgb(255,163,104)_rgb(218,50,28)_rgb(255,190,121)_rgb(229,118,31)_rgb(255,164,74)_rgb(215,146,50)_rgb(249,170,125)_rgb(243,116,31)_rgb(195,101,60)_rgb(226,85,44)_rgb(250,122,53)_rgb(220,121,58)_rgb(199,98,43)_rgb(255,109,43)_rgb(232,112,58)_rgb(249,101,49)_rgb(244,128,55)_rgb(180,38,42)_rgb(243,148,112)_rgb(255,186,82)_rgb(226,122,83)_rgb(187,91,70)_rgb(215,60,38)_rgb(249,142,48)_rgb(194,90,60)_rgb(223,117,0)_rgb(249,103,20)_rgb(233,105,61)_rgb(216,109,57)";

abcOrange = populateColor(newAbc);

newAbc = "rgb(139,121,166)_rgb(88,69,135)_rgb(193,147,192)_rgb(117,64,106)_rgb(139,141,178)_rgb(163,87,118)_rgb(116,124,168)_rgb(192,66,138)_rgb(131,94,129)_rgb(120,67,132)_rgb(88,96,162)_rgb(62,40,92)_rgb(187,188,188)_rgb(100,58,76)_rgb(141,70,135)_rgb(182,38,246)_rgb(95,75,139)_rgb(84,66,117)_rgb(172,73,245)_rgb(115,77,133)_rgb(190,129,182)_rgb(162,107,243)_rgb(155,144,200)_rgb(178,132,190)_rgb(139,73,99)_rgb(91,72,92)_rgb(142, 175, 240)_rgb(191, 84, 2)_rgb(240, 94, 34)_rgb(215, 114, 44)_rgb(203, 92, 10)_rgb(179, 103, 42)_rgb(177, 85, 14)_rgb(239, 130, 12)_rgb(247, 191, 0)_rgb(204, 120, 33)_rgb(239, 114, 22)_rgb(149, 64, 0)_rgb(245, 116, 23)_rgb(122, 57, 2)_rgb(235, 150, 3)_rgb(219, 165, 33)_rgb(136, 48, 1)_rgb(245, 106, 3)_rgb(246, 166, 0)_rgb(139, 64, 0)_rgb(245, 129, 42)_rgb(245, 103, 2)_rgb(255,111,29)_rgb(240,86,39)_rgb(205,132,114)_rgb(249,99,59)_rgb(255,116,32)_rgb(255,163,104)_rgb(218,50,28)_rgb(255,190,121)_rgb(229,118,31)_rgb(255,164,74)_rgb(215,146,50)_rgb(249,170,125)_rgb(243,116,31)_rgb(195,101,60)_rgb(226,85,44)_rgb(250,122,53)_rgb(220,121,58)_rgb(199,98,43)_rgb(255,109,43)_rgb(232,112,58)_rgb(249,101,49)_rgb(244,128,55)_rgb(180,38,42)_rgb(243,148,112)_rgb(255,186,82)_rgb(226,122,83)_rgb(187,91,70)_rgb(215,60,38)_rgb(249,142,48)_rgb(194,90,60)_rgb(223,117,0)_rgb(249,103,20)_rgb(233,105,61)_rgb(216,109,57)";

abcViolet = populateColor(newAbc);


cat = localStorage.getItem("myCat");
cat1 = localStorage.getItem("myCat1");
cat2 = localStorage.getItem("myCat2");
cat3 = localStorage.getItem("myCat3");

if(cat3===null){
    
    localStorage.setItem("myCat3", "389" )

cat3 = localStorage.getItem("myCat3");


} 

if(cat3.length>200){
    
    cat3=cat3.split(",")[0]+""
    
    localStorage.setItem("myCat3", cat3 )

cat3 = localStorage.getItem("myCat3");
    
}

$("#cat3").html(cat3)

if(cat===null){
    
    localStorage.setItem("myCat",$("#myPage").val() +"##"+$("#book").val() +"##"+ $("#alphabetSelected").val() )

cat = localStorage.getItem("myCat");


} 



if(cat1===null){
   pp=""
    
  for(i=0;i<lib.length;i++){
    
    pp+= "1##"+ lib[i] +"##"+ $("#alphabetSelected").val() 
   
     if(i!=lib.length-1) pp+="||";
      
  }
    
    localStorage.setItem("myCat1", pp )

cat1 = localStorage.getItem("myCat1");


} 


if(cat2===null){
    
    localStorage.setItem("myCat2",$("#flash").val() +"##"+$("#flash1").val() )

cat2 = localStorage.getItem("myCat2");


} 

//console.log(cat)
split1=cat.split("##")
split22=cat2.split("##")

$("#flash").val(split22[0])
$("#flash1").val(split22[1])

//alert()
// alphabetSelected
page1=split1[0]
book1=split1[1]
alpha1=split1[2]

if(alpha1===null) alpha1=1;

if(page1=="0") page1=1;

$("#book").val(book1)
$("#myPage").val(page1)
$("#alphabetSelected").val(0)
<? if($_SERVER['SERVER_PORT'] ==8013){ ?>
    $("#myPage").val(_.random(1,200))

<? } ?>

<? if($_SERVER['SERVER_PORT'] ==6001){ ?>
    $("#alphabetSelected").val(14)

<? } ?>

getPage(page1)
//getRndTxt();
//play();

<? if($_SERVER['SERVER_PORT'] ==8055){ ?>
 setTimeout(function(){ $("#flash").val(0); uodate();   },500)

<? } ?>

</script>
</body>
</html>