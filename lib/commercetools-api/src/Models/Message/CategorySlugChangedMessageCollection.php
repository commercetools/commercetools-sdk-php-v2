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
 * @extends MessageCollection<CategorySlugChangedMessage>
 * @method CategorySlugChangedMessage current()
 * @method CategorySlugChangedMessage end()
 * @method CategorySlugChangedMessage at($offset)
 */
class CategorySlugChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CategorySlugChangedMessage $value
     * @psalm-param CategorySlugChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategorySlugChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategorySlugChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategorySlugChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?CategorySlugChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategorySlugChangedMessage $data */
                $data = CategorySlugChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
