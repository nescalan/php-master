let size = 8;
let space = " ";
let pound = "#";
let nextLine = "\n";

function ChessBoard() {
  for (let i = 0; i < size; i++) {
    if (i % 2 == 0) {
      console.log(space, pound, space, pound, space, pound, space, pound);
    } else {
      console.log(pound, space, pound, space, pound, space, pound);
    }
  }
}
