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
 * @extends ChangeCollection<SetShippingAddressCustomFieldChange>
 * @method SetShippingAddressCustomFieldChange current()
 * @method SetShippingAddressCustomFieldChange end()
 * @method SetShippingAddressCustomFieldChange at($offset)
 */
class SetShippingAddressCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetShippingAddressCustomFieldChange $value
     * @psalm-param SetShippingAddressCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShippingAddressCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShippingAddressCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShippingAddressCustomFieldChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetShippingAddressCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetShippingAddressCustomFieldChange $data */
                $data = SetShippingAddressCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
