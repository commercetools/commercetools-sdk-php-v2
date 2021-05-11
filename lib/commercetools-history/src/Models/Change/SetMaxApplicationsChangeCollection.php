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
 * @extends ChangeCollection<SetMaxApplicationsChange>
 * @method SetMaxApplicationsChange current()
 * @method SetMaxApplicationsChange at($offset)
 */
class SetMaxApplicationsChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetMaxApplicationsChange $value
     * @psalm-param SetMaxApplicationsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMaxApplicationsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMaxApplicationsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMaxApplicationsChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetMaxApplicationsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetMaxApplicationsChange $data */
                $data = SetMaxApplicationsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
