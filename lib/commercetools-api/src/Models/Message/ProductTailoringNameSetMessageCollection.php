<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<ProductTailoringNameSetMessage>
 * @method ProductTailoringNameSetMessage current()
 * @method ProductTailoringNameSetMessage end()
 * @method ProductTailoringNameSetMessage at($offset)
 */
class ProductTailoringNameSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductTailoringNameSetMessage $value
     * @psalm-param ProductTailoringNameSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringNameSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringNameSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringNameSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringNameSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringNameSetMessage $data */
                $data = ProductTailoringNameSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
