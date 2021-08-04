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
 * @extends ErrorObjectCollection<InvalidInputError>
 * @method InvalidInputError current()
 * @method InvalidInputError at($offset)
 */
class InvalidInputErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert InvalidInputError $value
     * @psalm-param InvalidInputError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InvalidInputErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidInputError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidInputError
     */
    protected function mapper()
    {
        return function (?int $index): ?InvalidInputError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InvalidInputError $data */
                $data = InvalidInputErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
