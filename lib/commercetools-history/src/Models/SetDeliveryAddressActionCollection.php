<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetDeliveryAddressAction>
 * @method SetDeliveryAddressAction current()
 * @method SetDeliveryAddressAction at($offset)
 */
class SetDeliveryAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetDeliveryAddressAction $value
     * @psalm-param SetDeliveryAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDeliveryAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDeliveryAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDeliveryAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetDeliveryAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetDeliveryAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
