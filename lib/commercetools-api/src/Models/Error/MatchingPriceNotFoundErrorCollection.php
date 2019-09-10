<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MatchingPriceNotFoundError>
 *
 * @method MatchingPriceNotFoundError current()
 * @method MatchingPriceNotFoundError at($offset)
 */
class MatchingPriceNotFoundErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert MatchingPriceNotFoundError $value
     * @psalm-param MatchingPriceNotFoundError|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return MatchingPriceNotFoundErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof MatchingPriceNotFoundError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MatchingPriceNotFoundError
     */
    protected function mapper()
    {
        return function (int $index): ?MatchingPriceNotFoundError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MatchingPriceNotFoundErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
