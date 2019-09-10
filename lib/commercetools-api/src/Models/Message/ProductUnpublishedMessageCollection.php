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
 * @extends MapperSequence<ProductUnpublishedMessage>
 *
 * @method ProductUnpublishedMessage current()
 * @method ProductUnpublishedMessage at($offset)
 */
class ProductUnpublishedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductUnpublishedMessage $value
     * @psalm-param ProductUnpublishedMessage|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductUnpublishedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductUnpublishedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductUnpublishedMessage
     */
    protected function mapper()
    {
        return function (int $index): ?ProductUnpublishedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductUnpublishedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
