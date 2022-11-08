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
 * @extends AttributeGroupUpdateActionCollection<AttributeGroupRemoveAttributeAction>
 * @method AttributeGroupRemoveAttributeAction current()
 * @method AttributeGroupRemoveAttributeAction end()
 * @method AttributeGroupRemoveAttributeAction at($offset)
 */
class AttributeGroupRemoveAttributeActionCollection extends AttributeGroupUpdateActionCollection
{
    /**
     * @psalm-assert AttributeGroupRemoveAttributeAction $value
     * @psalm-param AttributeGroupRemoveAttributeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeGroupRemoveAttributeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeGroupRemoveAttributeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeGroupRemoveAttributeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeGroupRemoveAttributeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeGroupRemoveAttributeAction $data */
                $data = AttributeGroupRemoveAttributeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
