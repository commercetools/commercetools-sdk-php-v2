<?php

namespace Commercetools\UnitTest;

use Commercetools\Import\Models\Common\MoneyBuilder;
use Commercetools\Import\Models\Common\TypeKeyReferenceBuilder;
use Commercetools\Import\Models\Customfields\CustomBuilder;
use Commercetools\Import\Models\Customfields\FieldContainerModel;
use Commercetools\Import\Models\Productdrafts\PriceDraftImportBuilder;
use PHPUnit\Framework\TestCase;

class ImportPriceDraftTest extends TestCase
{
    public function testPriceDraft()
    {
        $priceDraft = PriceDraftImportBuilder::of()
            ->withCustomBuilder(
                CustomBuilder::of()
                    ->withTypeBuilder(TypeKeyReferenceBuilder::of()->withKey("mytypekey"))
                    ->withFields(
                        FieldContainerModel::fromArray(
                            [
                                'foo' => MoneyBuilder::of()
                                    ->withCurrencyCode('EUR')
                                    ->withCentAmount(100)
                                    ->build()
                            ]
                        )
                    )
            )
        ;
        $this->assertJsonStringEqualsJsonString(
            '{
                "custom": {
                    "fields": {
                        "foo": {
                            "centAmount": 100,
                            "currencyCode": "EUR",
                            "type": "centPrecision"
                        }
                    },
                    "type": {
                        "key": "mytypekey",
                        "typeId": "type"
                    }
                }
            }',
            json_encode($priceDraft->build())
        );
    }
}
