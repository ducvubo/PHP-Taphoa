<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .footer {
            background-color: #f2f2f2;
        }

        .footer .item1 {
            border-bottom: 1px solid #ccc;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 500;
            font-size: 25px;
        }

        .footer .item2 {
            text-align: center;
            color: red;
            font-style: italic;
        }

        .footer .item3tong {
            display: flex;
            flex-wrap: wrap;
        }

        .footer .item3tong .item3 {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 399px;
            margin: 16px 45px;
        }

        .footer .item3tong .item3 .item3trai {
            background-color: black;
            color: yellow;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 30px;
        }

        .footer .item3tong .item3 .item3trai span {
            font-size: 25px;
        }

        .footer .item3tong .item3 .item3phai {
            width: 80%;
            display: flex;
            flex-direction: column;
        }

        .footer .item3tong .item3 .item3phai .tren {
            text-transform: uppercase;
            font-weight: bold;
        }

        .footer .item4 {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }

        .footer .item4 .item4trai {
            width: 50%;
            margin-left: 120px;
        }

        .footer .item4 .item4trai .tren {
            font-weight: 500;
            height: 50px;
        }

        .footer .item4 .item4trai .tren .boder {
            border-bottom: 1px solid black;
            width: 131px;
            padding-top: 15px;
        }

        .footer .item4 .item4trai .giua .boder {
            border-bottom: 1px solid black;
            width: 655px;
            padding-top: 15px;
        }

        .footer .item4 .item4giua {
            width: 25%;
        }

        .footer .item4 .item4giua .tren {
            font-weight: 500;
            height: 50px;
        }

        .footer .item4 .item4giua .tren .boder {
            border-bottom: 1px solid black;
            width: 80px;
            padding-top: 15px;
        }

        .footer .item4 .item4giua .duoi {
            display: flex;
            flex-direction: column;
        }

        .footer .item4 .item4phai {
            width: 25%;
        }

        .footer .item4 .item4phai .tren {
            font-weight: 500;
            height: 50px;
        }

        .footer .item4 .item4phai .tren .boder {
            border-bottom: 1px solid black;
            width: 56px;
            padding-top: 15px;
        }

        .footer .item4 .item4phai .duoi {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <footer class="footer mt-3">
        <div class="item1">
            <span>Địa chỉ các kho hàng(15)</span>
        </div>
        <div class="item2">
            Giao hàng toàn quốc. Giao nhanh cả ban đêm, ngày nghỉ
        </div>
        <div class="item3tong">
            <div class="item3">
                <div class="item3trai">
                    <span>1</span>
                </div>
                <div class="item3phai">
                    <span class="tren">Chi nhánh Bình Thạnh</span>
                    <span class="dưới">Đường D2, Q.Bình Thạnh, Tp.HCM</span>
                </div>
            </div>
            <div class="item3">
                <div class="item3trai">
                    <span>2</span>
                </div>
                <div class="item3phai">
                    <span class="tren">Chi nhánh Hà Đông</span>
                    <span class="dưới">Đường Thanh Bình, Mộ Lao, Hà Đông</span>
                </div>
            </div>
            <div class="item3">
                <div class="item3trai">
                    <span>3</span>
                </div>
                <div class="item3phai">
                    <span class="tren">Chi nhánh Quận Thủ Đức</span>
                    <span class="dưới">Đường Võ Văn Ngân, Thủ Đức, TP.HCM</span>
                </div>
            </div>
            <div class="item3">
                <div class="item3trai">
                    <span>4</span>
                </div>
                <div class="item3phai">
                    <span class="tren">Chi nhánh Quận 6</span>
                    <span class="dưới">Đường Chu Văn An, Quận 6, Tp.HCM</span>
                </div>
            </div>
            <div class="item3">
                <div class="item3trai">
                    <span>5</span>
                </div>
                <div class="item3phai">
                    <span class="tren">Chi nhánh Hai Bà Trưng</span>
                    <span class="dưới">
                        Đường Minh Khai, Q.Hai Bà Trưng, Hà Nội
                    </span>
                </div>
            </div>
            <div class="item3">
                <div class="item3trai">
                    <span>6</span>
                </div>
                <div class="item3phai">
                    <span class="tren">Chi nhánh Tân phú</span>
                    <span class="dưới">Đường N4, Sơn Kỳ, Tân Phú, TP.HCM</span>
                </div>
            </div>
            <div class="item3">
                <div class="item3trai">
                    <span>7</span>
                </div>
                <div class="item3phai">
                    <span class="tren">Chi nhánh Gò Vấp</span>
                    <span class="dưới">
                        Đường Quang Trung, Q.Gò Vấp, TP.HCM
                    </span>
                </div>
            </div>
            <div class="item3">
                <div class="item3trai">
                    <span>8</span>
                </div>
                <div class="item3phai">
                    <span class="tren">Chi nhánh Hoàn Kiếm</span>
                    <span class="dưới">
                        Đường Phan Chu Trinh, Hoàn Kiếm, Hà Nội
                    </span>
                </div>
            </div>
            <div class="item3">
                <div class="item3trai">
                    <span>9</span>
                </div>
                <div class="item3phai">
                    <span class="tren">Chi nhánh Tân Bình</span>
                    <span class="dưới">
                        Đường Lý Liên Kiệt, Q.Tân Bình, TP.HCM
                    </span>
                </div>
            </div>
            <div class="item3">
                <div class="item3trai">
                    <span>10</span>
                </div>
                <div class="item3phai">
                    <span class="tren">Chi nhánh Quận 10</span>
                    <span class="dưới">Đường Ba Tháng, Quận 10, TP.HCM</span>
                </div>
            </div>
            <div class="item3">
                <div class="item3trai">
                    <span>11</span>
                </div>
                <div class="item3phai">
                    <span class="tren">Chi nhánh Bình Tân</span>
                    <span class="dưới">
                        Đường Kinh Dương Vương, Bình tân, TP.HCM
                    </span>
                </div>
            </div>
            <div class="item3">
                <div class="item3trai">
                    <span>12</span>
                </div>
                <div class="item3phai">
                    <span class="tren">Chi nhánh Nha Trang</span>
                    <span class="dưới">Diên Phước, Diên Khánh, Nha Trang</span>
                </div>
            </div>
            <div class="item3">
                <div class="item3trai">
                    <span>13</span>
                </div>
                <div class="item3phai">
                    <span class="tren">Chi nhánh Quảng Ninh</span>
                    <span class="dưới">Đường 25/4, TP.Hạ Long, Quảng Ninh</span>
                </div>
            </div>
            <div class="item3">
                <div class="item3trai">
                    <span>14</span>
                </div>
                <div class="item3phai">
                    <span class="tren">Chi nhánh Cần Thơ</span>
                    <span class="dưới">
                        Quốc Lộ 91B, Quận Ninh Kiều, Cần Thơ
                    </span>
                </div>
            </div>
            <div class="item3">
                <div class="item3trai">
                    <span>15</span>
                </div>
                <div class="item3phai">
                    <span class="tren">Chi nhánh Đà Nẵng</span>
                    <span class="dưới">
                        Đường Trần Quang Diệu, Q.Sơn Trà, Đà Nẵng
                    </span>
                </div>
            </div>
        </div>
        <div class="item4">
            <div class="item4trai">
                <div class="tren">
                    Cửa Hàng Tạp Hóa
                    <div class="boder"></div>
                </div>
                <div class="giua">
                    Website chuyên cung cấp sản phẩm giá sỉ lẻ phân phối toàn quốc,
                    khách hàng có nhu cầu vui lòng đặt hàng để chúng tôi kiểm kho và
                    báo lại sớm nhất. Ngoài ra chúng tôi còn cung câp nguồn hàng sỉ
                    khi đặt số lượng lớn
                    <div class="boder"></div>
                </div>
                <div class="duoi">info@cuahangtaphoa.com</div>
            </div>
            <div class="item4giua">
                <div class="tren">
                    <i class="fas fa-list"></i>Category
                    <div class="boder"></div>
                </div>
                <div class="duoi">
                    <span>
                        <i class="fas fa-chevron-right"></i>Điều khoản sử dụng
                    </span>
                    <span>
                        <i class="fas fa-chevron-right"></i>Chính sách bảo mật
                    </span>
                    <span>
                        <i class="fas fa-chevron-right"></i>Giới thiệu
                    </span>
                    <span>
                        <i class="fas fa-chevron-right"></i>Liên hệ
                    </span>
                </div>
            </div>
            <div class="item4phai">
                <div class="tren">
                    <i class="fas fa-link"></i>Other
                    <div class="boder"></div>
                </div>
                <div class="duoi">
                    <span>
                        <i class="fas fa-chevron-right"></i>Sản phẩm Hot
                    </span>
                    <span>
                        <i class="fas fa-chevron-right"></i>Vay tiền nhanh Olava
                    </span>
                    <span>
                        <i class="fas fa-chevron-right"></i>Poper Bình Thạnh
                    </span>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>