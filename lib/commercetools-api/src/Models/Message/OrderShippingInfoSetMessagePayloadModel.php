<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingInfoModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderShippingInfoSetMessagePayloadModel extends JsonObjectModel implements OrderShippingInfoSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderShippingInfoSet';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?ShippingInfo
     */
    protected $shippingInfo;

    /**
     * @var ?ShippingInfo
     */
    protected $oldShippingInfo;

    public function __construct(
        ShippingInfo $shippingInfo = null,
        ShippingInfo $oldShippingInfo = null
    ) {
        $this->shippingInfo = $shippingInfo;
        $this->oldShippingInfo = $oldShippingInfo;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|ShippingInfo
     */
    public function getShippingInfo()
    {
        if (is_null($this->shippingInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderShippingInfoSetMessagePayload::FIELD_SHIPPING_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->shippingInfo = ShippingInfoModel::of($data);
        }

        return $this->shippingInfo;
    }

    /**
     * @return null|ShippingInfo
     */
    public function getOldShippingInfo()
    {
        if (is_null($this->oldShippingInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderShippingInfoSetMessagePayload::FIELD_OLD_SHIPPING_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->oldShippingInfo = ShippingInfoModel::of($data);
        }

        return $this->oldShippingInfo;
    }

    public function setShippingInfo(?ShippingInfo $shippingInfo): void
    {
        $this->shippingInfo = $shippingInfo;
    }

    public function setOldShippingInfo(?ShippingInfo $oldShippingInfo): void
    {
        $this->oldShippingInfo = $oldShippingInfo;
    }
}
