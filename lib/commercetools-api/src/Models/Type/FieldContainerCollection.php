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
 * @extends MapperSequence<FieldContainer>
 *
 * @method FieldContainer current()
 * @method FieldContainer at($offset)
 */
class FieldContainerCollection extends MapperSequence
{
    /**
     * @psalm-assert FieldContainer $value
     * @psalm-param FieldContainer|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return FieldContainerCollection
     */
    public function add($value)
    {
        if (!$value instanceof FieldContainer) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?FieldContainer
     */
    protected function mapper()
    {
        return function (int $index): ?FieldContainer {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = FieldContainerModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
