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
 * @extends MapperSequence<ProductUnpublishedMessagePayload>
 *
 * @method ProductUnpublishedMessagePayload current()
 * @method ProductUnpublishedMessagePayload at($offset)
 */
class ProductUnpublishedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductUnpublishedMessagePayload $value
     * @psalm-param ProductUnpublishedMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?ProductUnpublishedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductUnpublishedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
