<?php

namespace Rector\RectorCompatTests\Tests\Rector\MakeClassFinalRector\Fixture;

class SomeIf
{
    public function run()
    {
        if (true) {
            echo 'test';
        }
        echo 'done';
    }
}

?>
-----
<?php

namespace Rector\RectorCompatTests\Tests\Rector\MakeClassFinalRector\Fixture;

class SomeIf
{
    public function run()
    {
        if (true) {
            echo 'test';
        }

        echo 'done';
    }
}

?>
