<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Product\SuggestTokenizerCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends SuggestTokenizerCollection<CustomTokenizer>
 * @method CustomTokenizer current()
 * @method CustomTokenizer end()
 * @method CustomTokenizer at($offset)
 */
class CustomTokenizerCollection extends SuggestTokenizerCollection
{
    /**
     * @psalm-assert CustomTokenizer $value
     * @psalm-param CustomTokenizer|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomTokenizerCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomTokenizer) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomTokenizer
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomTokenizer {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomTokenizer $data */
                $data = CustomTokenizerModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
