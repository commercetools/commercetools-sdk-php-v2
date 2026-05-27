<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<LineItemQuantityBelowLimitError>
 * @method LineItemQuantityBelowLimitError current()
 * @method LineItemQuantityBelowLimitError end()
 * @method LineItemQuantityBelowLimitError at($offset)
 */
class LineItemQuantityBelowLimitErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert LineItemQuantityBelowLimitError $value
     * @psalm-param LineItemQuantityBelowLimitError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LineItemQuantityBelowLimitErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof LineItemQuantityBelowLimitError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LineItemQuantityBelowLimitError
     */
    protected function mapper()
    {
        return function (?int $index): ?LineItemQuantityBelowLimitError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LineItemQuantityBelowLimitError $data */
                $data = LineItemQuantityBelowLimitErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
