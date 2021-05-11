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
 * @extends ChangeCollection<SetCustomerChange>
 * @method SetCustomerChange current()
 * @method SetCustomerChange at($offset)
 */
class SetCustomerChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCustomerChange $value
     * @psalm-param SetCustomerChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomerChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomerChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomerChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomerChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCustomerChange $data */
                $data = SetCustomerChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
