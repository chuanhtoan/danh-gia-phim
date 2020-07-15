<?php

use Illuminate\Database\Seeder;

class AdminGroupSeeder extends Seeder
{
    public function run()
    {
        $this->call(BangXepHangSeeder::class);
        $this->call(BaiVietSeeder::class);
        $this->call(DanhGiaSeeder::class);
        $this->call(BaoCaoSeeder::class);
    }
}

class BangXepHangSeeder extends Seeder{

    public function run()
    {
        for ($i=2; $i <= 5; $i++) { 
            DB::table('BangXepHang')->insert([
                ['ten'=>'Phim hay nhất','idUser'=>$i],
                ['ten'=>'Phim định xem','idUser'=>$i],
            ]);
        }
    }
}
class BaiVietSeeder extends Seeder{

    public function run()
    {
        DB::table('BaiViet')->insert([
            ['idPhim'=>20,'idUser'=>1,'tieuDe'=>'Top 7 cô gái dù là phản diện','noiDung'=>'Medusa Rider là nhân vật được lấy cảm hứng từ nữ quái vật Medusa trong thần thoại Hy Lạp nên cô nàng này luôn bị bịt mắt vì bất cứ ai nhìn vào mắt của Medusa đều sẽ bị biến thành đá. Rider là một servant hắc ám cần phải bị đánh bại và bị thu hồi dưới dạng một thẻ bài nhằm ổn định thế giới trong một nhiệm vụ của Illya, Miyu, Rin và Luvia. Dù độc ác và nguy hiểm là vậy tuy nhiên không phủ nhận rằng Medusa Rider rất xinh đẹp.'],
            ['idPhim'=>20,'idUser'=>1,'tieuDe'=>'Cùng đến với top 7 nhân vật','noiDung'=>'Nhìn tổng thể ngoại hình, Lust là cô gái có mái tóc đen bồng bềnh cùng khuôn ngực đầy đặn dễ khiến người xem xao xuyến và khó cầm lòng. Khả năng đáng sợ nhất của Lust là vươn dài những móng tay nhọn hoắt của mình để tấn công đối thủ ở cự li gần. Lust rất xinh đẹp nhưng cũng rất tàn nhẫn trong những lần ra tay.'],
            ['idPhim'=>20,'idUser'=>1,'tieuDe'=>'Kalifa trước khi được biết là một sát thủ','noiDung'=>'Meiko Shiraki là cô nàng phó hội trưởng trong bộ truyện Prison School, cô có vòng 1 ngoại cỡ nên thường mặc những trang phục mát mẻ khoe trọn hình thể nóng bỏng của mình. Có thể gọi Meiko là một "sadist" thích cầm roi với những màn trừng phạt hấp dẫn và hay có những tư thế khiến người khác phải xịt máu mũi.'],
            ['idPhim'=>20,'idUser'=>1,'tieuDe'=>'Kurumi là tinh linh nguy hiểm nhất từng được biết đến','noiDung'=>'Trên đây là top 7 cô nàng quái đản, khá tàn nhẫn nhưng cũng rất xinh đẹp đã xuất hiện trọng các bộ anime nổi tiếng của Nhật Bản. Các bạn yêu thích nhân vật nào, hãy để lại ý kiến của mình bằng cách comment vào phần dưới của bài viết nhé!'],
        ]);
    }
}

class DanhGiaSeeder extends Seeder{

    public function run()
    {
        DB::table('DanhGia')->insert([
            ['idPhim'=>20,'idUser'=>2,'diem'=>rand(1,10),'noiDung'=>'Đừng để vẻ ngoài xinh đẹp và ngây thơ của Kyoko đánh lừa bởi vì cô nàng này chính là hung thủ đứng sau hàng loạt vụ giết người để cướp đoạt sinh mạng.'],
            ['idPhim'=>20,'idUser'=>3,'diem'=>rand(1,10),'noiDung'=>'Khả năng diễn xuất của Kyoko khiến nhiều người không thể nghĩ rằng cô là kẻ xấu dù bề ngoài Kyoko rất xinh đẹp và dễ thương.'],
            ['idPhim'=>20,'idUser'=>4,'diem'=>rand(1,10),'noiDung'=>'Không những vậy, Enoshima Junko còn ghét hi vọng, cô rất cả thèm chóng chán.'],
            ['idPhim'=>20,'idUser'=>5,'diem'=>rand(1,10),'noiDung'=>'Tất cả bắt đầu từ trang chủ. Sau đó, bạn phải tự hỏi nơi trang chủ của bạn liên kết đến. Bạn có thể đã tìm ra điều này dựa trên các tùy chọn menu trên trang web của bạn.'],
        ]);
    }
}

class BaoCaoSeeder extends Seeder{

    public function run()
    {
        DB::table('BaoCao')->insert([
            ['idPhim'=>20,'idUser'=>2,'noiDung'=>'Trailer phim bị hư rồi'],
            ['idPhim'=>20,'idUser'=>3,'noiDung'=>'Link phim bị hư rồi'],
            ['idPhim'=>20,'idUser'=>4,'noiDung'=>'Hình để nhầm phim rồi'],
            ['idPhim'=>20,'idUser'=>5,'noiDung'=>'Tên nhân vật ghi sai rồi'],
        ]);
    }
}
