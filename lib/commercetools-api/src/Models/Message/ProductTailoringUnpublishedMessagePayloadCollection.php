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
 * @extends MessagePayloadCollection<ProductTailoringUnpublishedMessagePayload>
 * @method ProductTailoringUnpublishedMessagePayload current()
 * @method ProductTailoringUnpublishedMessagePayload end()
 * @method ProductTailoringUnpublishedMessagePayload at($offset)
 */
class ProductTailoringUnpublishedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductTailoringUnpublishedMessagePayload $value
     * @psalm-param ProductTailoringUnpublishedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringUnpublishedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringUnpublishedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringUnpublishedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringUnpublishedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringUnpublishedMessagePayload $data */
                $data = ProductTailoringUnpublishedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
