<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<SetOrderLineItemCustomFieldChange>
 * @method SetOrderLineItemCustomFieldChange current()
 * @method SetOrderLineItemCustomFieldChange end()
 * @method SetOrderLineItemCustomFieldChange at($offset)
 */
class SetOrderLineItemCustomFieldChangeCollection extends ChangeCollection
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
        return function (?int $index): ?SetOrderLineItemCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetOrderLineItemCustomFieldChange $data */
                $data = SetOrderLineItemCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
