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
 * @extends ChangeCollection<SetAddressCustomFieldChange>
 * @method SetAddressCustomFieldChange current()
 * @method SetAddressCustomFieldChange end()
 * @method SetAddressCustomFieldChange at($offset)
 */
class SetAddressCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetAddressCustomFieldChange $value
     * @psalm-param SetAddressCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAddressCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAddressCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAddressCustomFieldChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetAddressCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetAddressCustomFieldChange $data */
                $data = SetAddressCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
