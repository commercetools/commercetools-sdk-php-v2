<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\ShippingInfo;
use Commercetools\Api\Models\Cart\ShippingInfoModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderShippingInfoSetMessagePayloadModel extends JsonObjectModel implements OrderShippingInfoSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderShippingInfoSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?ShippingInfo
     */
    protected $shippingInfo;

    /**
     *
     * @var ?ShippingInfo
     */
    protected $oldShippingInfo;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ShippingInfo $shippingInfo = null,
        ?ShippingInfo $oldShippingInfo = null,
        ?string $type = null
    ) {
        $this->shippingInfo = $shippingInfo;
        $this->oldShippingInfo = $oldShippingInfo;
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
     * <p><a href="ctp:api:type:ShippingInfo">ShippingInfo</a> after the <a href="ctp:api:type:StagedOrderSetShippingMethodAction">Set Shipping Method</a> or <a href="ctp:api:type:StagedOrderSetCustomShippingMethodAction">Set Custom Shipping Method</a> update action.</p>
     *
     *
     * @return null|ShippingInfo
     */
    public function getShippingInfo()
    {
        if (is_null($this->shippingInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->shippingInfo = ShippingInfoModel::of($data);
        }

        return $this->shippingInfo;
    }

    /**
     * <p><a href="ctp:api:type:ShippingInfo">ShippingInfo</a> before the <a href="ctp:api:type:StagedOrderSetShippingMethodAction">Set Shipping Method</a> or <a href="ctp:api:type:StagedOrderSetCustomShippingMethodAction">Set Custom Shipping Method</a> update action.</p>
     *
     *
     * @return null|ShippingInfo
     */
    public function getOldShippingInfo()
    {
        if (is_null($this->oldShippingInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_SHIPPING_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->oldShippingInfo = ShippingInfoModel::of($data);
        }

        return $this->oldShippingInfo;
    }


    /**
     * @param ?ShippingInfo $shippingInfo
     */
    public function setShippingInfo(?ShippingInfo $shippingInfo): void
    {
        $this->shippingInfo = $shippingInfo;
    }

    /**
     * @param ?ShippingInfo $oldShippingInfo
     */
    public function setOldShippingInfo(?ShippingInfo $oldShippingInfo): void
    {
        $this->oldShippingInfo = $oldShippingInfo;
    }
}
