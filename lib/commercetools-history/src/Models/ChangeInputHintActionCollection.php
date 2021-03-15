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
 * @extends MapperSequence<ChangeInputHintAction>
 * @method ChangeInputHintAction current()
 * @method ChangeInputHintAction at($offset)
 */
class ChangeInputHintActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeInputHintAction $value
     * @psalm-param ChangeInputHintAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeInputHintActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeInputHintAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeInputHintAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeInputHintAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeInputHintActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
