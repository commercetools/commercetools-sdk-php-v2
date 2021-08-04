<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TypeUpdate>
 * @method TypeUpdate current()
 * @method TypeUpdate at($offset)
 */
class TypeUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert TypeUpdate $value
     * @psalm-param TypeUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?TypeUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeUpdate $data */
                $data = TypeUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
