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
 * @extends ChangeCollection<SetCustomTypeChange>
 * @method SetCustomTypeChange current()
 * @method SetCustomTypeChange at($offset)
 */
class SetCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetCustomTypeChange $value
     * @psalm-param SetCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomTypeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCustomTypeChange $data */
                $data = SetCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
