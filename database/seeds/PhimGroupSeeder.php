<?php

use Illuminate\Database\Seeder;

class PhimGroupSeeder extends Seeder
{
    public function run()
    {
        $this->call(HangSanXuatSeeder::class);
        $this->call(TheLoaiSeeder::class);
        $this->call(PhimSeeder::class);
        $this->call(Phim_TheLoaiSeeder::class);
        $this->call(NhanVatSeeder::class);
    }
}

class HangSanXuatSeeder extends Seeder{

    public function run()
    {
        DB::table('HangSanXuat')->insert([
            ['ten'=>'Toei Animation'],['ten'=>'Sunrise'],['ten'=>'Production I.G'],['ten'=>'J.C.Staff'],['ten'=>'Madhouse'],
            ['ten'=>'TMS Entertainment'],['ten'=>'Studio Deen'],['ten'=>'Studio Pierrot'],['ten'=>'OLM'],['ten'=>'Nippon Animation'],
            ['ten'=>'A-1 Pictures'], ['ten'=>'Tatsunoko Production'], ['ten'=>'Shin-Ei Animation'], ['ten'=>'DLE'], ['ten'=>'Xebec'],
            ['ten'=>'Gonzo'], ['ten'=>'Shaft'], ['ten'=>'Bones'], ['ten'=>'Kyoto Animation'], ['ten'=>'Satelight'], 
            ['ten'=>'Silver Link.'], ['ten'=>"Brain's Base"], ['ten'=>'Production Reed'], ['ten'=>'Gainax'], ['ten'=>'Doga Kobo'], 
            ['ten'=>'Arms'], ['ten'=>'Magic Bus'], ['ten'=>'Mushi Production'], ['ten'=>'Zexcs'], ['ten'=>'Studio 4°C'], 
            ['ten'=>'Studio Hibari'], ['ten'=>'feel.'], ['ten'=>'Liden Films'], ['ten'=>'Ufotable'], ['ten'=>'Seven'], 
            ['ten'=>'Studio Comet'], ['ten'=>'Gallop'], ['ten'=>'MAPPA'], ['ten'=>'Haoliners Animation League'], ['ten'=>'Kachidoki Studio'], 
            ['ten'=>'Aija-Do'], ['ten'=>'Studio Ghibli'], ['ten'=>'Lerche'], ['ten'=>'TNK'], ['ten'=>'P.A. Works'], 
            ['ten'=>'Wit Studio'], ['ten'=>'Diomedea'], ['ten'=>'Artland'], ['ten'=>'Asahi Production'], ['ten'=>'Actas'],
        ]);
    }
}

class TheLoaiSeeder extends Seeder{

