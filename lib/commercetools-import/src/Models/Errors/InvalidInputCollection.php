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
 * @extends ErrorObjectCollection<InvalidInput>
 * @method InvalidInput current()
 * @method InvalidInput at($offset)
 */
class InvalidInputCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert InvalidInput $value
     * @psalm-param InvalidInput|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InvalidInputCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidInput) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidInput
     */
    protected function mapper()
    {
        return function (?int $index): ?InvalidInput {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InvalidInput $data */
                $data = InvalidInputModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
