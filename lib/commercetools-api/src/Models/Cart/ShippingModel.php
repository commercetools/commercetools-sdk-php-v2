<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShippingModel extends JsonObjectModel implements Shipping
{
    /**
     *
     * @var ?string
     */
    protected $shippingKey;

    /**
     *
     * @var ?ShippingInfo
     */
    protected $shippingInfo;

    /**
     *
     * @var ?Address
     */
    protected $shippingAddress;

    /**
     *
     * @var ?ShippingRateInput
     */
    protected $shippingRateInput;

    /**
     *
     * @var ?CustomFields
     */
    protected $shippingCustomFields;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $shippingKey = null,
        ?ShippingInfo $shippingInfo = null,
        ?Address $shippingAddress = null,
        ?ShippingRateInput $shippingRateInput = null,
        ?CustomFields $shippingCustomFields = null
    ) {
        $this->shippingKey = $shippingKey;
        $this->shippingInfo = $shippingInfo;
        $this->shippingAddress = $shippingAddress;
        $this->shippingRateInput = $shippingRateInput;
        $this->shippingCustomFields = $shippingCustomFields;
    }

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multi</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *
     *
     * @return null|string
     */
    public function getShippingKey()
    {
        if (is_null($this->shippingKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPPING_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->shippingKey = (string) $data;
        }

        return $this->shippingKey;
    }

    /**
     * <p>Automatically set when the <a href="ctp:api:type:CartAddShippingMethodAction">Shipping Method is added</a>.</p>
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
     * <p>Determines the shipping rates and Tax Rates of the associated Line Item quantities.</p>
     *
     *
     * @return null|Address
     */
    public function getShippingAddress()
    {
        if (is_null($this->shippingAddress)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->shippingAddress = AddressModel::of($data);
        }

        return $this->shippingAddress;
    }

    /**
     * <p>Used as an input to select a <a href="ctp:api:type:ShippingRatePriceTier">ShippingRatePriceTier</a>.</p>
     * <ul>
     * <li>Must be <a href="ctp:api:type:ClassificationShippingRateInput">ClassificationShippingRateInput</a> if <a href="ctp:api:type:ShippingRateInputType">ShippingRateInputType</a> is <a href="ctp:api:type:CartClassificationType">CartClassificationType</a>.</li>
     * <li>Must be <a href="ctp:api:type:ScoreShippingRateInput">ScoreShippingRateInput</a> if <a href="ctp:api:type:ShippingRateInputType">ShippingRateInputType</a> is <a href="ctp:api:type:CartScoreType">CartScoreType</a>.</li>
     * </ul>
     *
     *
     * @return null|ShippingRateInput
     */
    public function getShippingRateInput()
    {
        if (is_null($this->shippingRateInput)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_RATE_INPUT);
            if (is_null($data)) {
                return null;
            }

            $this->shippingRateInput = ShippingRateInputModel::of($data);
        }

        return $this->shippingRateInput;
    }

    /**
     * <p>Custom Fields of Shipping.</p>
     *
     *
     * @return null|CustomFields
     */
    public function getShippingCustomFields()
    {
        if (is_null($this->shippingCustomFields)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SHIPPING_CUSTOM_FIELDS);
            if (is_null($data)) {
                return null;
            }

            $this->shippingCustomFields = CustomFieldsModel::of($data);
        }

        return $this->shippingCustomFields;
    }


    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void
    {
        $this->shippingKey = $shippingKey;
    }

    /**
     * @param ?ShippingInfo $shippingInfo
     */
    public function setShippingInfo(?ShippingInfo $shippingInfo): void
    {
        $this->shippingInfo = $shippingInfo;
    }

    /**
     * @param ?Address $shippingAddress
     */
    public function setShippingAddress(?Address $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @param ?ShippingRateInput $shippingRateInput
     */
    public function setShippingRateInput(?ShippingRateInput $shippingRateInput): void
    {
        $this->shippingRateInput = $shippingRateInput;
    }

    /**
     * @param ?CustomFields $shippingCustomFields
     */
    public function setShippingCustomFields(?CustomFields $shippingCustomFields): void
    {
        $this->shippingCustomFields = $shippingCustomFields;
    }
}
