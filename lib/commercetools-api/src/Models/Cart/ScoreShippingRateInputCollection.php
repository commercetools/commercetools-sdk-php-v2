<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Cart\ShippingRateInputCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ShippingRateInputCollection<ScoreShippingRateInput>
 * @method ScoreShippingRateInput current()
 * @method ScoreShippingRateInput end()
 * @method ScoreShippingRateInput at($offset)
 */
class ScoreShippingRateInputCollection extends ShippingRateInputCollection
{
    /**
     * @psalm-assert ScoreShippingRateInput $value
     * @psalm-param ScoreShippingRateInput|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ScoreShippingRateInputCollection
     */
    public function add($value)
    {
        if (!$value instanceof ScoreShippingRateInput) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ScoreShippingRateInput
     */
    protected function mapper()
    {
        return function (?int $index): ?ScoreShippingRateInput {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ScoreShippingRateInput $data */
                $data = ScoreShippingRateInputModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
