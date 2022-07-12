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
 * @implements Builder<DiscountCodeSetValidFromAction>
 */
final class DiscountCodeSetValidFromActionBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $validFrom;

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
     * @param ?DateTimeImmutable $validFrom
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
