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
 * @extends ChangeCollection<SetItemShippingAddressCustomFieldChange>
 * @method SetItemShippingAddressCustomFieldChange current()
 * @method SetItemShippingAddressCustomFieldChange end()
 * @method SetItemShippingAddressCustomFieldChange at($offset)
 */
class SetItemShippingAddressCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetItemShippingAddressCustomFieldChange $value
     * @psalm-param SetItemShippingAddressCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetItemShippingAddressCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetItemShippingAddressCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetItemShippingAddressCustomFieldChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetItemShippingAddressCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetItemShippingAddressCustomFieldChange $data */
                $data = SetItemShippingAddressCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
