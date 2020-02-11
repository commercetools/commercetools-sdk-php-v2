<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CategoryCreatedMessagePayload>
 * @method CategoryCreatedMessagePayload current()
 * @method CategoryCreatedMessagePayload at($offset)
 */
class CategoryCreatedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert CategoryCreatedMessagePayload $value
     * @psalm-param CategoryCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?CategoryCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategoryCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
