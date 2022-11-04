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
 * @extends MapperSequence<AttributeReference>
 * @method AttributeReference current()
 * @method AttributeReference end()
 * @method AttributeReference at($offset)
 */
class AttributeReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeReference $value
     * @psalm-param AttributeReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeReference
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeReference $data */
                $data = AttributeReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
