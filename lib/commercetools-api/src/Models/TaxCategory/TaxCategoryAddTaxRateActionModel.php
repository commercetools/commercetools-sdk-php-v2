<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class TaxCategoryAddTaxRateActionModel extends JsonObjectModel implements TaxCategoryAddTaxRateAction
{
    public const DISCRIMINATOR_VALUE = 'addTaxRate';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?TaxRateDraft
     */
    protected $taxRate;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?TaxRateDraft $taxRate = null,
        ?string $action = null
    ) {
        $this->taxRate = $taxRate;
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
     * <p>Value to append to the <code>rates</code> array.</p>
     *
     *
     * @return null|TaxRateDraft
     */
    public function getTaxRate()
    {
        if (is_null($this->taxRate)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TAX_RATE);
            if (is_null($data)) {
                return null;
            }

            $this->taxRate = TaxRateDraftModel::of($data);
        }

        return $this->taxRate;
    }


    /**
     * @param ?TaxRateDraft $taxRate
     */
    public function setTaxRate(?TaxRateDraft $taxRate): void
    {
        $this->taxRate = $taxRate;
    }
}
