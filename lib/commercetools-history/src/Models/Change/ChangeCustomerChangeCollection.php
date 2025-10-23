<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<ChangeCustomerChange>
 * @method ChangeCustomerChange current()
 * @method ChangeCustomerChange end()
 * @method ChangeCustomerChange at($offset)
 */
class ChangeCustomerChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeCustomerChange $value
     * @psalm-param ChangeCustomerChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeCustomerChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeCustomerChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeCustomerChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeCustomerChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeCustomerChange $data */
                $data = ChangeCustomerChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
