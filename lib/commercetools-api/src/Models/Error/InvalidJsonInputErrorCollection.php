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
 * @extends ErrorObjectCollection<InvalidJsonInputError>
 * @method InvalidJsonInputError current()
 * @method InvalidJsonInputError end()
 * @method InvalidJsonInputError at($offset)
 */
class InvalidJsonInputErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert InvalidJsonInputError $value
     * @psalm-param InvalidJsonInputError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InvalidJsonInputErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidJsonInputError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidJsonInputError
     */
    protected function mapper()
    {
        return function (?int $index): ?InvalidJsonInputError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InvalidJsonInputError $data */
                $data = InvalidJsonInputErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
