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
 * @extends TypeUpdateActionCollection<TypeChangeKeyAction>
 * @method TypeChangeKeyAction current()
 * @method TypeChangeKeyAction at($offset)
 */
class TypeChangeKeyActionCollection extends TypeUpdateActionCollection
{
    /**
     * @psalm-assert TypeChangeKeyAction $value
     * @psalm-param TypeChangeKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeChangeKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeChangeKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeChangeKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?TypeChangeKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeChangeKeyAction $data */
                $data = TypeChangeKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
