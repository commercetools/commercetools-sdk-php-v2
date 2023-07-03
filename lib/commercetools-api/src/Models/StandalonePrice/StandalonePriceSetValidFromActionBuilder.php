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
 * @implements Builder<StandalonePriceSetValidFromAction>
 */
final class StandalonePriceSetValidFromActionBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
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


    public function build(): StandalonePriceSetValidFromAction
    {
        return new StandalonePriceSetValidFromActionModel(
            $this->validFrom
        );
    }

    public static function of(): StandalonePriceSetValidFromActionBuilder
    {
        return new self();
    }
}
