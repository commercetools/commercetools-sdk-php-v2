<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderChangeOrderStateActionModel extends JsonObjectModel implements OrderChangeOrderStateAction
{
    public const DISCRIMINATOR_VALUE = 'changeOrderState';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $orderState;


    public function __construct(
        string $orderState = null
    ) {
        $this->orderState = $orderState;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getOrderState()
    {
        if (is_null($this->orderState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderChangeOrderStateAction::FIELD_ORDER_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->orderState = (string) $data;
        }

        return $this->orderState;
    }

    public function setOrderState(?string $orderState): void
    {
        $this->orderState = $orderState;
    }
}
