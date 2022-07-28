<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<EmbeddedPrice>
 * @method EmbeddedPrice current()
 * @method EmbeddedPrice end()
 * @method EmbeddedPrice at($offset)
 */
class EmbeddedPriceCollection extends MapperSequence
{
    /**
     * @psalm-assert EmbeddedPrice $value
     * @psalm-param EmbeddedPrice|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return EmbeddedPriceCollection
     */
    public function add($value)
    {
        if (!$value instanceof EmbeddedPrice) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EmbeddedPrice
     */
    protected function mapper()
    {
        return function (?int $index): ?EmbeddedPrice {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var EmbeddedPrice $data */
                $data = EmbeddedPriceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
