<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TypeChangeLabelAction>
 * @method TypeChangeLabelAction current()
 * @method TypeChangeLabelAction at($offset)
 */
class TypeChangeLabelActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeChangeLabelAction $value
     * @psalm-param TypeChangeLabelAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeChangeLabelActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeChangeLabelAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeChangeLabelAction
     */
    protected function mapper()
    {
        return function (int $index): ?TypeChangeLabelAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypeChangeLabelActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
