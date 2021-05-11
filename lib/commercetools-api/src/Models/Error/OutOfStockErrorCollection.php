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
 * @extends ErrorObjectCollection<OutOfStockError>
 * @method OutOfStockError current()
 * @method OutOfStockError at($offset)
 */
class OutOfStockErrorCollection extends ErrorObjectCollection
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
                /** @var OutOfStockError $data */
                $data = OutOfStockErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
