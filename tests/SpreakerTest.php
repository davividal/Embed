<?php
class SpreakerTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $info = Embed\Embed::create('http://www.spreaker.com/show/deseos-del-alma-poemas_1');

        $this->assertEquals($info->title, 'Te nombro - Poemas');
        $this->assertEquals($info->type, 'video');
        $this->assertEquals($info->code, '<iframe src="https://www.spreaker.com/embed/player/standard?autoplay=false&amp;episode_id=4535030" frameborder="0" allowTransparency="true" style="min-width:400px;border:none;overflow:hidden;width:100%;height:131px;"></iframe>');
        $this->assertEquals($info->providerName, 'Spreaker');
        $this->assertEquals($info->providerUrl, 'https://spreaker.com');
    }
}
