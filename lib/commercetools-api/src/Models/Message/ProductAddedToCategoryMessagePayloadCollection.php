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
 * @extends MessagePayloadCollection<ProductAddedToCategoryMessagePayload>
 * @method ProductAddedToCategoryMessagePayload current()
 * @method ProductAddedToCategoryMessagePayload at($offset)
 */
class ProductAddedToCategoryMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductAddedToCategoryMessagePayload $value
     * @psalm-param ProductAddedToCategoryMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductAddedToCategoryMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductAddedToCategoryMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductAddedToCategoryMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductAddedToCategoryMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductAddedToCategoryMessagePayload $data */
                $data = ProductAddedToCategoryMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
