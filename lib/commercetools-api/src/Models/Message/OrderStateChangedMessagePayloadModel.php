<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderStateChangedMessagePayloadModel extends JsonObjectModel implements OrderStateChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderStateChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $orderState;

    /**
     *
     * @var ?string
     */
    protected $oldOrderState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $orderState = null,
        ?string $oldOrderState = null,
        ?string $type = null
    ) {
        $this->orderState = $orderState;
        $this->oldOrderState = $oldOrderState;
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
     * <p><a href="ctp:api:type:OrderState">OrderState</a> after the <a href="ctp:api:type:OrderChangeOrderStateAction">Change Order State</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOrderState()
    {
        if (is_null($this->orderState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORDER_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->orderState = (string) $data;
        }

        return $this->orderState;
    }

    /**
     * <p><a href="ctp:api:type:OrderState">OrderState</a> before the <a href="ctp:api:type:OrderChangeOrderStateAction">Change Order State</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldOrderState()
    {
        if (is_null($this->oldOrderState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_ORDER_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->oldOrderState = (string) $data;
        }

        return $this->oldOrderState;
    }


    /**
     * @param ?string $orderState
     */
    public function setOrderState(?string $orderState): void
    {
        $this->orderState = $orderState;
    }

    /**
     * @param ?string $oldOrderState
     */
    public function setOldOrderState(?string $oldOrderState): void
    {
        $this->oldOrderState = $oldOrderState;
    }
}
