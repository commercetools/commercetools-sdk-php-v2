<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Producttypes\AttributeTypeCollection;
use stdClass;

/**
 * @extends AttributeTypeCollection<AttributeLocalizableTextType>
 * @method AttributeLocalizableTextType current()
 * @method AttributeLocalizableTextType end()
 * @method AttributeLocalizableTextType at($offset)
 */
class AttributeLocalizableTextTypeCollection extends AttributeTypeCollection
{
    /**
     * @psalm-assert AttributeLocalizableTextType $value
     * @psalm-param AttributeLocalizableTextType|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeLocalizableTextTypeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeLocalizableTextType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeLocalizableTextType
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeLocalizableTextType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeLocalizableTextType $data */
                $data = AttributeLocalizableTextTypeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
