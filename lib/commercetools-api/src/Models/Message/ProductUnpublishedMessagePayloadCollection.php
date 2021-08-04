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
 * @extends MessagePayloadCollection<ProductUnpublishedMessagePayload>
 * @method ProductUnpublishedMessagePayload current()
 * @method ProductUnpublishedMessagePayload at($offset)
 */
class ProductUnpublishedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductUnpublishedMessagePayload $value
     * @psalm-param ProductUnpublishedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductUnpublishedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductUnpublishedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductUnpublishedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductUnpublishedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductUnpublishedMessagePayload $data */
                $data = ProductUnpublishedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
