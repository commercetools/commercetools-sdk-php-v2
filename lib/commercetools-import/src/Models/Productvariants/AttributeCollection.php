<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of Attribute
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method Attribute current()
 * @method Attribute end()
 * @method Attribute at($offset)
 */
class AttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof Attribute) {
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
        return function (?int $index): ?Attribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = AttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
