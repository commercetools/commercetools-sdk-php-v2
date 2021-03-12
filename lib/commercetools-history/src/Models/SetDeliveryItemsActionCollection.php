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
 * @extends MapperSequence<SetDeliveryItemsAction>
 * @method SetDeliveryItemsAction current()
 * @method SetDeliveryItemsAction at($offset)
 */
class SetDeliveryItemsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetDeliveryItemsAction $value
     * @psalm-param SetDeliveryItemsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDeliveryItemsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDeliveryItemsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDeliveryItemsAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetDeliveryItemsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetDeliveryItemsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
