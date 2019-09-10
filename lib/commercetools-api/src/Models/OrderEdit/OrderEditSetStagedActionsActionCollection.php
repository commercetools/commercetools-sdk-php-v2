<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderEditSetStagedActionsAction>
 *
 * @method OrderEditSetStagedActionsAction current()
 * @method OrderEditSetStagedActionsAction at($offset)
 */
class OrderEditSetStagedActionsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderEditSetStagedActionsAction $value
     * @psalm-param OrderEditSetStagedActionsAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return OrderEditSetStagedActionsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditSetStagedActionsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditSetStagedActionsAction
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditSetStagedActionsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderEditSetStagedActionsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
