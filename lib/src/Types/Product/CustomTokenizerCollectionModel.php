<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\SuggestTokenizerCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class CustomTokenizerCollectionModel extends SuggestTokenizerCollectionModel implements CustomTokenizerCollection
{

    /**
     * @param CustomTokenizer $value
     * @return CustomTokenizerCollection
     */
    public function add($value) {
        if (!$value instanceof CustomTokenizer) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return CustomTokenizer
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof CustomTokenizer) {
            $data = $this->mapData(CustomTokenizer::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
