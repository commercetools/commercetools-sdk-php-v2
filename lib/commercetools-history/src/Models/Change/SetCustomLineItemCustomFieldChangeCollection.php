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
 * @extends ChangeCollection<SetCustomLineItemCustomFieldChange>
 * @method SetCustomLineItemCustomFieldChange current()
 * @method SetCustomLineItemCustomFieldChange at($offset)
 */
class SetCustomLineItemCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCustomLineItemCustomFieldChange $value
     * @psalm-param SetCustomLineItemCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemCustomFieldChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomLineItemCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCustomLineItemCustomFieldChange $data */
                $data = SetCustomLineItemCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
