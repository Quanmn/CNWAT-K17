- Kịch bản : CWE-541: Inclusion of Sensitive Information in an Include File
- Mô tả: là một lỗ hổng liên quan tới việc đưa thông tin nhạy cảm như tài khoản, mật khẩu
vào một tệp liên quan tới phần mềm, hệ thống sẽ gây ra rò rỉ thông tin quan trọng nếu tệp đó có thể 
truy cập từ bên ngoài
- Khắc phục: Thiết lập biến môi trường phổ biến, hoặc mã hóa dùng khóa giải mã
    + Vô Shell Xampp thiết lập biến môi trường 
        setx DB_USERNAME test
        setx DB_PASSWORD 123456@mysql
