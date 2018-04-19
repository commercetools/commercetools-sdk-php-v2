<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class SuggestTokenizerCollectionModel extends JsonCollection implements SuggestTokenizerCollection
{

    /**
     * @param SuggestTokenizer $value
     * @return SuggestTokenizerCollection
     */
    public function add($value) {
        if (!$value instanceof SuggestTokenizer) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return SuggestTokenizer
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof SuggestTokenizer) {
            $resolvedClass = $this->resolveDiscriminator(SuggestTokenizer::class, $data);
            $data = $this->mapData($resolvedClass, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
