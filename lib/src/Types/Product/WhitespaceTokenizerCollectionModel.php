<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\Product\SuggestTokenizerCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class WhitespaceTokenizerCollectionModel extends SuggestTokenizerCollectionModel implements WhitespaceTokenizerCollection {

    /**
     * @param WhitespaceTokenizer $value
     * @return WhitespaceTokenizerCollection
     */
    public function add($value) {
        if (!$value instanceof WhitespaceTokenizer) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return WhitespaceTokenizer
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof WhitespaceTokenizer) {
            $data = $this->mapData(WhitespaceTokenizer::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
