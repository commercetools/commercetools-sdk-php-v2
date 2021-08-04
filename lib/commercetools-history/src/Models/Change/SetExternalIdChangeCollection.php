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
 * @extends ChangeCollection<SetExternalIdChange>
 * @method SetExternalIdChange current()
 * @method SetExternalIdChange at($offset)
 */
class SetExternalIdChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetExternalIdChange $value
     * @psalm-param SetExternalIdChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetExternalIdChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetExternalIdChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetExternalIdChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetExternalIdChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetExternalIdChange $data */
                $data = SetExternalIdChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
