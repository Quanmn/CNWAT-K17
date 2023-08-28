// Khởi tạo biến lưu trữ dữ liệu
let currentNumber = "";
let storedNumber = "";
let operator = "";
let result = "";

// Lấy các phần tử HTML cần tương tác
const display = document.getElementById("display");
const numbers = document.querySelectorAll(".number");
const operators = document.querySelectorAll(".operator");
const equalsBtn = document.getElementById("equals");
const clearBtn = document.getElementById("clear");
const plusMinusBtn = document.getElementById("plus-minus");

// Hàm cập nhật hiển thị
function updateDisplay() {
  display.textContent = currentNumber;
}

// Xử lý sự kiện khi số được nhấn
numbers.forEach((number) => {
  number.addEventListener("click", () => {
    if (operator && storedNumber === "") {
      storedNumber = currentNumber;
      currentNumber = "";
    }
    currentNumber += number.textContent;
    updateDisplay();
  });
});

// Xử lý sự kiện khi phép toán được chọn
operators.forEach((op) => {
  op.addEventListener("click", () => {
    operator = op.textContent;
    if (currentNumber !== "") {
      storedNumber = currentNumber;
      currentNumber = "";
    }
  });
});

// Xử lý sự kiện nút "="
equalsBtn.addEventListener("click", () => {
  if (currentNumber !== "") {
    switch (operator) {
      case "+":
        result = parseFloat(storedNumber) + parseFloat(currentNumber);
        break;
      case "-":
        result = parseFloat(storedNumber) - parseFloat(currentNumber);
        break;
      case "*":
        result = parseFloat(storedNumber) * parseFloat(currentNumber);
        break;
      case "/":
        result = parseFloat(storedNumber) / parseFloat(currentNumber);
        break;
      case "%":
        result = parseFloat(storedNumber) % parseFloat(currentNumber);
        break;
    }
    currentNumber = result.toString();
    storedNumber = "";
    operator = "";
    updateDisplay();
  }
});

// Xử lý sự kiện nút "C"
clearBtn.addEventListener("click", () => {
  currentNumber = "";
  storedNumber = "";
  operator = "";
  result = "";
  updateDisplay();
});

// Xử lý sự kiện nút "+/-"
plusMinusBtn.addEventListener("click", () => {
  currentNumber = (parseFloat(currentNumber) * -1).toString();
  updateDisplay();
});

// Khởi tạo hiển thị ban đầu
updateDisplay();
