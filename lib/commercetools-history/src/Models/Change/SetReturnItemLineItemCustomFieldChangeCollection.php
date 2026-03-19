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
 * @extends ChangeCollection<SetReturnItemLineItemCustomFieldChange>
 * @method SetReturnItemLineItemCustomFieldChange current()
 * @method SetReturnItemLineItemCustomFieldChange end()
 * @method SetReturnItemLineItemCustomFieldChange at($offset)
 */
class SetReturnItemLineItemCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetReturnItemLineItemCustomFieldChange $value
     * @psalm-param SetReturnItemLineItemCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetReturnItemLineItemCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetReturnItemLineItemCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetReturnItemLineItemCustomFieldChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetReturnItemLineItemCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetReturnItemLineItemCustomFieldChange $data */
                $data = SetReturnItemLineItemCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
