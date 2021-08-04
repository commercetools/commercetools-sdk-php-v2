<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of AttributeType
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method AttributeType current()
 * @method AttributeType end()
 * @method AttributeType at($offset)
 */
class AttributeTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = AttributeTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
