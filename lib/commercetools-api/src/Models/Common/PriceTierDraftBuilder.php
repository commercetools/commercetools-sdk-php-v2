<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;

/**
 * @implements Builder<PriceTierDraft>
 */
final class PriceTierDraftBuilder implements Builder
{
    /**
     * @var Money|?MoneyBuilder
     */
    private $value;

    /**
     * @var ?int
     */
    private $minimumQuantity;

    /**
     * @return null|Money
     */
    public function getValue()
    {
        return $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @return null|int
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * @return $this
     */
    public function withValue(?Money $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withMinimumQuantity(?int $minimumQuantity)
    {
        $this->minimumQuantity = $minimumQuantity;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?MoneyBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): PriceTierDraft
    {
        return new PriceTierDraftModel(
            ($this->value instanceof MoneyBuilder ? $this->value->build() : $this->value),
            $this->minimumQuantity
        );
    }

    public static function of(): PriceTierDraftBuilder
    {
        return new self();
    }
}
