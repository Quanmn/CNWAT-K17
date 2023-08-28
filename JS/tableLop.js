
function validateForm() {
    var maLop = document.getElementById("maLop").value;
    var tenLop = document.getElementById("tenLop").value;
    var khoaHoc = document.getElementById("khoaHoc").value;
    var gvcn = document.getElementById("gvcn").value;

    if (maLop.length > 6) {
        alert("Mã lớp không được quá 6 ký tự.");
        return false;
    }

    if (tenLop.length > 50) {
        alert("Tên lớp không được quá 50 ký tự.");
        return false;
    }

    if (isNaN(khoaHoc) || parseInt(khoaHoc) <= 0) {
        alert("Khóa học phải là số nguyên dương.");
        return false;
    }

    if (khoaHoc.length > 50) {
        alert("Khóa học không được quá 50 ký tự.");
        return false;
    }

    if (gvcn.length > 50) {
        alert("Tên giáo viên chủ nhiệm không được quá 50 ký tự.");
        return false;
    }
}
