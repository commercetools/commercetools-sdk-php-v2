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
 * @extends ChangeCollection<SetShippingCustomFieldChange>
 * @method SetShippingCustomFieldChange current()
 * @method SetShippingCustomFieldChange end()
 * @method SetShippingCustomFieldChange at($offset)
 */
class SetShippingCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetShippingCustomFieldChange $value
     * @psalm-param SetShippingCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetShippingCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetShippingCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetShippingCustomFieldChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetShippingCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetShippingCustomFieldChange $data */
                $data = SetShippingCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
