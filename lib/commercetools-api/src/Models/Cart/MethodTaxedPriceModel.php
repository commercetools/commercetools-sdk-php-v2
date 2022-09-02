<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MethodTaxedPriceModel extends JsonObjectModel implements MethodTaxedPrice
{
    /**
     *
     * @var ?string
     */
    protected $shippingMethodKey;

    /**
     *
     * @var ?TaxedItemPrice
     */
    protected $taxedPrice;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $shippingMethodKey = null,
        ?TaxedItemPrice $taxedPrice = null
    ) {
        $this->shippingMethodKey = $shippingMethodKey;
        $this->taxedPrice = $taxedPrice;
    }

    /**
     * <p>User-defined unique identifier of the Shipping Method in a Cart with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *
     *
     * @return null|string
     */
    public function getShippingMethodKey()
    {
        if (is_null($this->shippingMethodKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPPING_METHOD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->shippingMethodKey = (string) $data;
        }

        return $this->shippingMethodKey;
    }

    /**
     * <p>Taxed price for the Shipping Method.</p>
     *
     *
     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAXED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->taxedPrice = TaxedItemPriceModel::of($data);
        }

        return $this->taxedPrice;
    }


    /**
     * @param ?string $shippingMethodKey
     */
    public function setShippingMethodKey(?string $shippingMethodKey): void
    {
        $this->shippingMethodKey = $shippingMethodKey;
    }

    /**
     * @param ?TaxedItemPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedItemPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }
}
