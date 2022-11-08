<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<AttributeGroupReference>
 * @method AttributeGroupReference current()
 * @method AttributeGroupReference end()
 * @method AttributeGroupReference at($offset)
 */
class AttributeGroupReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert AttributeGroupReference $value
     * @psalm-param AttributeGroupReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeGroupReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeGroupReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeGroupReference
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeGroupReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeGroupReference $data */
                $data = AttributeGroupReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
