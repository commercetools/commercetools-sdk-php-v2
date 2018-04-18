<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class SuggestionResultCollectionModel extends JsonCollection implements SuggestionResultCollection {

    /**
     * @param SuggestionResult $value
     * @return SuggestionResultCollection
     */
    public function add($value) {
        if (!$value instanceof SuggestionResult) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return SuggestionResult
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof SuggestionResult) {
            $data = $this->mapData(SuggestionResult::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
