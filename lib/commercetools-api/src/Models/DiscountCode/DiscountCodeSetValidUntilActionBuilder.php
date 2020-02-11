<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<DiscountCodeSetValidUntilAction>
 */
final class DiscountCodeSetValidUntilActionBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**
     * <p>If absent, the field with the value is removed in case a value was set before.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }


    public function build(): DiscountCodeSetValidUntilAction
    {
        return new DiscountCodeSetValidUntilActionModel(
            $this->validUntil
        );
    }

    public static function of(): DiscountCodeSetValidUntilActionBuilder
    {
        return new self();
    }
}
