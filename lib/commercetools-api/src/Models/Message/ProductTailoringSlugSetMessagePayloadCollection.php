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
 * @extends MessagePayloadCollection<ProductTailoringSlugSetMessagePayload>
 * @method ProductTailoringSlugSetMessagePayload current()
 * @method ProductTailoringSlugSetMessagePayload end()
 * @method ProductTailoringSlugSetMessagePayload at($offset)
 */
class ProductTailoringSlugSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductTailoringSlugSetMessagePayload $value
     * @psalm-param ProductTailoringSlugSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSlugSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSlugSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSlugSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSlugSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSlugSetMessagePayload $data */
                $data = ProductTailoringSlugSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
