<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class SuggestionCollectionModel extends JsonCollection implements SuggestionCollection
{

    /**
     * @param Suggestion $value
     * @return SuggestionCollection
     */
    public function add($value) {
        if (!$value instanceof Suggestion) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return Suggestion
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof Suggestion) {
            $data = $this->mapData(Suggestion::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
