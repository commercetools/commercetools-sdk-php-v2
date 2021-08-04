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
 * @extends ErrorObjectCollection<InvalidOperationError>
 * @method InvalidOperationError current()
 * @method InvalidOperationError end()
 * @method InvalidOperationError at($offset)
 */
class InvalidOperationErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert InvalidOperationError $value
     * @psalm-param InvalidOperationError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InvalidOperationErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidOperationError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidOperationError
     */
    protected function mapper()
    {
        return function (?int $index): ?InvalidOperationError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InvalidOperationError $data */
                $data = InvalidOperationErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
