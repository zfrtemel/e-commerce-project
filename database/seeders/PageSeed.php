<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PageSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
                'page_title'=>"Hakkımızda",
                'slug'=>'hakkimizda',
                'page_content'=>'<div>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at scelerisque dui. Integer egestas sodales dignissim. Nullam ligula risus, ultrices sed mattis non, consectetur at nisl. Vestibulum bibendum orci turpis, sed pharetra dui ullamcorper faucibus. Suspendisse ultricies dolor sit amet nisi sagittis pharetra. Fusce in facilisis elit. Vestibulum leo magna, fermentum ac fermentum at, tincidunt vel eros. Sed et ultricies quam. Maecenas rutrum sapien vestibulum, tristique lorem at, bibendum erat. Donec vehicula tristique velit, a pellentesque quam.
</p>
<p>
Curabitur sit amet luctus felis. Sed dignissim ante nunc, ac blandit leo egestas pellentesque. Sed auctor volutpat lorem vel sagittis. Etiam eu ullamcorper nunc. Pellentesque feugiat tortor ac ex porta, id ullamcorper nibh dictum. Aenean risus justo, lacinia at auctor ac, iaculis quis metus. Suspendisse potenti. In euismod in purus sed rutrum. Integer ullamcorper et nulla suscipit suscipit. Donec vulputate mi mi, ut condimentum nulla posuere et. Aliquam erat volutpat. Morbi vel felis sodales, aliquam ligula a, aliquet magna. Nullam volutpat lorem lacus, ut tempus tellus rhoncus sit amet. Nam nec leo auctor lacus commodo dictum. Sed convallis a massa a euismod.
</p>
<p>
Donec sodales metus sed nunc imperdiet, nec posuere orci pretium. Pellentesque malesuada velit nec molestie tristique. Nunc non justo nisl. Nam rhoncus dictum lacus, sit amet interdum arcu pulvinar tempus. Nulla quis nibh non quam imperdiet imperdiet vel et orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam fringilla facilisis magna, id faucibus odio fermentum quis. Phasellus lacinia tincidunt turpis in lobortis. Quisque hendrerit enim placerat massa consectetur ullamcorper. Nunc in orci at neque tincidunt ullamcorper eget quis lacus. Sed molestie gravida odio, ac auctor neque semper at.
</p>
<p>
Vestibulum efficitur volutpat nunc, pellentesque egestas metus viverra in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel metus neque. Aliquam erat volutpat. Mauris et dui et velit imperdiet laoreet vitae ac dolor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in risus quis dolor efficitur luctus. Nunc eget ornare dolor. Ut eget lectus sed augue scelerisque ullamcorper tempor at erat.
</p>
<p>
Mauris pretium ex eget lectus posuere feugiat. Mauris vitae enim vel sapien vestibulum congue ultrices at metus. Mauris ultricies arcu ullamcorper congue tristique. Aenean nulla enim, suscipit eget lorem in, consequat ultricies eros. Pellentesque tristique cursus tristique. In dictum lacus purus, at ullamcorper leo ultrices ut. Suspendisse accumsan ipsum laoreet lacus viverra, sit amet scelerisque lacus tempus. Phasellus aliquam justo sit amet lorem tempus sodales. Cras a libero et ligula condimentum blandit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed in diam a urna porta aliquet sit amet tincidunt nunc.
</p></div>',
                'page_image_id'=>1,
                'meta_description'=>'demo',
                'meta_keywords'=>'demo',
                'status'=>1,
            ]);

            DB::table('pages')->insert([
                'page_title'=>"İletişim",
                'slug'=>'iletisim',
                'page_content'=>'<div >
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at scelerisque dui. Integer egestas sodales dignissim. Nullam ligula risus, ultrices sed mattis non, consectetur at nisl. Vestibulum bibendum orci turpis, sed pharetra dui ullamcorper faucibus. Suspendisse ultricies dolor sit amet nisi sagittis pharetra. Fusce in facilisis elit. Vestibulum leo magna, fermentum ac fermentum at, tincidunt vel eros. Sed et ultricies quam. Maecenas rutrum sapien vestibulum, tristique lorem at, bibendum erat. Donec vehicula tristique velit, a pellentesque quam.
</p>
<p>
Curabitur sit amet luctus felis. Sed dignissim ante nunc, ac blandit leo egestas pellentesque. Sed auctor volutpat lorem vel sagittis. Etiam eu ullamcorper nunc. Pellentesque feugiat tortor ac ex porta, id ullamcorper nibh dictum. Aenean risus justo, lacinia at auctor ac, iaculis quis metus. Suspendisse potenti. In euismod in purus sed rutrum. Integer ullamcorper et nulla suscipit suscipit. Donec vulputate mi mi, ut condimentum nulla posuere et. Aliquam erat volutpat. Morbi vel felis sodales, aliquam ligula a, aliquet magna. Nullam volutpat lorem lacus, ut tempus tellus rhoncus sit amet. Nam nec leo auctor lacus commodo dictum. Sed convallis a massa a euismod.
</p>
<p>
Donec sodales metus sed nunc imperdiet, nec posuere orci pretium. Pellentesque malesuada velit nec molestie tristique. Nunc non justo nisl. Nam rhoncus dictum lacus, sit amet interdum arcu pulvinar tempus. Nulla quis nibh non quam imperdiet imperdiet vel et orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam fringilla facilisis magna, id faucibus odio fermentum quis. Phasellus lacinia tincidunt turpis in lobortis. Quisque hendrerit enim placerat massa consectetur ullamcorper. Nunc in orci at neque tincidunt ullamcorper eget quis lacus. Sed molestie gravida odio, ac auctor neque semper at.
</p>
<p>
Vestibulum efficitur volutpat nunc, pellentesque egestas metus viverra in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel metus neque. Aliquam erat volutpat. Mauris et dui et velit imperdiet laoreet vitae ac dolor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent in risus quis dolor efficitur luctus. Nunc eget ornare dolor. Ut eget lectus sed augue scelerisque ullamcorper tempor at erat.
</p>
<p>
Mauris pretium ex eget lectus posuere feugiat. Mauris vitae enim vel sapien vestibulum congue ultrices at metus. Mauris ultricies arcu ullamcorper congue tristique. Aenean nulla enim, suscipit eget lorem in, consequat ultricies eros. Pellentesque tristique cursus tristique. In dictum lacus purus, at ullamcorper leo ultrices ut. Suspendisse accumsan ipsum laoreet lacus viverra, sit amet scelerisque lacus tempus. Phasellus aliquam justo sit amet lorem tempus sodales. Cras a libero et ligula condimentum blandit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed in diam a urna porta aliquet sit amet tincidunt nunc.
</p></div>',
                'page_image_id'=>1,
                'meta_description'=>'demo',
                'meta_keywords'=>'demo',
                'status'=>1,
            ]);
            
    }
}
