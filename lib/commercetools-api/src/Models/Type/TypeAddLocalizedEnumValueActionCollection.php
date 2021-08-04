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
 * @extends TypeUpdateActionCollection<TypeAddLocalizedEnumValueAction>
 * @method TypeAddLocalizedEnumValueAction current()
 * @method TypeAddLocalizedEnumValueAction end()
 * @method TypeAddLocalizedEnumValueAction at($offset)
 */
class TypeAddLocalizedEnumValueActionCollection extends TypeUpdateActionCollection
{
    /**
     * @psalm-assert TypeAddLocalizedEnumValueAction $value
     * @psalm-param TypeAddLocalizedEnumValueAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeAddLocalizedEnumValueActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeAddLocalizedEnumValueAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeAddLocalizedEnumValueAction
     */
    protected function mapper()
    {
        return function (?int $index): ?TypeAddLocalizedEnumValueAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeAddLocalizedEnumValueAction $data */
                $data = TypeAddLocalizedEnumValueActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
