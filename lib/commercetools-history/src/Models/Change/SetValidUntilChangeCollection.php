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
 * @extends ChangeCollection<SetValidUntilChange>
 * @method SetValidUntilChange current()
 * @method SetValidUntilChange end()
 * @method SetValidUntilChange at($offset)
 */
class SetValidUntilChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetValidUntilChange $value
     * @psalm-param SetValidUntilChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetValidUntilChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetValidUntilChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetValidUntilChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetValidUntilChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetValidUntilChange $data */
                $data = SetValidUntilChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
