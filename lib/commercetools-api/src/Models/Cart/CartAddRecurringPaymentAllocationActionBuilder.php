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
 * @implements Builder<CartAddRecurringPaymentAllocationAction>
 */
final class CartAddRecurringPaymentAllocationActionBuilder implements Builder
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

     * @var null|AllocationDraft|AllocationDraftBuilder
     */
    private $allocation;

    /**
     * <p>Unique identifier of the new <a href="ctp:api:type:RecurringPaymentAllocation">RecurringPaymentAllocation</a> within the <a href="ctp:api:type:RecurringPaymentConfiguration">RecurringPaymentConfiguration</a>.</p>
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

     * @return null|AllocationDraft
     */
    public function getAllocation()
    {
        return $this->allocation instanceof AllocationDraftBuilder ? $this->allocation->build() : $this->allocation;
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
     * @param ?AllocationDraft $allocation
     * @return $this
     */
    public function withAllocation(?AllocationDraft $allocation)
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
    public function withAllocationBuilder(?AllocationDraftBuilder $allocation)
    {
        $this->allocation = $allocation;

        return $this;
    }

    public function build(): CartAddRecurringPaymentAllocationAction
    {
        return new CartAddRecurringPaymentAllocationActionModel(
            $this->id,
            $this->paymentMethod instanceof PaymentMethodReferenceBuilder ? $this->paymentMethod->build() : $this->paymentMethod,
            $this->allocation instanceof AllocationDraftBuilder ? $this->allocation->build() : $this->allocation
        );
    }

    public static function of(): CartAddRecurringPaymentAllocationActionBuilder
    {
        return new self();
    }
}
