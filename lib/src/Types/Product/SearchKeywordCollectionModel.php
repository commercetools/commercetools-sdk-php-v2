<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class SearchKeywordCollectionModel extends JsonCollection implements SearchKeywordCollection {

    /**
     * @param SearchKeyword $value
     * @return SearchKeywordCollection
     */
    public function add($value) {
        if (!$value instanceof SearchKeyword) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return SearchKeyword
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof SearchKeyword) {
            $data = $this->mapData(SearchKeyword::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
