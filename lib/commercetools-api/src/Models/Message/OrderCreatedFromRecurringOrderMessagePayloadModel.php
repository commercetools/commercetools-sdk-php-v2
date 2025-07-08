<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Order\OrderModel;
use Commercetools\Api\Models\RecurringOrder\RecurringOrderReference;
use Commercetools\Api\Models\RecurringOrder\RecurringOrderReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderCreatedFromRecurringOrderMessagePayloadModel extends JsonObjectModel implements OrderCreatedFromRecurringOrderMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderCreatedFromRecurringOrder';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?Order
     */
    protected $order;

    /**
     *
     * @var ?RecurringOrderReference
     */
    protected $recurringOrderRef;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Order $order = null,
        ?RecurringOrderReference $recurringOrderRef = null,
        ?string $type = null
    ) {
        $this->order = $order;
        $this->recurringOrderRef = $recurringOrderRef;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><a href="ctp:api:type:Order">Order</a> that was created.</p>
     *
     *
     * @return null|Order
     */
    public function getOrder()
    {
        if (is_null($this->order)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ORDER);
            if (is_null($data)) {
                return null;
            }

            $this->order = OrderModel::of($data);
        }

        return $this->order;
    }

    /**
     * <p>Reference to the origin <a href="ctp:api:type:RecurringOrder">Recurring Order</a>.</p>
     *
     *
     * @return null|RecurringOrderReference
     */
    public function getRecurringOrderRef()
    {
        if (is_null($this->recurringOrderRef)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RECURRING_ORDER_REF);
            if (is_null($data)) {
                return null;
            }

            $this->recurringOrderRef = RecurringOrderReferenceModel::of($data);
        }

        return $this->recurringOrderRef;
    }


    /**
     * @param ?Order $order
     */
    public function setOrder(?Order $order): void
    {
        $this->order = $order;
    }

    /**
     * @param ?RecurringOrderReference $recurringOrderRef
     */
    public function setRecurringOrderRef(?RecurringOrderReference $recurringOrderRef): void
    {
        $this->recurringOrderRef = $recurringOrderRef;
    }
}
