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
 * @extends ChangeCollection<SetCustomerNumberChange>
 * @method SetCustomerNumberChange current()
 * @method SetCustomerNumberChange end()
 * @method SetCustomerNumberChange at($offset)
 */
class SetCustomerNumberChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCustomerNumberChange $value
     * @psalm-param SetCustomerNumberChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomerNumberChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomerNumberChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomerNumberChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetCustomerNumberChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCustomerNumberChange $data */
                $data = SetCustomerNumberChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
