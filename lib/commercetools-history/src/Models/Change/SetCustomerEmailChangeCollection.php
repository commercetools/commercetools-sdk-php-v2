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
 * @extends ChangeCollection<SetCustomerEmailChange>
 * @method SetCustomerEmailChange current()
 * @method SetCustomerEmailChange end()
 * @method SetCustomerEmailChange at($offset)
 */
class SetCustomerEmailChangeCollection extends ChangeCollection
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
        return function (?int $index): ?SetCustomerEmailChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCustomerEmailChange $data */
                $data = SetCustomerEmailChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
