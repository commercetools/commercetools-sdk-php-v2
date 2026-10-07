<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\PaymentMethod\PaymentMethodReference;
use Commercetools\Api\Models\PaymentMethod\PaymentMethodReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RecurringPaymentAllocation>
 */
final class RecurringPaymentAllocationBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|PaymentMethodReference|PaymentMethodReferenceBuilder
     */
    private $paymentMethod;

    /**

     * @var null|Allocation|AllocationBuilder
     */
    private $allocation;

    /**
     * <p>Unique identifier of the RecurringPaymentAllocation within the <a href="ctp:api:type:RecurringPaymentConfiguration">RecurringPaymentConfiguration</a>. Use it to remove the allocation with the <a href="ctp:api:type:CartRemoveRecurringPaymentAllocationAction">Remove RecurringPaymentAllocation</a> update action.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Payment Method charged for this share of the Order total.</p>
     *

     * @return null|PaymentMethodReference
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod instanceof PaymentMethodReferenceBuilder ? $this->paymentMethod->build() : $this->paymentMethod;
    }

    /**
     * <p>Share of the Order total charged to the <code>paymentMethod</code>.</p>
     *

     * @return null|Allocation
     */
    public function getAllocation()
    {
        return $this->allocation instanceof AllocationBuilder ? $this->allocation->build() : $this->allocation;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?PaymentMethodReference $paymentMethod
     * @return $this
     */
    public function withPaymentMethod(?PaymentMethodReference $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @param ?Allocation $allocation
     * @return $this
     */
    public function withAllocation(?Allocation $allocation)
    {
        $this->allocation = $allocation;

        return $this;
    }

    /**
     * @deprecated use withPaymentMethod() instead
     * @return $this
     */
    public function withPaymentMethodBuilder(?PaymentMethodReferenceBuilder $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @deprecated use withAllocation() instead
     * @return $this
     */
    public function withAllocationBuilder(?AllocationBuilder $allocation)
    {
        $this->allocation = $allocation;

        return $this;
    }

    public function build(): RecurringPaymentAllocation
    {
        return new RecurringPaymentAllocationModel(
            $this->id,
            $this->paymentMethod instanceof PaymentMethodReferenceBuilder ? $this->paymentMethod->build() : $this->paymentMethod,
            $this->allocation instanceof AllocationBuilder ? $this->allocation->build() : $this->allocation
        );
    }

    public static function of(): RecurringPaymentAllocationBuilder
    {
        return new self();
    }
}
