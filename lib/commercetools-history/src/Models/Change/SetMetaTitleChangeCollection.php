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
 * @extends ChangeCollection<SetMetaTitleChange>
 * @method SetMetaTitleChange current()
 * @method SetMetaTitleChange end()
 * @method SetMetaTitleChange at($offset)
 */
class SetMetaTitleChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetMetaTitleChange $value
     * @psalm-param SetMetaTitleChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMetaTitleChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMetaTitleChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMetaTitleChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetMetaTitleChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetMetaTitleChange $data */
                $data = SetMetaTitleChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
