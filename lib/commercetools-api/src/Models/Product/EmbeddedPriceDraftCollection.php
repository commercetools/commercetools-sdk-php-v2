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
 * @extends MapperSequence<EmbeddedPriceDraft>
 * @method EmbeddedPriceDraft current()
 * @method EmbeddedPriceDraft end()
 * @method EmbeddedPriceDraft at($offset)
 */
class EmbeddedPriceDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert EmbeddedPriceDraft $value
     * @psalm-param EmbeddedPriceDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return EmbeddedPriceDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof EmbeddedPriceDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EmbeddedPriceDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?EmbeddedPriceDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var EmbeddedPriceDraft $data */
                $data = EmbeddedPriceDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
