<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ImageSearchResponseModel extends JsonObjectModel implements ImageSearchResponse
{
    /**
     * @var ?int
     */
    protected $count;

    /**
     * @var ?int
     */
    protected $offset;

    /**
     * @var ?int
     */
    protected $total;

    /**
     * @var ?ResultItemCollection
     */
    protected $results;


    public function __construct(
        int $count = null,
        int $offset = null,
        int $total = null,
        ResultItemCollection $results = null
    ) {
        $this->count = $count;
        $this->offset = $offset;
        $this->total = $total;
        $this->results = $results;
    }

    /**
     * <p>The maximum number of results to return from a query.</p>
     *
     * @return null|int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ImageSearchResponse::FIELD_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->count = (int) $data;
        }

        return $this->count;
    }

    /**
     * <p>The offset into the results matching the query. An offset of 0 is the default value indicating that no results should be skipped.</p>
     *
     * @return null|int
     */
    public function getOffset()
    {
        if (is_null($this->offset)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ImageSearchResponse::FIELD_OFFSET);
            if (is_null($data)) {
                return null;
            }
            $this->offset = (int) $data;
        }

        return $this->offset;
    }

    /**
     * <p>The total number of product images that were have been analyzed.</p>
     *
     * @return null|int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ImageSearchResponse::FIELD_TOTAL);
            if (is_null($data)) {
                return null;
            }
            $this->total = (int) $data;
        }

        return $this->total;
    }

    /**
     * <p>An array of image URLs of images that are similar to the query image. If no matching images are found, results is empty.</p>
     *
     * @return null|ResultItemCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ImageSearchResponse::FIELD_RESULTS);
            if (is_null($data)) {
                return null;
            }
            $this->results = ResultItemCollection::fromArray($data);
        }

        return $this->results;
    }

    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    public function setResults(?ResultItemCollection $results): void
    {
        $this->results = $results;
    }
}
