<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerSetExternalIdAction>
 */
final class CustomerSetExternalIdActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $externalId;

    /**
     * @return null|string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * @return $this
     */
    public function withExternalId(?string $externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    public function build(): CustomerSetExternalIdAction
    {
        return new CustomerSetExternalIdActionModel(
            $this->externalId
        );
    }

    public static function of(): CustomerSetExternalIdActionBuilder
    {
        return new self();
    }
}
