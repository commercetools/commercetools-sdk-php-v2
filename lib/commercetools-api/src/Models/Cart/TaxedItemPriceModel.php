<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class TaxedItemPriceModel extends JsonObjectModel implements TaxedItemPrice
{
    /**
     * @var ?TypedMoney
     */
    protected $totalGross;

    /**
     * @var ?TypedMoney
     */
    protected $totalNet;

    public function __construct(
        TypedMoney $totalGross = null,
        TypedMoney $totalNet = null
    ) {
        $this->totalGross = $totalGross;
        $this->totalNet = $totalNet;
    }

    /**
     * @return null|TypedMoney
     */
    public function getTotalGross()
    {
        if (is_null($this->totalGross)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TaxedItemPrice::FIELD_TOTAL_GROSS);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->totalGross = $className::of($data);
        }

        return $this->totalGross;
    }

    /**
     * @return null|TypedMoney
     */
    public function getTotalNet()
    {
        if (is_null($this->totalNet)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TaxedItemPrice::FIELD_TOTAL_NET);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->totalNet = $className::of($data);
        }

        return $this->totalNet;
    }

    public function setTotalGross(?TypedMoney $totalGross): void
    {
        $this->totalGross = $totalGross;
    }

    public function setTotalNet(?TypedMoney $totalNet): void
    {
        $this->totalNet = $totalNet;
    }
}
