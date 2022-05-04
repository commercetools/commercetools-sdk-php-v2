<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AttributeValue>
 * @method AttributeValue current()
 * @method AttributeValue end()
 * @method AttributeValue at($offset)
 */
class AttributeValueCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeValue $value
     * @psalm-param AttributeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeValue $data */
                $data = AttributeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
