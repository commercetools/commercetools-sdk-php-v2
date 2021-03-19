<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetTextLineItemCustomTypeChange>
 * @method SetTextLineItemCustomTypeChange current()
 * @method SetTextLineItemCustomTypeChange at($offset)
 */
class SetTextLineItemCustomTypeChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetTextLineItemCustomTypeChange $value
     * @psalm-param SetTextLineItemCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTextLineItemCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTextLineItemCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTextLineItemCustomTypeChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetTextLineItemCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetTextLineItemCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
