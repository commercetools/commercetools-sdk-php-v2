<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<WhitespaceTokenizer>
 * @method WhitespaceTokenizer current()
 * @method WhitespaceTokenizer at($offset)
 */
class WhitespaceTokenizerCollection extends MapperSequence
{
    /**
     * @psalm-assert WhitespaceTokenizer $value
     * @psalm-param WhitespaceTokenizer|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return WhitespaceTokenizerCollection
     */
    public function add($value)
    {
        if (!$value instanceof WhitespaceTokenizer) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?WhitespaceTokenizer
     */
    protected function mapper()
    {
        return function (int $index): ?WhitespaceTokenizer {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = WhitespaceTokenizerModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
