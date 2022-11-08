<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Api\Models\AttributeGroup\AttributeGroupUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends AttributeGroupUpdateActionCollection<AttributeGroupSetKeyAction>
 * @method AttributeGroupSetKeyAction current()
 * @method AttributeGroupSetKeyAction end()
 * @method AttributeGroupSetKeyAction at($offset)
 */
class AttributeGroupSetKeyActionCollection extends AttributeGroupUpdateActionCollection
{
    /**
     * @psalm-assert AttributeGroupSetKeyAction $value
     * @psalm-param AttributeGroupSetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeGroupSetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeGroupSetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeGroupSetKeyAction
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeGroupSetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeGroupSetKeyAction $data */
                $data = AttributeGroupSetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
