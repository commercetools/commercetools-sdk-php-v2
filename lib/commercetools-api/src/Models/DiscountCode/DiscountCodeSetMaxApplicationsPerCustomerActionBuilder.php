<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountCodeSetMaxApplicationsPerCustomerAction>
 */
final class DiscountCodeSetMaxApplicationsPerCustomerActionBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $maxApplicationsPerCustomer;

    /**
     * <p>Value to set. If empty, any existing value will be removed.</p>
     *

     * @return null|int
     */
    public function getMaxApplicationsPerCustomer()
    {
        return $this->maxApplicationsPerCustomer;
    }

    /**
     * @param ?int $maxApplicationsPerCustomer
     * @return $this
     */
    public function withMaxApplicationsPerCustomer(?int $maxApplicationsPerCustomer)
    {
        $this->maxApplicationsPerCustomer = $maxApplicationsPerCustomer;

        return $this;
    }


    public function build(): DiscountCodeSetMaxApplicationsPerCustomerAction
    {
        return new DiscountCodeSetMaxApplicationsPerCustomerActionModel(
            $this->maxApplicationsPerCustomer
        );
    }

    public static function of(): DiscountCodeSetMaxApplicationsPerCustomerActionBuilder
    {
        return new self();
    }
}
