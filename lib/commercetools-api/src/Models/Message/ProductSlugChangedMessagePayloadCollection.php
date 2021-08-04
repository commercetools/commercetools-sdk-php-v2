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
 * @extends MessagePayloadCollection<ProductSlugChangedMessagePayload>
 * @method ProductSlugChangedMessagePayload current()
 * @method ProductSlugChangedMessagePayload at($offset)
 */
class ProductSlugChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductSlugChangedMessagePayload $value
     * @psalm-param ProductSlugChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSlugChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSlugChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSlugChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSlugChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSlugChangedMessagePayload $data */
                $data = ProductSlugChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
