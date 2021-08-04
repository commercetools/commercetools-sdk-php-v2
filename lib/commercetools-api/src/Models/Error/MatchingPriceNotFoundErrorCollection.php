<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<MatchingPriceNotFoundError>
 * @method MatchingPriceNotFoundError current()
 * @method MatchingPriceNotFoundError end()
 * @method MatchingPriceNotFoundError at($offset)
 */
class MatchingPriceNotFoundErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert MatchingPriceNotFoundError $value
     * @psalm-param MatchingPriceNotFoundError|stdClass $value
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
        return function (?int $index): ?MatchingPriceNotFoundError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MatchingPriceNotFoundError $data */
                $data = MatchingPriceNotFoundErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
