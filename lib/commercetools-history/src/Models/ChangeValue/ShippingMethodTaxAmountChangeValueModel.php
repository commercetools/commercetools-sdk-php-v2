<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\TaxRate;
use Commercetools\History\Models\Common\TaxRateModel;
use Commercetools\History\Models\Common\TaxedPrice;
use Commercetools\History\Models\Common\TaxedPriceModel;

/**
 * @internal
 */
final class ShippingMethodTaxAmountChangeValueModel extends JsonObjectModel implements ShippingMethodTaxAmountChangeValue
{


    /**

     * @var ?TaxedPrice
     */
    protected $taxedPrice;

    /**

     * @var ?TaxRate
     */
    protected $taxRate;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?TaxedPrice $taxedPrice = null,
        ?TaxRate $taxRate = null
    ) {
        $this->taxedPrice = $taxedPrice;
        $this->taxRate = $taxRate;

    }

    /**

     * @return null|TaxedPrice
     */
    public function getTaxedPrice()
    {
        if (is_null($this->taxedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAXED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->taxedPrice =  TaxedPriceModel::of($data);
        }

        return $this->taxedPrice;
    }

    /**
     * <p>Shape of the value for <code>addTaxRate</code> and <code>removeTaxRate</code> actions</p>
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

            $this->taxRate =  TaxRateModel::of($data);
        }

        return $this->taxRate;
    }


    /**
     * @param ?TaxedPrice $taxedPrice
     */
    public function setTaxedPrice(?TaxedPrice $taxedPrice): void
    {
        $this->taxedPrice = $taxedPrice;
    }

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void
    {
        $this->taxRate = $taxRate;
    }



}
