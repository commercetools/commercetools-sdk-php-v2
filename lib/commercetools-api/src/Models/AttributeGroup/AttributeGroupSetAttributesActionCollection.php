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
 * @extends AttributeGroupUpdateActionCollection<AttributeGroupSetAttributesAction>
 * @method AttributeGroupSetAttributesAction current()
 * @method AttributeGroupSetAttributesAction end()
 * @method AttributeGroupSetAttributesAction at($offset)
 */
class AttributeGroupSetAttributesActionCollection extends AttributeGroupUpdateActionCollection
{
    /**
     * @psalm-assert AttributeGroupSetAttributesAction $value
     * @psalm-param AttributeGroupSetAttributesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeGroupSetAttributesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeGroupSetAttributesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeGroupSetAttributesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeGroupSetAttributesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeGroupSetAttributesAction $data */
                $data = AttributeGroupSetAttributesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
