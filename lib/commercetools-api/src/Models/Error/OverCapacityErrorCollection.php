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
 * @extends ErrorObjectCollection<OverCapacityError>
 * @method OverCapacityError current()
 * @method OverCapacityError at($offset)
 */
class OverCapacityErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert OverCapacityError $value
     * @psalm-param OverCapacityError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OverCapacityErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof OverCapacityError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OverCapacityError
     */
    protected function mapper()
    {
        return function (int $index): ?OverCapacityError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OverCapacityError $data */
                $data = OverCapacityErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
