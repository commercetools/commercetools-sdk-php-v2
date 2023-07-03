<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderLabel>
 */
final class OrderLabelBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $customerEmail;

    /**

     * @var ?string
     */
    private $orderNumber;

    /**
     * <p>Email address of the Customer that the Order belongs to.</p>
     *

     * @return null|string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * <p>User-defined unique identifier of the Order that is unique across a Project.</p>
     *

     * @return null|string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param ?string $customerEmail
     * @return $this
     */
    public function withCustomerEmail(?string $customerEmail)
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    /**
     * @param ?string $orderNumber
     * @return $this
     */
    public function withOrderNumber(?string $orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }


    public function build(): OrderLabel
    {
        return new OrderLabelModel(
            $this->customerEmail,
            $this->orderNumber
        );
    }

    public static function of(): OrderLabelBuilder
    {
        return new self();
    }
}
