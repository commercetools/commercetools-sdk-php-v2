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
 * @extends MapperSequence<AddVariantAction>
 * @method AddVariantAction current()
 * @method AddVariantAction at($offset)
 */
class AddVariantActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddVariantAction $value
     * @psalm-param AddVariantAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddVariantActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddVariantAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddVariantAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddVariantAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddVariantActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
