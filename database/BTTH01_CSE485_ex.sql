/*a. Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình*/
Select * from baiviet Where ma_tloai = "2"

/*b. Liệt kê các bài viết của tác giả “Nhacvietplus”*/
Select * from baiviet inner join tacgia on baiviet.ma_tgia = tacgia.ma_tgia Where tacgia.ten_tgia = "Nhacvietplus"

/*c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào.*/
SELECT * FROM theloai WHERE ma_tloai NOT IN (SELECT ma_tloai from baiviet GROUP by ma_tloai);

/*d. Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên
thể loại, ngày viết.*/
Select ma_bviet,tieude,ten_bhat,ten_tgia,ten_bhat ,ngayviet
FROM baiviet INNER JOIN theloai INNER JOIN tacgia 
WHERE baiviet.ma_tgia = tacgia.ma_tgia AND baiviet.ma_tloai = theloai.ma_tloai 

/*e. Tìm thể loại có số bài viết nhiều nhất */
SELECT ten_tloai, COUNT(*) AS soluongnhieunhat
FROM baiviet, theloai
WHERE baiviet.ma_tloai = theloai.ma_tloai
GROUP BY ten_tloai
ORDER BY soluongnhieunhat DESC
LIMIT 2;

/*f. Liệt kê 2 tác giả có số bài viết nhiều nhất*/
SELECT ten_tgia, COUNT(*) AS Tacgianhieunhat
FROM tacgia, baiviet
WHERE tacgia.ma_tgia = baiviet.ma_tgia
GROUP BY ten_tgia
ORDER BY Tacgianhieunhat DESC
LIMIT 2;

/*g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”,
“em” */
SELECT * FROM baiviet WHERE ten_bhat LIKE '%yêu%'OR'%thương%'OR'%anh%'OR'%em%'

/*h. Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ
“yêu”, “thương”, “anh”, “em” */
SELECT * FROM baiviet WHERE tieude OR ten_bhat LIKE '%yêu%'OR'%thương%'OR'%anh%'OR'%em%'

/*i. Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên
thể loại và tên tác giả*/
CREATE VIEW vw_Music AS
SELECT ma_bviet,tieude,ten_bhat,tomtat,noidung,ngayviet,ten_tloai,ten_tgia
FROM baiviet INNER JOIN tacgia INNER JOIN theloai
WHERE baiviet.ma_tloai=theloai.ma_tloai AND baiviet.ma_tgia=tacgia.ma_tgia;

/*j. Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về danh sách 
Bài viết của thể loại đó. Nếu thể loại không tồn tại thì hiển thị thông báo lỗi.*/
CREATE PROCEDURE sp_DSBaiViet
@ten_tloai varchar
AS
BEGIN
    SELECT * FROM theloai WHERE ten_tloai = @ten_tloai
END

EXEC sp_DSBaiViet @ten_tloai = 'Nhạc trữ tình'


/*k. Thêm mới cột SLBaiViet vào trong bảng theloai. Tạo 1 trigger có tên tg_CapNhatTheLoai để
khi thêm/sửa/xóa bài viết thì số lượng bài viết trong bảng theloai được cập nhật theo.*/


/*l. Bổ sung thêm bảng Users để lưu thông tin Tài khoản đăng nhập và sử dụng cho chức năng
Đăng nhập/Quản trị trang web.*/
