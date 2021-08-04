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
 * @extends ChangeCollection<SetLineItemProductSlugChange>
 * @method SetLineItemProductSlugChange current()
 * @method SetLineItemProductSlugChange at($offset)
 */
class SetLineItemProductSlugChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetLineItemProductSlugChange $value
     * @psalm-param SetLineItemProductSlugChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemProductSlugChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemProductSlugChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemProductSlugChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetLineItemProductSlugChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetLineItemProductSlugChange $data */
                $data = SetLineItemProductSlugChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
