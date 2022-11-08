<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AttributeGroupUpdate>
 * @method AttributeGroupUpdate current()
 * @method AttributeGroupUpdate end()
 * @method AttributeGroupUpdate at($offset)
 */
class AttributeGroupUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeGroupUpdate $value
     * @psalm-param AttributeGroupUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeGroupUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeGroupUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeGroupUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeGroupUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeGroupUpdate $data */
                $data = AttributeGroupUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
