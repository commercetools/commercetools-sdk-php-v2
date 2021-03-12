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
 * @extends MapperSequence<ChangeOrderHintAction>
 * @method ChangeOrderHintAction current()
 * @method ChangeOrderHintAction at($offset)
 */
class ChangeOrderHintActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeOrderHintAction $value
     * @psalm-param ChangeOrderHintAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeOrderHintActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeOrderHintAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeOrderHintAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeOrderHintAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeOrderHintActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
