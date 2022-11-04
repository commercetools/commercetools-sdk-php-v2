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
 * @extends AttributeGroupUpdateActionCollection<AttributeGroupSetDescriptionAction>
 * @method AttributeGroupSetDescriptionAction current()
 * @method AttributeGroupSetDescriptionAction end()
 * @method AttributeGroupSetDescriptionAction at($offset)
 */
class AttributeGroupSetDescriptionActionCollection extends AttributeGroupUpdateActionCollection
{
    /**
     * @psalm-assert AttributeGroupSetDescriptionAction $value
     * @psalm-param AttributeGroupSetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeGroupSetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeGroupSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeGroupSetDescriptionAction
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeGroupSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeGroupSetDescriptionAction $data */
                $data = AttributeGroupSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
