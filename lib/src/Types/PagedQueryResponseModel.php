<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\ResourceCollection;
use Commercetools\Types\Common\Resource;

class PagedQueryResponseModel extends JsonObjectModel implements PagedQueryResponse
{
    /**
     * @var int
     */
    protected $count;
    /**
     * @var int
     */
    protected $total;
    /**
     * @var int
     */
    protected $offset;
    /**
     * @var ResourceCollection
     */
    protected $results;

    /**
     * @return int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            $value = $this->raw(PagedQueryResponse::FIELD_COUNT);
            $value = (int)$value;
            $this->count = $value;
        }
        return $this->count;
    }
    /**
     * @return int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            $value = $this->raw(PagedQueryResponse::FIELD_TOTAL);
            $value = (int)$value;
            $this->total = $value;
        }
        return $this->total;
    }
    /**
     * @return int
     */
    public function getOffset()
    {
        if (is_null($this->offset)) {
            $value = $this->raw(PagedQueryResponse::FIELD_OFFSET);
            $value = (int)$value;
            $this->offset = $value;
        }
        return $this->offset;
    }
    /**
     * @return ResourceCollection
     */
    public function getResults()
    {
        if (is_null($this->results)) {
            $value = $this->raw(PagedQueryResponse::FIELD_RESULTS);
            if (is_null($value)) {
                return $this->mapData(ResourceCollection::class, null);
            }
            $value = $this->mapData(ResourceCollection::class, $value);
            $this->results = $value;
        }
        return $this->results;
    }

    /**
     * @param int $count
     * @return $this
     */
    public function setCount(int $count)
    {
        $this->count = (int)$count;

        return $this;
    }
    /**
     * @param int $total
     * @return $this
     */
    public function setTotal(int $total)
    {
        $this->total = (int)$total;

        return $this;
    }
    /**
     * @param int $offset
     * @return $this
     */
    public function setOffset(int $offset)
    {
        $this->offset = (int)$offset;

        return $this;
    }
    /**
     * @param ResourceCollection $results
     * @return $this
     */
    public function setResults(ResourceCollection $results)
    {
        $this->results = $results;

        return $this;
    }

}
