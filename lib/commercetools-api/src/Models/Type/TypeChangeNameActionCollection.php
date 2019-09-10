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
 * @extends MapperSequence<TypeChangeNameAction>
 *
 * @method TypeChangeNameAction current()
 * @method TypeChangeNameAction at($offset)
 */
class TypeChangeNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeChangeNameAction $value
     * @psalm-param TypeChangeNameAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return TypeChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeChangeNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?TypeChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypeChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