    public function run()
    {
        DB::table('TheLoai')->insert([
            ['ten'=>'Action',       'moTa'=>'Thể loại này thường có nội dung về đánh nhau, bạo lực, hỗn loạn, với diễn biến nhanh'], 
            ['ten'=>'Adventure',    'moTa'=>'Thể loại phiêu lưu, mạo hiểm, thường là hành trình của các nhân vật'], 
            ['ten'=>'Cars',         'moTa'=>'Thể loại có nội dung về xe cộ'], 
            ['ten'=>'Comedy',       'moTa'=>'Thể loại có nội dung trong sáng và cảm động, thường có các tình tiết gây cười, các xung đột nhẹ nhàng'], 
            ['ten'=>'Dementia',     'moTa'=>'Thể loại có nội dung về khủng hoảng thần kinh'], 
            
            ['ten'=>'Demons',       'moTa'=>'Thể loại có nội dung về quỷ'], 
            ['ten'=>'Drama',        'moTa'=>'Thể loại mang đến cho người xem những cảm xúc khác nhau: buồn bã, căng thẳng thậm chí là bi phẫn'], 
            ['ten'=>'Ecchi',        'moTa'=>'Thể loại thường có những tình huống nhạy cảm nhằm lôi cuốn người xem'], 
            ['ten'=>'Fantasy',      'moTa'=>'Thể loại xuất phát từ trí tưởng tượng phong phú, từ pháp thuật đến thế giới trong mơ thậm chí là những câu chuyện thần tiên'], 
            ['ten'=>'Game',         'moTa'=>'Thể loại có nội dung về các trò chơi'], 
            
            ['ten'=>'Harem',        'moTa'=>'Thể loại nhân vật chính có nhiều người yêu'],
            ['ten'=>'Historical',   'moTa'=>'Thể loại có nội dung về lịch sử'],
            ['ten'=>'Horror',       'moTa'=>'Thể loại kinh dị, nó làm cho bạn kinh hãi, khiếp sợ, ghê tởm, run rẩy, có thể gây sock - một thể loại không dành cho người yếu tim'],
            ['ten'=>'Josei',        'moTa'=>'Thể loại của manga hay anime được sáng tác chủ yếu bởi phụ nữ cho những độc giả nữ từ 18 đến 30. Josei manga có thể miêu tả những lãng mạn thực tế , nhưng trái ngược với hầu hết các kiểu lãng mạn lí tưởng của Shoujo manga với cốt truyện rõ ràng, chín chắn'],
            
            ['ten'=>'Kids',         'moTa'=>'Thể loại có nội dung dành cho trẻ em'], 
            ['ten'=>'Magic',        'moTa'=>'Thể loại có nội dung về phép thuật'], 
            ['ten'=>'Martial Arts', 'moTa'=>'Thể loại võ thuật, bao gồm bất cứ thứ gì liên quan đến võ thuật từ các trận đánh nhau, tự vệ đến các môn võ thuật như akido, karate, judo hay taekwondo, kendo, các cách né tránh'], 
            ['ten'=>'Mecha',        'moTa'=>'Còn được biết đến dưới cái tên meka hay mechs, là thể loại nói tới những cỗ máy biết đi (thường là do phi công cầm lái)'], 
            ['ten'=>'Military',     'moTa'=>'Thể loại có nội dung về quân đội'], 
            
            ['ten'=>'Music',        'moTa'=>'Thể loại có nội dung về âm nhạc'], 
            ['ten'=>'Mystery',      'moTa'=>'Thể loại thường xuất hiện những điều bí ấn không thể lí giải được và sau đó là những nỗ lực của nhân vật chính nhằm tìm ra câu trả lời thỏa đáng'], 
            ['ten'=>'Parody',       'moTa'=>'Thể loại bắt chước'], 
            ['ten'=>'Police',       'moTa'=>'Thể loại có nội dung về cảnh sát'], 
            ['ten'=>'Psychological','moTa'=>'Thể loại liên quan đến những vấn đề về tâm lý của nhân vật (tâm thần bất ổn, điên cuồng,...)'], 
            
            ['ten'=>'Romance',      'moTa'=>'Thể loại có nội dung về tình cảm'], 
            ['ten'=>'Samurai',      'moTa'=>'Thể loại có nội dung về các kiếm sĩ'], 
            ['ten'=>'School',       'moTa'=>'Thể loại có bối cảnh chủ yếu ở trường học'], 
            ['ten'=>'Sci-Fi',       'moTa'=>'Thể loại bao gồm những chuyện khoa học viễn tưởng, đa phần chúng xoay quanh nhiều hiện tượng mà liên quan tới khoa học, công nghệ, tuy vậy thường thì những câu chuyện đó không gắn bó chặt chẽ với các thành tựu khoa học hiện thời, mà là do con người tưởng tượng ra'], 
            ['ten'=>'Seinen',       'moTa'=>'Thể loại '], 
            
            ['ten'=>'Shoujo',       'moTa'=>'Đối tượng hướng tới của thể loại này là phái nữ. Nội dung của những bộ manga này thường liên quan đến tình cảm lãng mạn, chú trọng đầu tư cho nhân vật (tính cách,...)'], 
            ['ten'=>'Shoujo Ai',    'moTa'=>'Thể loại liên quan tới đồng tính nữ, thể hiện trong các mối quan hệ trên mức bình thường giữa các nhân vật nữ trong các manga, anime'], 
            ['ten'=>'Shounen',      'moTa'=>'Đối tượng hướng tới của thể loại này là phái nam. Nội dung của những bộ manga này thường liên quan đến đánh nhau và/hoặc bạo lực (ở mức bình thường, không thái quá)'], 
            ['ten'=>'Shounen Ai',   'moTa'=>'Thể loại liên quan tới đồng tính nam, thể hiện trong các mối quan hệ trên mức bình thường giữa các nhân vật nam trong các manga, anime'], 
            ['ten'=>'Slice of Life','moTa'=>'Thể loại nói về cuộc sống đời thường'], 
            
            ['ten'=>'Space',        'moTa'=>'Thể loại có bối cảnh ngoài không gian'], 
            ['ten'=>'Sports',       'moTa'=>'Thể loại liên quan tới các môn thể thao như bóng đá, bóng chày, bóng chuyền, đua xe, cầu lông,...'], 
            ['ten'=>'Super Power',  'moTa'=>'Thể loại có nội dung về sức mạnh đặt biệt'], 
            ['ten'=>'Supernatural', 'moTa'=>'Thể loại có nội dung thể hiện những sức mạnh đáng kinh ngạc và không thể giải thích được, chúng thường đi kèm với những sự kiện trái ngược hoặc thách thức với những định luật vật lý'], 
            ['ten'=>'Thriller',     'moTa'=>'Thể loại có nội dung liên quan tới phim kinh dị'], 
            
            ['ten'=>'Vampire',      'moTa'=>'Thể loại có nội dung liên quan tới ma cà rồng'], 
            ['ten'=>'Yaoi',         'moTa'=>'Thể loại liên quan tới đồng tính nam, nặng hơn Shounen Ai'], 
            ['ten'=>'Yuri',         'moTa'=>'Thể loại liên quan tới đồng tính nữ, nặng hơn Shoujo Ai'], 
        ]);
    }
}

