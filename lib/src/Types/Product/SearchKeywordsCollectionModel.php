<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class SearchKeywordsCollectionModel extends JsonCollection implements SearchKeywordsCollection
{

    /**
     * @param SearchKeywords $value
     * @return SearchKeywordsCollection
     */
    public function add($value) {
        if (!$value instanceof SearchKeywords) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return SearchKeywords
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof SearchKeywords) {
            $data = $this->mapData(SearchKeywords::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
