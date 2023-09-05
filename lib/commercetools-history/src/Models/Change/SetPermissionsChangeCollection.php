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
 * @extends ChangeCollection<SetPermissionsChange>
 * @method SetPermissionsChange current()
 * @method SetPermissionsChange end()
 * @method SetPermissionsChange at($offset)
 */
class SetPermissionsChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetPermissionsChange $value
     * @psalm-param SetPermissionsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetPermissionsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetPermissionsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetPermissionsChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetPermissionsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetPermissionsChange $data */
                $data = SetPermissionsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
