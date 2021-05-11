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
 * @extends MapperSequence<Attributes>
 * @method Attributes current()
 * @method Attributes at($offset)
 */
class AttributesCollection extends MapperSequence
{
    /**
     * @psalm-assert Attributes $value
     * @psalm-param Attributes|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributesCollection
     */
    public function add($value)
    {
        if (!$value instanceof Attributes) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Attributes
     */
    protected function mapper()
    {
        return function (int $index): ?Attributes {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Attributes $data */
                $data = AttributesModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
