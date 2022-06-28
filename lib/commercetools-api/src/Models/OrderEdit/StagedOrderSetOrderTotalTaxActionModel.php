<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\TaxPortionDraftCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class StagedOrderSetOrderTotalTaxActionModel extends JsonObjectModel implements StagedOrderSetOrderTotalTaxAction
{
    public const DISCRIMINATOR_VALUE = 'setOrderTotalTax';
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


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Money $externalTotalGross = null,
        ?TaxPortionDraftCollection $externalTaxPortions = null
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
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Draft type that stores amounts in cent precision for the specified currency.</p>
     * <p>For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
     *
     * @return null|Money
     */
    public function getExternalTotalGross()
    {
        if (is_null($this->externalTotalGross)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EXTERNAL_TOTAL_GROSS);
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
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_EXTERNAL_TAX_PORTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->externalTaxPortions = TaxPortionDraftCollection::fromArray($data);
        }

        return $this->externalTaxPortions;
    }


    /**
     * @param ?Money $externalTotalGross
     */
    public function setExternalTotalGross(?Money $externalTotalGross): void
    {
        $this->externalTotalGross = $externalTotalGross;
    }

    /**
     * @param ?TaxPortionDraftCollection $externalTaxPortions
     */
    public function setExternalTaxPortions(?TaxPortionDraftCollection $externalTaxPortions): void
    {
        $this->externalTaxPortions = $externalTaxPortions;
    }
}
