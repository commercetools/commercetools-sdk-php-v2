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
 * @extends MessagePayloadCollection<ProductTailoringPublishedMessagePayload>
 * @method ProductTailoringPublishedMessagePayload current()
 * @method ProductTailoringPublishedMessagePayload end()
 * @method ProductTailoringPublishedMessagePayload at($offset)
 */
class ProductTailoringPublishedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductTailoringPublishedMessagePayload $value
     * @psalm-param ProductTailoringPublishedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringPublishedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringPublishedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringPublishedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringPublishedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringPublishedMessagePayload $data */
                $data = ProductTailoringPublishedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
