<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use stdClass;

/**
 * @extends ErrorObjectCollection<InvalidJsonInput>
 * @method InvalidJsonInput current()
 * @method InvalidJsonInput at($offset)
 */
class InvalidJsonInputCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert InvalidJsonInput $value
     * @psalm-param InvalidJsonInput|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InvalidJsonInputCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidJsonInput) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidJsonInput
     */
    protected function mapper()
    {
        return function (?int $index): ?InvalidJsonInput {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InvalidJsonInput $data */
                $data = InvalidJsonInputModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
