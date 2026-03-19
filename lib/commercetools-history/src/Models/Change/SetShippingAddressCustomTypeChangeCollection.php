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
 * @extends ChangeCollection<SetShippingAddressCustomTypeChange>
 * @method SetShippingAddressCustomTypeChange current()
 * @method SetShippingAddressCustomTypeChange end()
 * @method SetShippingAddressCustomTypeChange at($offset)
 */
class SetShippingAddressCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetShippingAddressCustomTypeChange $value
     * @psalm-param SetShippingAddressCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShippingAddressCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShippingAddressCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShippingAddressCustomTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetShippingAddressCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetShippingAddressCustomTypeChange $data */
                $data = SetShippingAddressCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
