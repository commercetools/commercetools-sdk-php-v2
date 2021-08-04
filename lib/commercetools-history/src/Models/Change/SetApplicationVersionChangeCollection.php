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
 * @extends ChangeCollection<SetApplicationVersionChange>
 * @method SetApplicationVersionChange current()
 * @method SetApplicationVersionChange at($offset)
 */
class SetApplicationVersionChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetApplicationVersionChange $value
     * @psalm-param SetApplicationVersionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetApplicationVersionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetApplicationVersionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetApplicationVersionChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetApplicationVersionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetApplicationVersionChange $data */
                $data = SetApplicationVersionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
