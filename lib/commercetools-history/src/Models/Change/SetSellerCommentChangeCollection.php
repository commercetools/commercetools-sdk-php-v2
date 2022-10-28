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
 * @extends ChangeCollection<SetSellerCommentChange>
 * @method SetSellerCommentChange current()
 * @method SetSellerCommentChange end()
 * @method SetSellerCommentChange at($offset)
 */
class SetSellerCommentChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetSellerCommentChange $value
     * @psalm-param SetSellerCommentChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetSellerCommentChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetSellerCommentChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetSellerCommentChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetSellerCommentChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetSellerCommentChange $data */
                $data = SetSellerCommentChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
