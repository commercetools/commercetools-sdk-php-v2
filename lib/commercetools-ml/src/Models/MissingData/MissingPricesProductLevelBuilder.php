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
 * @implements Builder<MissingPricesProductLevel>
 */
final class MissingPricesProductLevelBuilder implements Builder
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
     * <p>Number of products scanned.</p>
     *
     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * <p>Number of products missing prices.</p>
     *
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


    public function build(): MissingPricesProductLevel
    {
        return new MissingPricesProductLevelModel(
            $this->total,
            $this->missingPrices
        );
    }

    public static function of(): MissingPricesProductLevelBuilder
    {
        return new self();
    }
}
