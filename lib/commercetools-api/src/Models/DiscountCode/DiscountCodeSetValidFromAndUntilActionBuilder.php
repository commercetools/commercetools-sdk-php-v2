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
 * @implements Builder<DiscountCodeSetValidFromAndUntilAction>
 */
final class DiscountCodeSetValidFromAndUntilActionBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**

     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**
     * <p>Value to set that must be earlier than <code>validUntil</code>. If empty, any existing value will be removed.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * <p>Value to set that must be later than <code>validFrom</code>. If empty, any existing value will be removed.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @param ?DateTimeImmutable $validFrom
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $validUntil
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }


    public function build(): DiscountCodeSetValidFromAndUntilAction
    {
        return new DiscountCodeSetValidFromAndUntilActionModel(
            $this->validFrom,
            $this->validUntil
        );
    }

    public static function of(): DiscountCodeSetValidFromAndUntilActionBuilder
    {
        return new self();
    }
}
