<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSearchFacetStatsExpressionModel extends JsonObjectModel implements ProductSearchFacetStatsExpression
{
    /**
     *
     * @var ?ProductSearchFacetStatsValue
     */
    protected $stats;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ProductSearchFacetStatsValue $stats = null
    ) {
        $this->stats = $stats;
    }

    /**
     * <p>Definition of the stats facet.</p>
     *
     *
     * @return null|ProductSearchFacetStatsValue
     */
    public function getStats()
    {
        if (is_null($this->stats)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATS);
            if (is_null($data)) {
                return null;
            }

            $this->stats = ProductSearchFacetStatsValueModel::of($data);
        }

        return $this->stats;
    }


    /**
     * @param ?ProductSearchFacetStatsValue $stats
     */
    public function setStats(?ProductSearchFacetStatsValue $stats): void
    {
        $this->stats = $stats;
    }
}
