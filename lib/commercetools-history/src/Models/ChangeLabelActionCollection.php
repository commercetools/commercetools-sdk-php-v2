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
 * @extends MapperSequence<ChangeLabelAction>
 * @method ChangeLabelAction current()
 * @method ChangeLabelAction at($offset)
 */
class ChangeLabelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeLabelAction $value
     * @psalm-param ChangeLabelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeLabelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeLabelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeLabelAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
