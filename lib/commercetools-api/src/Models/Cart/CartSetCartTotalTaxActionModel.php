<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

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
final class CartSetCartTotalTaxActionModel extends JsonObjectModel implements CartSetCartTotalTaxAction
{
    public const DISCRIMINATOR_VALUE = 'setCartTotalTax';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?Money
     */
    protected $externalTotalGross;

    /**
     *
     * @var ?TaxPortionDraftCollection
     */
    protected $externalTaxPortions;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Money $externalTotalGross = null,
        ?TaxPortionDraftCollection $externalTaxPortions = null,
        ?string $action = null
    ) {
        $this->externalTotalGross = $externalTotalGross;
        $this->externalTaxPortions = $externalTaxPortions;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     * <p>The Cart's total gross price becoming the <code>totalGross</code> field (<code>totalNet</code> + taxes) on the Cart's <code>taxedPrice</code>.</p>
     *
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
     * <p>Set if the <code>externalTotalGross</code> price is a sum of portions with different tax rates.</p>
     *
     *
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
