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
 * @extends ChangeCollection<SetDeliveryAddressCustomFieldChange>
 * @method SetDeliveryAddressCustomFieldChange current()
 * @method SetDeliveryAddressCustomFieldChange end()
 * @method SetDeliveryAddressCustomFieldChange at($offset)
 */
class SetDeliveryAddressCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetDeliveryAddressCustomFieldChange $value
     * @psalm-param SetDeliveryAddressCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDeliveryAddressCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDeliveryAddressCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDeliveryAddressCustomFieldChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetDeliveryAddressCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetDeliveryAddressCustomFieldChange $data */
                $data = SetDeliveryAddressCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
