<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\BusinessUnit\BusinessUnitCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BusinessUnitCollection<Division>
 * @method Division current()
 * @method Division end()
 * @method Division at($offset)
 */
class DivisionCollection extends BusinessUnitCollection
{
    /**
     * @psalm-assert Division $value
     * @psalm-param Division|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DivisionCollection
     */
    public function add($value)
    {
        if (!$value instanceof Division) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Division
     */
    protected function mapper()
    {
        return function (?int $index): ?Division {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Division $data */
                $data = DivisionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
