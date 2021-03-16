<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetTextLineItemDescriptionChange>
 * @method SetTextLineItemDescriptionChange current()
 * @method SetTextLineItemDescriptionChange at($offset)
 */
class SetTextLineItemDescriptionChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetTextLineItemDescriptionChange $value
     * @psalm-param SetTextLineItemDescriptionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTextLineItemDescriptionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTextLineItemDescriptionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTextLineItemDescriptionChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetTextLineItemDescriptionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetTextLineItemDescriptionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
