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

final class CartSetCartTotalTaxActionModel extends JsonObjectModel implements CartSetCartTotalTaxAction
{
    const DISCRIMINATOR_VALUE = 'setCartTotalTax';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?Money
     */
    protected $externalTotalGross;

    /**
     * @var ?TaxPortionDraftCollection
     */
    protected $externalTaxPortions;

    public function __construct(
        Money $externalTotalGross = null,
        TaxPortionDraftCollection $externalTaxPortions = null
    ) {
        $this->externalTotalGross = $externalTotalGross;
        $this->externalTaxPortions = $externalTaxPortions;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>The total gross amount of the cart (totalNet + taxes).</p>
     *
     * @return null|Money
     */
    public function getExternalTotalGross()
    {
        if (is_null($this->externalTotalGross)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartSetCartTotalTaxAction::FIELD_EXTERNAL_TOTAL_GROSS);
            if (is_null($data)) {
                return null;
            }

            $this->externalTotalGross = MoneyModel::of($data);
        }

        return $this->externalTotalGross;
    }

    /**
     * @return null|TaxPortionDraftCollection
     */
    public function getExternalTaxPortions()
    {
        if (is_null($this->externalTaxPortions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(CartSetCartTotalTaxAction::FIELD_EXTERNAL_TAX_PORTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->externalTaxPortions = TaxPortionDraftCollection::fromArray($data);
        }

        return $this->externalTaxPortions;
    }

    public function setExternalTotalGross(?Money $externalTotalGross): void
    {
        $this->externalTotalGross = $externalTotalGross;
    }

    public function setExternalTaxPortions(?TaxPortionDraftCollection $externalTaxPortions): void
    {
        $this->externalTaxPortions = $externalTaxPortions;
    }
}
