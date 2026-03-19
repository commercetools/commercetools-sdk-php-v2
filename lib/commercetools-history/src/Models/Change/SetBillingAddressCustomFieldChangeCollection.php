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
 * @extends ChangeCollection<SetBillingAddressCustomFieldChange>
 * @method SetBillingAddressCustomFieldChange current()
 * @method SetBillingAddressCustomFieldChange end()
 * @method SetBillingAddressCustomFieldChange at($offset)
 */
class SetBillingAddressCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetBillingAddressCustomFieldChange $value
     * @psalm-param SetBillingAddressCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetBillingAddressCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetBillingAddressCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetBillingAddressCustomFieldChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetBillingAddressCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetBillingAddressCustomFieldChange $data */
                $data = SetBillingAddressCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
