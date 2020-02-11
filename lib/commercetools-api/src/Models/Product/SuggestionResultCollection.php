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
 * @extends MapperSequence<SuggestionResult>
 * @method SuggestionResult current()
 * @method SuggestionResult at($offset)
 */
class SuggestionResultCollection extends MapperSequence
{
    /**
     * @psalm-assert SuggestionResult $value
     * @psalm-param SuggestionResult|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SuggestionResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof SuggestionResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SuggestionResult
     */
    protected function mapper()
    {
        return function (int $index): ?SuggestionResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SuggestionResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
