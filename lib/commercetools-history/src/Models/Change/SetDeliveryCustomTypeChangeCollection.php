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
 * @extends ChangeCollection<SetDeliveryCustomTypeChange>
 * @method SetDeliveryCustomTypeChange current()
 * @method SetDeliveryCustomTypeChange end()
 * @method SetDeliveryCustomTypeChange at($offset)
 */
class SetDeliveryCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetDeliveryCustomTypeChange $value
     * @psalm-param SetDeliveryCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDeliveryCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDeliveryCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDeliveryCustomTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetDeliveryCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetDeliveryCustomTypeChange $data */
                $data = SetDeliveryCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
