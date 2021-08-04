<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<CategoryCreatedMessage>
 * @method CategoryCreatedMessage current()
 * @method CategoryCreatedMessage at($offset)
 */
class CategoryCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CategoryCreatedMessage $value
     * @psalm-param CategoryCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CategoryCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategoryCreatedMessage $data */
                $data = CategoryCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
