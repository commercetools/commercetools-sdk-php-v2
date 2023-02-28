<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\CentPrecisionMoney;
use Commercetools\Api\Models\Common\CentPrecisionMoneyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class TaxedItemPriceModel extends JsonObjectModel implements TaxedItemPrice
{
    /**
     *
     * @var ?CentPrecisionMoney
     */
    protected $totalNet;

    /**
     *
     * @var ?CentPrecisionMoney
     */
    protected $totalGross;

    /**
     *
     * @var ?CentPrecisionMoney
     */
    protected $totalTax;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CentPrecisionMoney $totalNet = null,
        ?CentPrecisionMoney $totalGross = null,
        ?CentPrecisionMoney $totalTax = null
    ) {
        $this->totalNet = $totalNet;
        $this->totalGross = $totalGross;
        $this->totalTax = $totalTax;
    }

    /**
     * <p>Total net amount of the Line Item or Custom Line Item.</p>
     *
     *
     * @return null|CentPrecisionMoney
     */
    public function getTotalNet()
    {
        if (is_null($this->totalNet)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_NET);
            if (is_null($data)) {
                return null;
            }

            $this->totalNet = CentPrecisionMoneyModel::of($data);
        }

        return $this->totalNet;
    }

    /**
     * <p>Total gross amount of the Line Item or Custom Line Item.</p>
     *
     *
     * @return null|CentPrecisionMoney
     */
    public function getTotalGross()
    {
        if (is_null($this->totalGross)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_GROSS);
            if (is_null($data)) {
                return null;
            }

            $this->totalGross = CentPrecisionMoneyModel::of($data);
        }

        return $this->totalGross;
    }

    /**
     * <p>Total tax applicable for the Line Item or Custom Line Item.
     * Automatically calculated as the difference between the <code>totalGross</code> and <code>totalNet</code> values.</p>
     *
     *
     * @return null|CentPrecisionMoney
     */
    public function getTotalTax()
    {
        if (is_null($this->totalTax)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_TAX);
            if (is_null($data)) {
                return null;
            }

            $this->totalTax = CentPrecisionMoneyModel::of($data);
        }

        return $this->totalTax;
    }


    /**
     * @param ?CentPrecisionMoney $totalNet
     */
    public function setTotalNet(?CentPrecisionMoney $totalNet): void
    {
        $this->totalNet = $totalNet;
    }

    /**
     * @param ?CentPrecisionMoney $totalGross
     */
    public function setTotalGross(?CentPrecisionMoney $totalGross): void
    {
        $this->totalGross = $totalGross;
    }

    /**
     * @param ?CentPrecisionMoney $totalTax
     */
    public function setTotalTax(?CentPrecisionMoney $totalTax): void
    {
        $this->totalTax = $totalTax;
    }
}
