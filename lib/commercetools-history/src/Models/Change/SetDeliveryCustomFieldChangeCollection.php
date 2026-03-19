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
 * @extends ChangeCollection<SetDeliveryCustomFieldChange>
 * @method SetDeliveryCustomFieldChange current()
 * @method SetDeliveryCustomFieldChange end()
 * @method SetDeliveryCustomFieldChange at($offset)
 */
class SetDeliveryCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetDeliveryCustomFieldChange $value
     * @psalm-param SetDeliveryCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDeliveryCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDeliveryCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDeliveryCustomFieldChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetDeliveryCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetDeliveryCustomFieldChange $data */
                $data = SetDeliveryCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
