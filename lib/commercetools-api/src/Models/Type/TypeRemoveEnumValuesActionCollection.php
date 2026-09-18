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
 * @extends TypeUpdateActionCollection<TypeRemoveEnumValuesAction>
 * @method TypeRemoveEnumValuesAction current()
 * @method TypeRemoveEnumValuesAction end()
 * @method TypeRemoveEnumValuesAction at($offset)
 */
class TypeRemoveEnumValuesActionCollection extends TypeUpdateActionCollection
{
    /**
     * @psalm-assert TypeRemoveEnumValuesAction $value
     * @psalm-param TypeRemoveEnumValuesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeRemoveEnumValuesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeRemoveEnumValuesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeRemoveEnumValuesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?TypeRemoveEnumValuesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeRemoveEnumValuesAction $data */
                $data = TypeRemoveEnumValuesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
