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
 * @extends ChangeCollection<SetTitleChange>
 * @method SetTitleChange current()
 * @method SetTitleChange at($offset)
 */
class SetTitleChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetTitleChange $value
     * @psalm-param SetTitleChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTitleChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTitleChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTitleChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetTitleChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetTitleChange $data */
                $data = SetTitleChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
