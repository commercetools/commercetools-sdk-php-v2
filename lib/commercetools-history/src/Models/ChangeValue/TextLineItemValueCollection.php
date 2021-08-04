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
 * @extends MapperSequence<TextLineItemValue>
 * @method TextLineItemValue current()
 * @method TextLineItemValue end()
 * @method TextLineItemValue at($offset)
 */
class TextLineItemValueCollection extends MapperSequence
{
    /**
     * @psalm-assert TextLineItemValue $value
     * @psalm-param TextLineItemValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TextLineItemValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof TextLineItemValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TextLineItemValue
     */
    protected function mapper()
    {
        return function (?int $index): ?TextLineItemValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TextLineItemValue $data */
                $data = TextLineItemValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
