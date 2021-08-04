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
 * @extends MapperSequence<SetCartClassificationShippingRateInputValue>
 * @method SetCartClassificationShippingRateInputValue current()
 * @method SetCartClassificationShippingRateInputValue end()
 * @method SetCartClassificationShippingRateInputValue at($offset)
 */
class SetCartClassificationShippingRateInputValueCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCartClassificationShippingRateInputValue $value
     * @psalm-param SetCartClassificationShippingRateInputValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCartClassificationShippingRateInputValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCartClassificationShippingRateInputValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCartClassificationShippingRateInputValue
     */
    protected function mapper()
    {
        return function (?int $index): ?SetCartClassificationShippingRateInputValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCartClassificationShippingRateInputValue $data */
                $data = SetCartClassificationShippingRateInputValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
