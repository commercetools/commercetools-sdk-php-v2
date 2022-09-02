<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MethodTaxRateModel extends JsonObjectModel implements MethodTaxRate
{
    /**
     *
     * @var ?string
     */
    protected $shippingMethodKey;

    /**
     *
     * @var ?TaxRate
     */
    protected $taxRate;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $shippingMethodKey = null,
        ?TaxRate $taxRate = null
    ) {
        $this->shippingMethodKey = $shippingMethodKey;
        $this->taxRate = $taxRate;
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
     * <p>Tax Rate for the Shipping Method.</p>
     *
     *
     * @return null|TaxRate
     */
    public function getTaxRate()
    {
        if (is_null($this->taxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->taxRate = TaxRateModel::of($data);
        }

        return $this->taxRate;
    }


    /**
     * @param ?string $shippingMethodKey
     */
    public function setShippingMethodKey(?string $shippingMethodKey): void
    {
        $this->shippingMethodKey = $shippingMethodKey;
    }

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void
    {
        $this->taxRate = $taxRate;
    }
}
