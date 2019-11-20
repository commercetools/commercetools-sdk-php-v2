<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

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
