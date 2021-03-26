<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetCustomerEmailChange>
 * @method SetCustomerEmailChange current()
 * @method SetCustomerEmailChange at($offset)
 */
class SetCustomerEmailChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomerEmailChange $value
     * @psalm-param SetCustomerEmailChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomerEmailChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomerEmailChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomerEmailChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomerEmailChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomerEmailChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
