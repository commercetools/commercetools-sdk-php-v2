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
 * @extends MapperSequence<RemoveVariantAction>
 * @method RemoveVariantAction current()
 * @method RemoveVariantAction at($offset)
 */
class RemoveVariantActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveVariantAction $value
     * @psalm-param RemoveVariantAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveVariantActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveVariantAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveVariantAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveVariantAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveVariantActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
