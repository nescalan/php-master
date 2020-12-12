// FIRST EXCERCISE
let triangle = ["#", "##", "###", "####", "#####", "######", "#######"];

// function MakeTriangle() {
//   for (let i = 0; i < triangle.length; i++) {
//     console.log(triangle[i]);
//   }
// }


function MakeTriangle(){
  for (let line = "#"; line.length < 8; line += "#")
  console.log(line);
}