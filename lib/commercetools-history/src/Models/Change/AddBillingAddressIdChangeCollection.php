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
 * @extends ChangeCollection<AddBillingAddressIdChange>
 * @method AddBillingAddressIdChange current()
 * @method AddBillingAddressIdChange at($offset)
 */
class AddBillingAddressIdChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddBillingAddressIdChange $value
     * @psalm-param AddBillingAddressIdChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddBillingAddressIdChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddBillingAddressIdChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddBillingAddressIdChange
     */
    protected function mapper()
    {
        return function (?int $index): ?AddBillingAddressIdChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddBillingAddressIdChange $data */
                $data = AddBillingAddressIdChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