class PhimSeeder extends Seeder{

    public function run()
    {
        DB::table('Phim')->insert([
            ['ten'=>'No Game No Life',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh 2 anh em Sora và Shiro là người đã tạo ra một huyền thoại của thế giới ảo, một gamer được mệnh danh là “bất khả chiến bại”. Nhưng đằng sau hào quang trong thế giới ảo, 2 anh em họ lại là những NEET, những người “vô dụng” của xã hội. Một ngày nọ, họ được một người tự xưng là “Chúa” đưa tới một thế giới của ông ta, thế giới “Board World”, nơi mà mọi thứ đều được quyết định bằng các trò chơi, từ tính mạng con người cho đến biên giới quốc gia. Liệu 2 gamer mạnh nhất của nhân loại có tiếp tục tỏa sáng trong thế giới mà họ luôn mơ tới, và vuơn tới đỉnh cao như họ luôn làm.',
            'soTap'=>'12',
            'thoiLuong'=>'23 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2014',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'nogamenolife.jpg'],

            ['ten'=>'Hyouka',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.','soTap'=>'22','thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'hyouka.jpg'],

            ['ten'=>'Fullmetal Alchemist: Brotherhood',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'fullmetalalchemistbrotherhood.jpg'],

            ['ten'=>'Steins;Gate',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'steinsgate.jpg'],
            
            ['ten'=>'Gintama',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'gintama.jpg'],

            ['ten'=>'Hunter x Hunter',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'hunterxhunter.jpg'],

            ['ten'=>'Ginga Eiyuu Densetsu',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'gingaeiyuudensetsu.jpg'],

            ['ten'=>'Shingeki no Kyojin',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'shingekinokyojin.jpg'],

            ['ten'=>'Kimi no Na wa',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'kiminonawa.jpg'],

            ['ten'=>'3-gatsu no Lion',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'3gatsunolion.jpg'],

            ['ten'=>'Koe no Katachi',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'koenokatachi.jpg'],

            ['ten'=>'Clannad: After Story',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'clannadafterstory.jpg'],

            ['ten'=>'Owarimonogatari',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'owarimonogatari.jpg'],

            ['ten'=>'Code Geass',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'codegeass.jpg'],

            ['ten'=>'Haikyuu',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'haikyuu.jpg'],

            ['ten'=>'Kaguya-sama wa Kokurasetai',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'kaguyasamawakokurasetai.jpg'],

            ['ten'=>'Mob Psycho',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'mobpsycho.jpg'],

            ['ten'=>'Spirited Away',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'spiritedaway.jpg'],

            ['ten'=>'Kizumonogatari',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'kizumonogatari.jpg'],

            ['ten'=>'Shigatsu wa Kimi no Uso',
            'kieu'=>'TV Series',
            'tomTat'=>'Câu chuyện xoay quanh Houtarou, người có cách sống khá xa cách và thờ ơ, luôn tìm cách để tiết kiệm năng lượng hết mức có thể. Cậu bị chị mình ép phải gia nhập câu lạc bộ văn học. Tại đó, cậu đã cùng những người bạn của mình tìm thấy một tuyển tập có tên là Hyouka, và đến gần hơn với những bí ẩn 33 năm trước.',
            'soTap'=>'22',
            'thoiLuong'=>'25 phút 1 tập',
            'nguon'=>'Light Novel',
            'ngonNgu'=>'Japanese',
            'phanLoaiDoTuoi'=>'PG-13',
            'trangThai'=>'Đã kết thúc',
            'ngayCongChieu'=>'Spring 2012',
            'idHangSanXuat'=>rand(1,50),
            'trailer'=>'https://www.youtube.com/embed/aXc9DVfLTGo',
            'hinh'=>'shigatsuwakiminouso.jpg'],

        ]);
    }
}

