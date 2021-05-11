<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Type\TypeUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends TypeUpdateActionCollection<TypeChangeNameAction>
 * @method TypeChangeNameAction current()
 * @method TypeChangeNameAction at($offset)
 */
class TypeChangeNameActionCollection extends TypeUpdateActionCollection
{
    /**
     * @psalm-assert TypeChangeNameAction $value
     * @psalm-param TypeChangeNameAction|stdClass $value
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
                /** @var TypeChangeNameAction $data */
                $data = TypeChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
