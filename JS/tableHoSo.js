function validateForm() {
    var maHS = document.getElementById("maHS").value;
    var hoTen = document.getElementById("hoTen").value;
    var ngaySinh = document.getElementById("ngaySinh").value;
    var diaChi = document.getElementById("diaChi").value;
    var lop = document.getElementById("lop").value;
    var diemToan = document.getElementById("diemToan").value;
    var diemLy = document.getElementById("diemLy").value;
    var diemHoa = document.getElementById("diemHoa").value;

    if (maHS.length > 8) {
        alert("Mã học sinh không được quá 8 ký tự.");
        return false;
    }

    if (hoTen.length > 50) {
        alert("Họ tên không được quá 50 ký tự.");
        return false;
    }
    var regexDate = /^\d{2}-\d{2}-\d{4}$/;
    if (!regexDate.test(ngaySinh)) {
        alert("Ngày sinh phải có định dạng dd-mm-yyyy.");
        return false;
    }

    if (diaChi.length > 150) {
        alert("Địa chỉ không được quá 150 ký tự.");
        return false;
    }

    if (lop.length > 6) {
        alert("Lớp không được quá 6 ký tự.");
        return false;
    }

    if (isNaN(parseFloat(diemToan)) || parseFloat(diemToan) < 0 || parseFloat(diemToan) > 10) {
        alert("Điểm toán phải là số từ 0 đến 10.");
        return false;
    }

    if (isNaN(parseFloat(diemLy)) || parseFloat(diemLy) < 0 || parseFloat(diemLy) > 10) {
        alert("Điểm lý phải là số từ 0 đến 10.");
        return false;
    }

    if (isNaN(parseFloat(diemHoa)) || parseFloat(diemHoa) < 0 || parseFloat(diemHoa) > 10) {
        alert("Điểm hóa phải là số từ 0 đến 10.");
        return false;
    }
}
