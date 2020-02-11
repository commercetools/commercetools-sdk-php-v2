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
 * @extends MapperSequence<ProductPublishedMessagePayload>
 * @method ProductPublishedMessagePayload current()
 * @method ProductPublishedMessagePayload at($offset)
 */
class ProductPublishedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductPublishedMessagePayload $value
     * @psalm-param ProductPublishedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductPublishedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductPublishedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductPublishedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?ProductPublishedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductPublishedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
