<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<AttributeGroup>
 * @method AttributeGroup current()
 * @method AttributeGroup end()
 * @method AttributeGroup at($offset)
 */
class AttributeGroupCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert AttributeGroup $value
     * @psalm-param AttributeGroup|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeGroupCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeGroup) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeGroup
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeGroup {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeGroup $data */
                $data = AttributeGroupModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
