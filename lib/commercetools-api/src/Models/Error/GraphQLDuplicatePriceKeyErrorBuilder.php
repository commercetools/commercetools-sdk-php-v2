<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\Price;
use Commercetools\Api\Models\Common\PriceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GraphQLDuplicatePriceKeyError>
 */
final class GraphQLDuplicatePriceKeyErrorBuilder implements Builder
{
    /**

     * @var null|Price|PriceBuilder
     */
    private $conflictingPrice;

    /**
     * <p>Conflicting Embedded Price.</p>
     *

     * @return null|Price
     */
    public function getConflictingPrice()
    {
        return $this->conflictingPrice instanceof PriceBuilder ? $this->conflictingPrice->build() : $this->conflictingPrice;
    }

    /**
     * @param ?Price $conflictingPrice
     * @return $this
     */
    public function withConflictingPrice(?Price $conflictingPrice)
    {
        $this->conflictingPrice = $conflictingPrice;

        return $this;
    }

    /**
     * @deprecated use withConflictingPrice() instead
     * @return $this
     */
    public function withConflictingPriceBuilder(?PriceBuilder $conflictingPrice)
    {
        $this->conflictingPrice = $conflictingPrice;

        return $this;
    }

    public function build(): GraphQLDuplicatePriceKeyError
    {
        return new GraphQLDuplicatePriceKeyErrorModel(
            $this->conflictingPrice instanceof PriceBuilder ? $this->conflictingPrice->build() : $this->conflictingPrice
        );
    }

    public static function of(): GraphQLDuplicatePriceKeyErrorBuilder
    {
        return new self();
    }
}
