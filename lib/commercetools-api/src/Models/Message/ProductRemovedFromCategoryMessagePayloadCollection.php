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
 * @extends MessagePayloadCollection<ProductRemovedFromCategoryMessagePayload>
 * @method ProductRemovedFromCategoryMessagePayload current()
 * @method ProductRemovedFromCategoryMessagePayload at($offset)
 */
class ProductRemovedFromCategoryMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductRemovedFromCategoryMessagePayload $value
     * @psalm-param ProductRemovedFromCategoryMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductRemovedFromCategoryMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductRemovedFromCategoryMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRemovedFromCategoryMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductRemovedFromCategoryMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductRemovedFromCategoryMessagePayload $data */
                $data = ProductRemovedFromCategoryMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
