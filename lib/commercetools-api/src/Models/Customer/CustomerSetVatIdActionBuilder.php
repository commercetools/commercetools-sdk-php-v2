<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerSetVatIdAction>
 */
final class CustomerSetVatIdActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $vatId;

    /**
     * <p>If not defined, the vat Id is unset.</p>
     *

     * @return null|string
     */
    public function getVatId()
    {
        return $this->vatId;
    }

    /**
     * @param ?string $vatId
     * @return $this
     */
    public function withVatId(?string $vatId)
    {
        $this->vatId = $vatId;

        return $this;
    }


    public function build(): CustomerSetVatIdAction
    {
        return new CustomerSetVatIdActionModel(
            $this->vatId
        );
    }

    public static function of(): CustomerSetVatIdActionBuilder
    {
        return new self();
    }
}
