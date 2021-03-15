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
 * @extends MapperSequence<AddToCategoryAction>
 * @method AddToCategoryAction current()
 * @method AddToCategoryAction at($offset)
 */
class AddToCategoryActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddToCategoryAction $value
     * @psalm-param AddToCategoryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddToCategoryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddToCategoryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddToCategoryAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddToCategoryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddToCategoryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
