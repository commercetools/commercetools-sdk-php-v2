<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PriceTierModel extends JsonObjectModel implements PriceTier
{
    /**
     * @var ?int
     */
    protected $minimumQuantity;

    /**
     * @var ?Money
     */
    protected $value;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $minimumQuantity = null,
        ?Money $value = null
    ) {
        $this->minimumQuantity = $minimumQuantity;
        $this->value = $value;
    }

    /**
     * <p>The minimum quantity this price tier is valid for.</p>
     *
     * @return null|int
     */
    public function getMinimumQuantity()
    {
        if (is_null($this->minimumQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MINIMUM_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->minimumQuantity = (int) $data;
        }

        return $this->minimumQuantity;
    }

    /**
     * <p>The currency of a price tier is always the same as the currency of the base Price.</p>
     *
     * @return null|Money
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value = MoneyModel::of($data);
        }

        return $this->value;
    }


    /**
     * @param ?int $minimumQuantity
     */
    public function setMinimumQuantity(?int $minimumQuantity): void
    {
        $this->minimumQuantity = $minimumQuantity;
    }

    /**
     * @param ?Money $value
     */
    public function setValue(?Money $value): void
    {
        $this->value = $value;
    }
}
