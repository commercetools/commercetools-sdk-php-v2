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
 * @extends MapperSequence<SetOrderLineItemCustomFieldChange>
 * @method SetOrderLineItemCustomFieldChange current()
 * @method SetOrderLineItemCustomFieldChange at($offset)
 */
class SetOrderLineItemCustomFieldChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetOrderLineItemCustomFieldChange $value
     * @psalm-param SetOrderLineItemCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetOrderLineItemCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetOrderLineItemCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetOrderLineItemCustomFieldChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetOrderLineItemCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetOrderLineItemCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
