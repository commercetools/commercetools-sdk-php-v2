<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Price>
 * @method Price current()
 * @method Price at($offset)
 */
class PriceCollection extends MapperSequence
{
    /**
     * @psalm-assert Price $value
     * @psalm-param Price|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PriceCollection
     */
    public function add($value)
    {
        if (!$value instanceof Price) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Price
     */
    protected function mapper()
    {
        return function (?int $index): ?Price {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Price $data */
                $data = PriceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
