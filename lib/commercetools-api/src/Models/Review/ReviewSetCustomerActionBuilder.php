<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierBuilder;

/**
 * @implements Builder<ReviewSetCustomerAction>
 */
final class ReviewSetCustomerActionBuilder implements Builder
{
    /**
     * @var null|CustomerResourceIdentifier|CustomerResourceIdentifierBuilder
     */
    private $customer;

    /**
     * <p>The customer who created the review.
     * If <code>customer</code> is absent or <code>null</code>, this field will be removed if it exists.</p>
     *
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        return $this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer;
    }

    /**
     * @return $this
     */
    public function withCustomer(?CustomerResourceIdentifier $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerBuilder(?CustomerResourceIdentifierBuilder $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    public function build(): ReviewSetCustomerAction
    {
        return new ReviewSetCustomerActionModel(
            $this->customer instanceof CustomerResourceIdentifierBuilder ? $this->customer->build() : $this->customer
        );
    }

    public static function of(): ReviewSetCustomerActionBuilder
    {
        return new self();
    }
}
