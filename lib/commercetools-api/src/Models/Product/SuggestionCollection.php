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
 * @extends MapperSequence<Suggestion>
 *
 * @method Suggestion current()
 * @method Suggestion at($offset)
 */
class SuggestionCollection extends MapperSequence
{
    /**
     * @psalm-assert Suggestion $value
     * @psalm-param Suggestion|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return SuggestionCollection
     */
    public function add($value)
    {
        if (!$value instanceof Suggestion) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Suggestion
     */
    protected function mapper()
    {
        return function (int $index): ?Suggestion {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SuggestionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
