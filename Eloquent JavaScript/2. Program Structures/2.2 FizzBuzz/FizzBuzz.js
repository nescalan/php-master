function FizzBuzz() {
  for (i = 1; i <= 100; i++) {
    if (i % 3 == 0) {
      console.log("El numero: " + i + " es Fizz");
    }

    if (i % 5 == 0 && i % 3 != 0) {
      console.log("El numero: " + i + " es Buzz");
    }
    console.log(i);
  }
}
