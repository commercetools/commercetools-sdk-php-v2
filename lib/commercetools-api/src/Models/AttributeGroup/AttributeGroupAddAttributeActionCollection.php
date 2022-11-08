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
 * @extends AttributeGroupUpdateActionCollection<AttributeGroupAddAttributeAction>
 * @method AttributeGroupAddAttributeAction current()
 * @method AttributeGroupAddAttributeAction end()
 * @method AttributeGroupAddAttributeAction at($offset)
 */
class AttributeGroupAddAttributeActionCollection extends AttributeGroupUpdateActionCollection
{
    /**
     * @psalm-assert AttributeGroupAddAttributeAction $value
     * @psalm-param AttributeGroupAddAttributeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeGroupAddAttributeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeGroupAddAttributeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeGroupAddAttributeAction
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeGroupAddAttributeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeGroupAddAttributeAction $data */
                $data = AttributeGroupAddAttributeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
