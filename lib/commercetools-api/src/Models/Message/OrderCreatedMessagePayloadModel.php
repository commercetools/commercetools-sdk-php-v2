<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Order;
use Commercetools\Api\Models\Order\OrderModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderCreatedMessagePayloadModel extends JsonObjectModel implements OrderCreatedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderCreated';
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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Order $order = null,
        ?string $type = null
    ) {
        $this->order = $order;
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
     * @param ?Order $order
     */
    public function setOrder(?Order $order): void
    {
        $this->order = $order;
    }
}
