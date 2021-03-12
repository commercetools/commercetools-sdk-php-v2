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
 * @extends MapperSequence<SetTextAction>
 * @method SetTextAction current()
 * @method SetTextAction at($offset)
 */
class SetTextActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetTextAction $value
     * @psalm-param SetTextAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTextActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTextAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTextAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetTextAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetTextActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
