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
 * @template T of SuggestTokenizer
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T at($offset)
 * @method SuggestTokenizer current()
 * @method SuggestTokenizer at($offset)
 */
class SuggestTokenizerCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
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
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (int $index): ?SuggestTokenizer {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = SuggestTokenizerModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
