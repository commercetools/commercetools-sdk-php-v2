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
 * @extends MessagePayloadCollection<CategorySlugChangedMessagePayload>
 * @method CategorySlugChangedMessagePayload current()
 * @method CategorySlugChangedMessagePayload end()
 * @method CategorySlugChangedMessagePayload at($offset)
 */
class CategorySlugChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert CategorySlugChangedMessagePayload $value
     * @psalm-param CategorySlugChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategorySlugChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySlugChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySlugChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CategorySlugChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySlugChangedMessagePayload $data */
                $data = CategorySlugChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