class Phim_TheLoaiSeeder extends Seeder{

    public function run()
    {
        // DB::table('Phim_TheLoai')->insert([
        //     //No Game No Life
        //     ['idPhim'=>'1','idTheLoai'=>rand(1,10)],
        //     ['idPhim'=>'1','idTheLoai'=>rand(11,20)],
        //     ['idPhim'=>'1','idTheLoai'=>rand(21,30)],
        //     ['idPhim'=>'1','idTheLoai'=>rand(31,42)],

        //     //Hyouka
        //     ['idPhim'=>'2','idTheLoai'=>rand(1,10)],
        //     ['idPhim'=>'2','idTheLoai'=>rand(11,20)],
        //     ['idPhim'=>'2','idTheLoai'=>rand(21,30)],
        //     ['idPhim'=>'2','idTheLoai'=>rand(31,42)],

            

        // ]);

        for ($i=1; $i <= 20; $i++) { 
            DB::table('Phim_TheLoai')->insert([
                ['idPhim'=>$i,'idTheLoai'=>rand(1,10)],
                ['idPhim'=>$i,'idTheLoai'=>rand(11,20)],
                ['idPhim'=>$i,'idTheLoai'=>rand(21,30)],
                ['idPhim'=>$i,'idTheLoai'=>rand(31,42)],
            ]);
        }
    }
}

class NhanVatSeeder extends Seeder{

    public function run()
    {
        // DB::table('NhanVat')->insert([
        //     // No game no life
        //     ['ten'=>'Oreki Houtarou','loai'=>'Nam chính','idPhim'=>'1'],
        //     ['ten'=>'Chitanda Eru','loai'=>'Nữ chính','idPhim'=>'1'],
        //     ['ten'=>'Fukube Satoshi','loai'=>'Nam chính','idPhim'=>'1'],
        //     ['ten'=>'Ibara Mayaka','loai'=>'Nữ chính','idPhim'=>'1'],
        //     ['ten'=>'Irisu Fuyumi','loai'=>'Nữ phụ','idPhim'=>'1'],

        //     // Hyouka
        //     ['ten'=>'Sora','loai'=>'Nam chính','idPhim'=>'2'],
        //     ['ten'=>'Shiro','loai'=>'Nữ chính','idPhim'=>'2'],
        //     ['ten'=>'Stephanie Dola','loai'=>'Nữ chính','idPhim'=>'2'],
        //     ['ten'=>'Jibril','loai'=>'Nữ phụ','idPhim'=>'2'],
        //     ['ten'=>'Hatsuse Izuna','loai'=>'Nữ phụ','idPhim'=>'2'],
        // ]);

        for ($i=1; $i <= 20; $i++) { 
            DB::table('NhanVat')->insert([
                ['ten'=>'Oreki Houtarou','loai'=>'Nam chính','hinh'=>'orekihoutarou.jpg','idPhim'=>$i],
                ['ten'=>'Chitanda Eru','loai'=>'Nữ chính','hinh'=>'chitandaeru.jpg','idPhim'=>$i],
                ['ten'=>'Fukube Satoshi','loai'=>'Nam chính','hinh'=>'fukubesatoshi.jpg','idPhim'=>$i],
                ['ten'=>'Ibara Mayaka','loai'=>'Nữ chính','hinh'=>'ibaramayaka.jpg','idPhim'=>$i],
                ['ten'=>'Irisu Fuyumi','loai'=>'Nữ phụ','hinh'=>'irisufuyumi.jpg','idPhim'=>$i],
            ]);
        }
    }
}
