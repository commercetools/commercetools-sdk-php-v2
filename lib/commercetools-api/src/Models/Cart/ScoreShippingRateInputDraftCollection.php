<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Cart\ShippingRateInputDraftCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ShippingRateInputDraftCollection<ScoreShippingRateInputDraft>
 * @method ScoreShippingRateInputDraft current()
 * @method ScoreShippingRateInputDraft at($offset)
 */
class ScoreShippingRateInputDraftCollection extends ShippingRateInputDraftCollection
{
    /**
     * @psalm-assert ScoreShippingRateInputDraft $value
     * @psalm-param ScoreShippingRateInputDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ScoreShippingRateInputDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ScoreShippingRateInputDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ScoreShippingRateInputDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ScoreShippingRateInputDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ScoreShippingRateInputDraft $data */
                $data = ScoreShippingRateInputDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
