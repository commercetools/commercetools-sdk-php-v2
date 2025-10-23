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
 * @extends ChangeCollection<SetAncestorsChange>
 * @method SetAncestorsChange current()
 * @method SetAncestorsChange end()
 * @method SetAncestorsChange at($offset)
 */
class SetAncestorsChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetAncestorsChange $value
     * @psalm-param SetAncestorsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAncestorsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAncestorsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAncestorsChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetAncestorsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetAncestorsChange $data */
                $data = SetAncestorsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
