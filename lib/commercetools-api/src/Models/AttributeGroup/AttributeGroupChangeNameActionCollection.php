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
 * @extends AttributeGroupUpdateActionCollection<AttributeGroupChangeNameAction>
 * @method AttributeGroupChangeNameAction current()
 * @method AttributeGroupChangeNameAction end()
 * @method AttributeGroupChangeNameAction at($offset)
 */
class AttributeGroupChangeNameActionCollection extends AttributeGroupUpdateActionCollection
{
    /**
     * @psalm-assert AttributeGroupChangeNameAction $value
     * @psalm-param AttributeGroupChangeNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeGroupChangeNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeGroupChangeNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeGroupChangeNameAction
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeGroupChangeNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeGroupChangeNameAction $data */
                $data = AttributeGroupChangeNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
