<?php

declare(strict_types=1);

namespace Commercetools\UnitTest;

use Commercetools\Api\Models\Common\MoneyBuilder;
use Commercetools\Api\Models\Common\PriceDraftBuilder;
use Commercetools\Api\Models\Customer\CustomerDraftBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Api\Models\Type\FieldContainerBuilder;
use Commercetools\Api\Models\Type\TypeResourceIdentifierBuilder;
use PHPUnit\Framework\TestCase;

class CustomFieldTest extends TestCase
{
    public function testCustomField()
    {
        $customerDraft = CustomerDraftBuilder::of()
                ->withCustomBuilder(
                    CustomFieldsDraftBuilder::of()
                        ->withTypeBuilder(TypeResourceIdentifierBuilder::of()->withKey('mycustomtype'))
                        ->withFieldsBuilder(
                            FieldContainerBuilder::of()
                                ->put(
                                    "price",
                                    MoneyBuilder::of()
                                        ->withCurrencyCode('EUR')
                                        ->withCentAmount(100)
                                    ->build()
                                )
                        )
                );

        $this->assertJsonStringEqualsJsonString(
            '{
                "custom": {
                    "fields": {
                        "price": {
                            "centAmount": 100,
                            "currencyCode": "EUR"
                        }
                    },
                    "type": {
                        "key": "mycustomtype",
                        "typeId": "type"
                    }
                }
            }',
            json_encode($customerDraft->build())
        );
    }
}
