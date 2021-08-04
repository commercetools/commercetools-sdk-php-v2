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
 * @extends TypeUpdateActionCollection<TypeAddEnumValueAction>
 * @method TypeAddEnumValueAction current()
 * @method TypeAddEnumValueAction at($offset)
 */
class TypeAddEnumValueActionCollection extends TypeUpdateActionCollection
{
    /**
     * @psalm-assert TypeAddEnumValueAction $value
     * @psalm-param TypeAddEnumValueAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeAddEnumValueActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeAddEnumValueAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeAddEnumValueAction
     */
    protected function mapper()
    {
        return function (?int $index): ?TypeAddEnumValueAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeAddEnumValueAction $data */
                $data = TypeAddEnumValueActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
