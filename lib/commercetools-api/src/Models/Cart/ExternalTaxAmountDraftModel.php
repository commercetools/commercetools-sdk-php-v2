<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ExternalTaxAmountDraftModel extends JsonObjectModel implements ExternalTaxAmountDraft
{
    /**
     * @var ?Money
     */
    protected $totalGross;

    /**
     * @var ?ExternalTaxRateDraft
     */
    protected $taxRate;

    public function __construct(
        Money $totalGross = null,
        ExternalTaxRateDraft $taxRate = null
    ) {
        $this->totalGross = $totalGross;
        $this->taxRate = $taxRate;
    }

    /**
     * <p>The total gross amount of the item (totalNet + taxes).</p>
     *
     * @return null|Money
     */
    public function getTotalGross()
    {
        if (is_null($this->totalGross)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ExternalTaxAmountDraft::FIELD_TOTAL_GROSS);
            if (is_null($data)) {
                return null;
            }

            $this->totalGross = MoneyModel::of($data);
        }

        return $this->totalGross;
    }

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getTaxRate()
    {
        if (is_null($this->taxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ExternalTaxAmountDraft::FIELD_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->taxRate = ExternalTaxRateDraftModel::of($data);
        }

        return $this->taxRate;
    }

    public function setTotalGross(?Money $totalGross): void
    {
        $this->totalGross = $totalGross;
    }

    public function setTaxRate(?ExternalTaxRateDraft $taxRate): void
    {
        $this->taxRate = $taxRate;
    }
}
