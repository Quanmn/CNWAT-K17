function standardizeName() {
    var hoTenInput = document.getElementById("hoTen");
    var hoTen = hoTenInput.value.trim().replace(/\s+/g, " ");
    hoTen = hoTen.replace(/(?:^|\s)\S/g, function (a) {
        return a.toUpperCase();
    });
    hoTenInput.value = hoTen;
}

function formatDate(event) {
    var ngaySinhInput = document.getElementById("ngaySinh");
    if (event.keyCode === 13) {
        ngaySinhInput.value = ngaySinhInput.value.replace(/(\d{2})(\d{2})/, '$1/$2/');
    }
}

function validateEmail() {
    var emailInput = document.getElementById("email");
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(emailInput.value)) {
        alert("Email không hợp lệ.");
    }
}

function validatePassword() {
    var matKhauInput = document.getElementById("matKhau");
    var matKhau2Input = document.getElementById("matKhau2");
    if (matKhauInput.value !== matKhau2Input.value) {
        alert("Mật khẩu gõ lại không đúng.");
    }
}

function moveToNext(event, nextElementId) {
    if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById(nextElementId).focus();
    }
}