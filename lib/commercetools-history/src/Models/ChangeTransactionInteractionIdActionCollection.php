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
 * @extends MapperSequence<ChangeTransactionInteractionIdAction>
 * @method ChangeTransactionInteractionIdAction current()
 * @method ChangeTransactionInteractionIdAction at($offset)
 */
class ChangeTransactionInteractionIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTransactionInteractionIdAction $value
     * @psalm-param ChangeTransactionInteractionIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTransactionInteractionIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTransactionInteractionIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTransactionInteractionIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTransactionInteractionIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTransactionInteractionIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
