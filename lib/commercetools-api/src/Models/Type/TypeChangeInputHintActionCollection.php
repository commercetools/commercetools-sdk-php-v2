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
 * @extends MapperSequence<TypeChangeInputHintAction>
 * @method TypeChangeInputHintAction current()
 * @method TypeChangeInputHintAction at($offset)
 */
class TypeChangeInputHintActionCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeChangeInputHintAction $value
     * @psalm-param TypeChangeInputHintAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeChangeInputHintActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeChangeInputHintAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeChangeInputHintAction
     */
    protected function mapper()
    {
        return function (int $index): ?TypeChangeInputHintAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TypeChangeInputHintActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
