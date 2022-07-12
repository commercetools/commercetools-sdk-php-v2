<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ImageSearchResponse>
 */
final class ImageSearchResponseBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $count;

    /**

     * @var ?float
     */
    private $offset;

    /**

     * @var ?int
     */
    private $total;

    /**

     * @var ?ResultItemCollection
     */
    private $results;

    /**
     * <p>The maximum number of results to return from a query.</p>
     *

     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <p>Number of <a href="/../api/general-concepts#offset">elements skipped</a>.</p>
     *

     * @return null|float
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * <p>The total number of product images that were have been analyzed.</p>
     *

     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * <p>An array of image URLs of images that are similar to the query image. If no matching images are found, results is empty.</p>
     *

     * @return null|ResultItemCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param ?int $count
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @param ?float $offset
     * @return $this
     */
    public function withOffset(?float $offset)
    {
        $this->offset = $offset;

        return $this;
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
     * @param ?ResultItemCollection $results
     * @return $this
     */
    public function withResults(?ResultItemCollection $results)
    {
        $this->results = $results;

        return $this;
    }


    public function build(): ImageSearchResponse
    {
        return new ImageSearchResponseModel(
            $this->count,
            $this->offset,
            $this->total,
            $this->results
        );
    }

    public static function of(): ImageSearchResponseBuilder
    {
        return new self();
    }
}
