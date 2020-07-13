<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MissingPricesProductCount>
 */
final class MissingPricesProductCountBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $total;

    /**
     * @var ?int
     */
    private $missingPrices;

    /**
     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return null|int
     */
    public function getMissingPrices()
    {
        return $this->missingPrices;
    }

    /**
     * @param ?int $total
     * @return $this
     */
    public function withTotal(?int $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @param ?int $missingPrices
     * @return $this
     */
    public function withMissingPrices(?int $missingPrices)
    {
        $this->missingPrices = $missingPrices;

        return $this;
    }


    public function build(): MissingPricesProductCount
    {
        return new MissingPricesProductCountModel(
            $this->total,
            $this->missingPrices
        );
    }

    public static function of(): MissingPricesProductCountBuilder
    {
        return new self();
    }
}
