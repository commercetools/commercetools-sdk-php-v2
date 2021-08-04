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
 * @extends ChangeCollection<SetTextLineItemCustomFieldChange>
 * @method SetTextLineItemCustomFieldChange current()
 * @method SetTextLineItemCustomFieldChange at($offset)
 */
class SetTextLineItemCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetTextLineItemCustomFieldChange $value
     * @psalm-param SetTextLineItemCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTextLineItemCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTextLineItemCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTextLineItemCustomFieldChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetTextLineItemCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetTextLineItemCustomFieldChange $data */
                $data = SetTextLineItemCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
