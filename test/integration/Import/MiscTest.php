<?php

namespace Commercetools\IntegrationTest\Import;

use Commercetools\Import\Models\Importsinks\ImportSink;
use Commercetools\Import\Models\Importsinks\ImportSinkDraftBuilder;
use Commercetools\IntegrationTest\ImportTestCase;

class MiscTest extends ImportTestCase
{
    public function testCompressedImportRequest()
    {
        $builder = $this->getImportApiBuilder();
        $t = $builder->with()->importSinks()->post(
            ImportSinkDraftBuilder::of()->withKey('test')->withResourceType('customer')->build()
        )->execute();

        $this->assertInstanceOf(ImportSink::class, $t);
    }
}
