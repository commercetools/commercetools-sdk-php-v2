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
 * @extends ChangeCollection<SetBillingAddressCustomTypeChange>
 * @method SetBillingAddressCustomTypeChange current()
 * @method SetBillingAddressCustomTypeChange end()
 * @method SetBillingAddressCustomTypeChange at($offset)
 */
class SetBillingAddressCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetBillingAddressCustomTypeChange $value
     * @psalm-param SetBillingAddressCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetBillingAddressCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetBillingAddressCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetBillingAddressCustomTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetBillingAddressCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetBillingAddressCustomTypeChange $data */
                $data = SetBillingAddressCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
