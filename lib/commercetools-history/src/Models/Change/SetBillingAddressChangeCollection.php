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
 * @extends ChangeCollection<SetBillingAddressChange>
 * @method SetBillingAddressChange current()
 * @method SetBillingAddressChange at($offset)
 */
class SetBillingAddressChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetBillingAddressChange $value
     * @psalm-param SetBillingAddressChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetBillingAddressChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetBillingAddressChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetBillingAddressChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetBillingAddressChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetBillingAddressChange $data */
                $data = SetBillingAddressChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
