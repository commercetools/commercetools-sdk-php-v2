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
 * @extends TypeUpdateActionCollection<TypeRemoveLocalizedEnumValuesAction>
 * @method TypeRemoveLocalizedEnumValuesAction current()
 * @method TypeRemoveLocalizedEnumValuesAction end()
 * @method TypeRemoveLocalizedEnumValuesAction at($offset)
 */
class TypeRemoveLocalizedEnumValuesActionCollection extends TypeUpdateActionCollection
{
    /**
     * @psalm-assert TypeRemoveLocalizedEnumValuesAction $value
     * @psalm-param TypeRemoveLocalizedEnumValuesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeRemoveLocalizedEnumValuesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeRemoveLocalizedEnumValuesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeRemoveLocalizedEnumValuesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?TypeRemoveLocalizedEnumValuesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeRemoveLocalizedEnumValuesAction $data */
                $data = TypeRemoveLocalizedEnumValuesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
