<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetCartScoreShippingRateInputValue>
 * @method SetCartScoreShippingRateInputValue current()
 * @method SetCartScoreShippingRateInputValue at($offset)
 */
class SetCartScoreShippingRateInputValueCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCartScoreShippingRateInputValue $value
     * @psalm-param SetCartScoreShippingRateInputValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCartScoreShippingRateInputValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCartScoreShippingRateInputValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCartScoreShippingRateInputValue
     */
    protected function mapper()
    {
        return function (?int $index): ?SetCartScoreShippingRateInputValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCartScoreShippingRateInputValue $data */
                $data = SetCartScoreShippingRateInputValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
