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
 * @extends MapperSequence<SuggestTokenizer>
 *
 * @method SuggestTokenizer current()
 * @method SuggestTokenizer at($offset)
 */
class SuggestTokenizerCollection extends MapperSequence
{
    /**
     * @psalm-assert SuggestTokenizer $value
     * @psalm-param SuggestTokenizer|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return SuggestTokenizerCollection
     */
    public function add($value)
    {
        if (!$value instanceof SuggestTokenizer) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SuggestTokenizer
     */
    protected function mapper()
    {
        return function (int $index): ?SuggestTokenizer {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SuggestTokenizerModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
