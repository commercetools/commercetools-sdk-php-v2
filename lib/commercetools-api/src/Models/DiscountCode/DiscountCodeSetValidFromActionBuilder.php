<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<DiscountCodeSetValidFromAction>
 */
final class DiscountCodeSetValidFromActionBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**
     * <p>If absent, the field with the value is removed in case a value was set before.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    public function build(): DiscountCodeSetValidFromAction
    {
        return new DiscountCodeSetValidFromActionModel(
            $this->validFrom
        );
    }

    public static function of(): DiscountCodeSetValidFromActionBuilder
    {
        return new self();
    }
}
