<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\PaymentMethod\PaymentMethodReference;
use Commercetools\Api\Models\PaymentMethod\PaymentMethodReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentAllocationDraftModel extends JsonObjectModel implements PaymentAllocationDraft
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?PaymentMethodReference
     */
    protected $paymentMethod;

    /**
     *
     * @var ?AllocationDraft
     */
    protected $allocation;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?PaymentMethodReference $paymentMethod = null,
        ?AllocationDraft $allocation = null
    ) {
        $this->id = $id;
        $this->paymentMethod = $paymentMethod;
        $this->allocation = $allocation;
    }

    /**
     * <p>Unique identifier of the resulting <a href="ctp:api:type:RecurringPaymentAllocation">RecurringPaymentAllocation</a> within the <a href="ctp:api:type:RecurringPaymentConfiguration">RecurringPaymentConfiguration</a>.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Payment Method charged for this share of the Order total.</p>
     *
     *
     * @return null|PaymentMethodReference
     */
    public function getPaymentMethod()
    {
        if (is_null($this->paymentMethod)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PAYMENT_METHOD);
            if (is_null($data)) {
                return null;
            }

            $this->paymentMethod = PaymentMethodReferenceModel::of($data);
        }

        return $this->paymentMethod;
    }

    /**
     * <p>Share of the Order total charged to the <code>paymentMethod</code>.</p>
     *
     *
     * @return null|AllocationDraft
     */
    public function getAllocation()
    {
        if (is_null($this->allocation)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ALLOCATION);
            if (is_null($data)) {
                return null;
            }
            $className = AllocationDraftModel::resolveDiscriminatorClass($data);
            $this->allocation = $className::of($data);
        }

        return $this->allocation;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?PaymentMethodReference $paymentMethod
     */
    public function setPaymentMethod(?PaymentMethodReference $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @param ?AllocationDraft $allocation
     */
    public function setAllocation(?AllocationDraft $allocation): void
    {
        $this->allocation = $allocation;
    }
}
