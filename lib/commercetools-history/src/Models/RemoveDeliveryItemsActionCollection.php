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
 * @extends MapperSequence<RemoveDeliveryItemsAction>
 * @method RemoveDeliveryItemsAction current()
 * @method RemoveDeliveryItemsAction at($offset)
 */
class RemoveDeliveryItemsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveDeliveryItemsAction $value
     * @psalm-param RemoveDeliveryItemsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveDeliveryItemsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveDeliveryItemsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveDeliveryItemsAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveDeliveryItemsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveDeliveryItemsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
