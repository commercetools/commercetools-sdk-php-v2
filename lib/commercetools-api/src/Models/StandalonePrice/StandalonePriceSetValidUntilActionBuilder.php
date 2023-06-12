<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<StandalonePriceSetValidUntilAction>
 */
final class StandalonePriceSetValidUntilActionBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
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


    public function build(): StandalonePriceSetValidUntilAction
    {
        return new StandalonePriceSetValidUntilActionModel(
            $this->validUntil
        );
    }

    public static function of(): StandalonePriceSetValidUntilActionBuilder
    {
        return new self();
    }
}
