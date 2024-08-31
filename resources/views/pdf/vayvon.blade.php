
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CTUT|Giấy xác nhận Vay vốn</title>
    <style type="text/css">

        /* .border{
            border: none;
        } */

        .center{
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-left: 20px;
        }
        th, td {
            padding: 6px 2px 2px 2px;
            text-align: left;
            /* white-space: nowrap;  */
            font-family: 'Times New Roman';
            font-size: 12pt;
        }
        span{
            padding: 2px;
            text-align: left;
            font-family: 'Times New Roman';
            font-size: 12pt;
        }
        /* .responsive-table {
            overflow-x: auto;
        } */
        .break_page{
            page-break-after: always;
        }
    </style>
</head>

<body>
    {{-- @if ($pdf[0]['active'] == 0)
        <div >Không có sinh viên</div>
    @else --}}
        @php
            $i = 0;
        @endphp
        @foreach ( $pdf as $value )
        @php
 $i ++;
        @endphp


            <div style="padding-top: -60px;text-align:right; font-family: 'Times New Roman', Times, serif; font-size: 10pt;font-style:italic">{{$value->mp}}</div>
            <table style="margin-top: 30px;margin-left: 10px;">
                <tbody>
                    <tr>
                        <td width="45%"  class="center  border"   style="vertical-align: top">
                            <div>UBND THÀNH PHỐ CẦN THƠ </div>
                            <div style="font-weight:bold">TRƯỜNG ĐẠI HỌC </div>
                            <div style="font-weight:bold">KỸ THUẬT - CÔNG NGHỆ CẦN THƠ</div>
                            <hr  width="50%"  style="height:1px;color:black;margin-top: 2px;font-weight:bold;"/>
                        </td width="55%">
                        <td   class="center  border"   style="vertical-align: top">
                            <div    style="font-weight:bold">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</div>
                            <div    style="font-weight:bold">Độc lập - Tự do - Hạnh phúc</div>
                            <hr     width="62%" style="height:1px;color:black;margin-top: 2px;font-weight:bold;"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tbody>
                    <tr>
                        <td colspan = "2"   class="center  border"   style="padding-top:15px;padding-bottom:15px">
                            <div style="font-weight:bold; font-size: 13pt">GIẤY XÁC NHẬN</div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tbody>
                    <tr>
                        <td colspan = "3"  class=" border" >
                            <div > Họ và tên sinh viên:&nbsp; <strong>{{$value->hoten}}</strong></div>
                        </td>
                    </tr>
                    <tr>
                        <td class=" border" width="34%">
                            <div    >Ngày sinh: &nbsp; {{$value->ngaysinh}} </div>
                        </td>
                        <td class=" border" width="30%">
                            <div    >Giới tính: &nbsp; {{$value->gioitinh}} </div>
                        </td>
                        <td class=" border" width="36%">
                            <div  >MSSV:&nbsp;{{$value->mssv}}</div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tbody>
                    <tr>
                        <td class=" border" width="64%">
                            <div  >Số CMND/CCCD:&nbsp;{{$value->cccd}}</div>
                        </td>
                        <td class=" border" width="36%">
                            <div  >Ngày cấp:&nbsp; {{$value->ngaycapcccd}} </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tbody>
                    <tr>
                        <td colspan = "3" class=" border">
                            <div  >Nơi cấp:&nbsp; {{$value->noicapcccd}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan = "3" class=" border">
                            <div  > Mã trường theo học: KCC</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan = "3" class=" border">
                            <div  > Tên trường: Trường Đại học Kỹ thuật - Công nghệ Cần Thơ</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan = "3" class=" border">
                            <div  >Ngành học:&nbsp; {{$value->name_major}}</div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tbody>
                    <tr>
                        <td  class=" border" width="50%">
                            <div  >Trình độ đào tạo:&nbsp; Đại học</div>
                        </td>
                        <td class=" border" width="50%">
                            <div  >Khóa:&nbsp; 2023</div>
                        </td>

                    </tr>
                </tbody>
            </table>
            <table>
                <tbody>
                    <tr>

                        <td colspan = "2" class=" border" width="50%">
                            <div  >Loại hình đào tạo:&nbsp;Chính quy</div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tbody>
                    <tr>
                        <td colspan = "3" class=" border">
                            <div  >Lớp:&nbsp;{{$value->lop}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan = "3" class=" border">
                            <div  >Khoa:&nbsp;{{$value->khoa}}</div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table>
                <tbody>
                    <tr>
                        <td class=" border" width="50%">
                            <div  >Ngày nhập học:&nbsp;11/{{$value->tgnhaphoc}}</div>
                        </td>
                        <td class=" border" width="50%">
                            <div  >Thời gian ra trường:&nbsp;{{$value->tgratruong}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td  colspan = "2" class=" border">
                            <div  >(Thời gian học tại Trường: {{$value->thoigian}})</div>
                        </td>

                    </tr>
                </tbody>
            </table>

            <table style="margin: 0 90 0 80">
                <tbody>
                    <tr>
                        <td colspan ='3' class=" border">
                            <div  >- Số tiền học phí trung bình hàng tháng: 1.200.000 đồng/tháng.</div>
                        </td>
                    </tr>
                    <tr>
                        <td class=" border" width="40%">
                            <div  >&nbsp;&nbsp;Thuộc diện:</div>
                        </td>
                        <td class=" border" width="40%">
                            <div  >- Không miễn giảm:</div>
                        </td>
                        <td class=" border" width="20%">
                            <div  ><input type="checkbox" checked = "checked"/></div>
                        </td>
                    </tr>
                    <tr>
                        <td class=" border" >
                            <div  ></div>
                        </td>
                        <td class=" border" >
                            <div  >- Giảm học phí:</div>
                        </td>
                        <td class=" border" >
                            <div  ><input type="checkbox"/></div>
                        </td>
                    </tr>
                    <tr>
                        <td class=" border" >
                            <div  ></div>
                        </td>
                        <td class=" border" >
                            <div  >- Miễn học phí:</div>
                        </td>
                        <td class=" border" >
                            <div  ><input type="checkbox"/></div>
                        </td>
                    </tr>
                    <tr>
                        <td class=" border" >
                            <div  >&nbsp;&nbsp;Thuộc đối tượng:</div>
                        </td>
                        <td class=" border" >
                            <div  >- Mồ côi:</div>
                        </td>
                        <td class=" border" >
                            <div  ><input type="checkbox"/></div>
                        </td>
                    </tr>
                    <tr>
                        <td class=" border" >
                            <div  ></div>
                        </td>
                        <td class=" border" >
                            <div  >- Không mồ côi:</div>
                        </td>
                        <td class=" border" >
                            <div  ><input type="checkbox" checked = "checked"/></div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table style="">
                <tbody>
                    <tr>
                        <td  class=" border">
                            <div >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Trong thời gian theo học tại trường, anh (chị): {{$value->hoten}} không bị xử phạt hành chính trở lên về các hành vi: cờ bạc, nghiện hút, trộm cắp, buôn lậu.</div>
                        </td>
                    </tr>
                    <tr>
                        <td class=" border">
                            <div  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Số tài khoản  của Nhà trường: 0111000266983, tại Ngân hàng Thương mại Cổ phần Ngoại thương Việt Nam./.</div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table style="margin-top:10px; ">
                <tbody>
                    <tr>
                        <td class=" center border" width="50%">

                        </td>
                        <td class=" center border" width="50%"     >
                            <div     ><i> Cần Thơ, ngày {{$value->day}} tháng {{$value->month}} năm {{$value->year}} </i></div>
                        </td>
                    </tr>
                    <tr>
                        <td class=" center border" width="50%"     >
                            <div     ><strong> </strong></div>
                        </td>
                        <td class=" center border " width="50%"  style="padding-top:0px "     >
                            <div    ><strong> KT. HIỆU TRƯỞNG</strong></div>
                        </td>
                    </tr>
                    <tr>
                        <td class=" center border" width="50%" >

                        </td>
                        <td  class=" center border " width="50%" style="padding-top:0px " >
                            <div><strong>PHÓ HIỆU TRƯỞNG</strong></div>
                        </td>
                    </tr>
                    <tr>
                        <td class=" center border" width="50%"style="vertical-align: bottom">

                        </td>
                        <td  class=" center border " width="50%" height = "120px"     style="vertical-align: bottom">
                            <div><strong>{{$value->admin_sig}}</strong></div>
                        </td>
                    </tr>
                </tbody>
            </table>
            @if ($i < count($pdf))
                <div class="break_page"></div>
            @endif

        @endforeach

    {{-- @endif --}}
</body>
</html>
public function in_lai($id_maphieu)
    {
        // Determine the table and document type based on maphieu
        if (strpos($id_maphieu, 'NVQS') !== false) {
            $table = 'l_file_qlsv_nvqs';
            $loaigiay = 1;
        } else if (strpos($id_maphieu, 'VV') !== false) {
            $table = 'l_file_qlsv_vv';
            $loaigiay = 2;
        } else {
            return response()->json(['error' => 'Invalid maphieu format']);
        }
        
        // Check if the maphieu exists in the database
        $sql = 'SELECT maphieu FROM ' . $table . ' WHERE maphieu = ?';
        $query = DB::select($sql, [$id_maphieu]);
        
        if ($query) {
            // Retrieve detailed information
            $infor = DB::select(
                "SELECT tt.hoten, 
                        DATE_FORMAT(tt.ngaysinh, '%d/%m/%Y') as ngaysinh, 
                        tt.noisinh, 
                        tt.mssv,
                        CASE 
                            WHEN tt.gioitinh = 1 THEN 'Nữ'
                            WHEN tt.gioitinh = 0 THEN 'Nam'
                            ELSE 'Không xác định'
                        END AS gioitinh,
                        tt.cccd, 
                        nh.id_taikhoan,
                        DATE_FORMAT(nh.ngaycapcccd, '%d/%m/%Y') AS ngaycapcccd, 
                        nh.id_quoctich, 
                        prov.name_province AS noicapcccd, 
                        l_province.name_province AS tinh,
                        l_province2.name_province2 AS huyen, 
                        l_province3.name_province3 AS xa, 
                        nh.duoi_xa_ttru,
                        diachi,
                        l_major.name_major, 
                        l_major.khoa,
                        $table.maphieu as mp,
                        l_major.lop, 
                        l_major.tgnhaphoc, 
                        l_major.tgratruong, 
                        l_major.chuyennganh, 
                        l_major.thoigian, 
                        DAY($table.create_at) AS day, 
                        MONTH($table.create_at) AS month, 
                        YEAR($table.create_at) AS year,
                        mps.name as admin_sig
                FROM 24_thongtincanhan tt
                JOIN 24_hosonhaphoc nh ON tt.id_taikhoan = nh.id_taikhoan
                JOIN l_major ON tt.major = l_major.id_major
                JOIN l_province ON nh.id_tinh_ttru = l_province.id
                JOIN l_province2 ON nh.id_huyen_ttru = l_province2.id
                JOIN l_province3 ON nh.id_xa_ttru = l_province3.id
                JOIN l_province prov ON nh.id_quoctich = prov.id
                JOIN $table ON $table.id_user = tt.id_taikhoan
                JOIN l_file_qlsv_nvqs_sig mps ON mps.id = $table.admin_sig
                WHERE $table.maphieu = ?", [$id_maphieu]
            );
            
            // Prepare the data for the view
            $data = array(
                'pdf' => $infor,
            );
            
            // Generate PDF based on document type
            if($loaigiay == 1){
                $pdf = PDF::loadView('pdf.qlsv', $data);
                $name_file = $id_maphieu.'pdf';
                return $pdf->stream($name_file);
            } else {
                $pdf = PDF::loadView('pdf.vayvon', $data);
                $name_file = $id_maphieu.'pdf';
                return $pdf->stream($name_file);
            }
            
            
        } else {
            return response()->json(['error' => 'No data found']);
        }
    }