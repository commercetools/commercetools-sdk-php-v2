<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Products;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomTokenizer>
 * @method CustomTokenizer current()
 * @method CustomTokenizer at($offset)
 */
class CustomTokenizerCollection extends MapperSequence
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
        return function (int $index): ?CustomTokenizer {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomTokenizerModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
