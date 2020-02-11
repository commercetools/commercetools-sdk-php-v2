<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyCustomerSetVatIdAction>
 */
final class MyCustomerSetVatIdActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $vatId;

    /**
     * @return null|string
     */
    public function getVatId()
    {
        return $this->vatId;
    }

    /**
     * @return $this
     */
    public function withVatId(?string $vatId)
    {
        $this->vatId = $vatId;

        return $this;
    }


    public function build(): MyCustomerSetVatIdAction
    {
        return new MyCustomerSetVatIdActionModel(
            $this->vatId
        );
    }

    public static function of(): MyCustomerSetVatIdActionBuilder
    {
        return new self();
    }
}
