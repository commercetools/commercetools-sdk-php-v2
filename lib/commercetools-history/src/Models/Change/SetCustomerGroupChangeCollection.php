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
 * @extends ChangeCollection<SetCustomerGroupChange>
 * @method SetCustomerGroupChange current()
 * @method SetCustomerGroupChange end()
 * @method SetCustomerGroupChange at($offset)
 */
class SetCustomerGroupChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCustomerGroupChange $value
     * @psalm-param SetCustomerGroupChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomerGroupChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomerGroupChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomerGroupChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetCustomerGroupChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCustomerGroupChange $data */
                $data = SetCustomerGroupChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
