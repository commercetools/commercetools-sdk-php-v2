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
 * @extends MapperSequence<OutOfStockError>
 * @method OutOfStockError current()
 * @method OutOfStockError at($offset)
 */
class OutOfStockErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert OutOfStockError $value
     * @psalm-param OutOfStockError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OutOfStockErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof OutOfStockError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OutOfStockError
     */
    protected function mapper()
    {
        return function (int $index): ?OutOfStockError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OutOfStockErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
