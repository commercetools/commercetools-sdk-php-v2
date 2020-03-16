<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class TaxedItemPriceDraftModel extends JsonObjectModel implements TaxedItemPriceDraft
{
    /**
     * @var ?Money
     */
    protected $totalNet;

    /**
     * @var ?Money
     */
    protected $totalGross;


    public function __construct(
        Money $totalNet = null,
        Money $totalGross = null
    ) {
        $this->totalNet = $totalNet;
        $this->totalGross = $totalGross;
    }

    /**
     * @return null|Money
     */
    public function getTotalNet()
    {
        if (is_null($this->totalNet)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TaxedItemPriceDraft::FIELD_TOTAL_NET);
            if (is_null($data)) {
                return null;
            }

            $this->totalNet = MoneyModel::of($data);
        }

        return $this->totalNet;
    }

    /**
     * @return null|Money
     */
    public function getTotalGross()
    {
        if (is_null($this->totalGross)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TaxedItemPriceDraft::FIELD_TOTAL_GROSS);
            if (is_null($data)) {
                return null;
            }

            $this->totalGross = MoneyModel::of($data);
        }

        return $this->totalGross;
    }

    public function setTotalNet(?Money $totalNet): void
    {
        $this->totalNet = $totalNet;
    }

    public function setTotalGross(?Money $totalGross): void
    {
        $this->totalGross = $totalGross;
    }
}
