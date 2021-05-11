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
 * @extends ChangeCollection<SetMaxApplicationsPerCustomerChange>
 * @method SetMaxApplicationsPerCustomerChange current()
 * @method SetMaxApplicationsPerCustomerChange at($offset)
 */
class SetMaxApplicationsPerCustomerChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetMaxApplicationsPerCustomerChange $value
     * @psalm-param SetMaxApplicationsPerCustomerChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMaxApplicationsPerCustomerChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMaxApplicationsPerCustomerChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMaxApplicationsPerCustomerChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetMaxApplicationsPerCustomerChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetMaxApplicationsPerCustomerChange $data */
                $data = SetMaxApplicationsPerCustomerChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
