<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<CategoryCreatedMessagePayload>
 * @method CategoryCreatedMessagePayload current()
 * @method CategoryCreatedMessagePayload end()
 * @method CategoryCreatedMessagePayload at($offset)
 */
class CategoryCreatedMessagePayloadCollection extends MessagePayloadCollection
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
        return function (?int $index): ?CategoryCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategoryCreatedMessagePayload $data */
                $data = CategoryCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
