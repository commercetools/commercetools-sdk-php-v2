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
 * @extends ChangeCollection<SetMetaKeywordsChange>
 * @method SetMetaKeywordsChange current()
 * @method SetMetaKeywordsChange at($offset)
 */
class SetMetaKeywordsChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetMetaKeywordsChange $value
     * @psalm-param SetMetaKeywordsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMetaKeywordsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMetaKeywordsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMetaKeywordsChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetMetaKeywordsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetMetaKeywordsChange $data */
                $data = SetMetaKeywordsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
