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
 * @extends MapperSequence<CategorySlugChangedMessagePayload>
 *
 * @method CategorySlugChangedMessagePayload current()
 * @method CategorySlugChangedMessagePayload at($offset)
 */
class CategorySlugChangedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert CategorySlugChangedMessagePayload $value
     * @psalm-param CategorySlugChangedMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?CategorySlugChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CategorySlugChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
