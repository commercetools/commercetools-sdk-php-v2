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
 * @extends MapperSequence<CustomFieldsDraft>
 *
 * @method CustomFieldsDraft current()
 * @method CustomFieldsDraft at($offset)
 */
class CustomFieldsDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomFieldsDraft $value
     * @psalm-param CustomFieldsDraft|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomFieldsDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldsDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldsDraft
     */
    protected function mapper()
    {
        return function (int $index): ?CustomFieldsDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomFieldsDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
