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
 * @extends ChangeCollection<AddInterfaceInteractionChange>
 * @method AddInterfaceInteractionChange current()
 * @method AddInterfaceInteractionChange end()
 * @method AddInterfaceInteractionChange at($offset)
 */
class AddInterfaceInteractionChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddInterfaceInteractionChange $value
     * @psalm-param AddInterfaceInteractionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddInterfaceInteractionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddInterfaceInteractionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddInterfaceInteractionChange
     */
    protected function mapper()
    {
        return function (?int $index): ?AddInterfaceInteractionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddInterfaceInteractionChange $data */
                $data = AddInterfaceInteractionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
