<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
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
     * @var ?TypedMoney
     */
    protected $totalNet;

    /**
     * @var ?TypedMoney
     */
    protected $totalGross;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?TypedMoney $totalNet = null,
        ?TypedMoney $totalGross = null
    ) {
        $this->totalNet = $totalNet;
        $this->totalGross = $totalGross;
    }

    /**
     * @return null|TypedMoney
     */
    public function getTotalNet()
    {
        if (is_null($this->totalNet)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_NET);
            if (is_null($data)) {
                return null;
            }

            $this->totalNet = TypedMoneyModel::of($data);
        }

        return $this->totalNet;
    }

    /**
     * <p>TaxedItemPrice fields can not be used in query predicates.</p>
     *
     * @return null|TypedMoney
     */
    public function getTotalGross()
    {
        if (is_null($this->totalGross)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOTAL_GROSS);
            if (is_null($data)) {
                return null;
            }

            $this->totalGross = TypedMoneyModel::of($data);
        }

        return $this->totalGross;
    }


    /**
     * @param ?TypedMoney $totalNet
     */
    public function setTotalNet(?TypedMoney $totalNet): void
    {
        $this->totalNet = $totalNet;
    }

    /**
     * @param ?TypedMoney $totalGross
     */
    public function setTotalGross(?TypedMoney $totalGross): void
    {
        $this->totalGross = $totalGross;
    }
}
