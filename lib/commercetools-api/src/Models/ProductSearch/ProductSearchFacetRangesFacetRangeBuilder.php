<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSearchFacetRangesFacetRange>
 */
final class ProductSearchFacetRangesFacetRangeBuilder implements Builder
{
    /**

     * @var null|mixed|mixed
     */
    private $from;

    /**

     * @var null|mixed|mixed
     */
    private $to;

    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>Starting value of the bucket (inclusive).</p>
     *

     * @return null|mixed
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * <p>Ending value of the bucket (non-inclusive).</p>
     *

     * @return null|mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * <p>Key to assign the bucket.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $from
     * @return $this
     */
    public function withFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @param mixed $to
     * @return $this
     */
    public function withTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): ProductSearchFacetRangesFacetRange
    {
        return new ProductSearchFacetRangesFacetRangeModel(
            $this->from,
            $this->to,
            $this->key
        );
    }

    public static function of(): ProductSearchFacetRangesFacetRangeBuilder
    {
        return new self();
    }
}
