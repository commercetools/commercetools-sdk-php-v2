<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AttributeCount>
 * @method AttributeCount current()
 * @method AttributeCount end()
 * @method AttributeCount at($offset)
 */
class AttributeCountCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeCount $value
     * @psalm-param AttributeCount|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeCountCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeCount) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeCount
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeCount {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeCount $data */
                $data = AttributeCountModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
