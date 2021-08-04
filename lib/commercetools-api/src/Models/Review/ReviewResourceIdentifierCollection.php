<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<ReviewResourceIdentifier>
 * @method ReviewResourceIdentifier current()
 * @method ReviewResourceIdentifier end()
 * @method ReviewResourceIdentifier at($offset)
 */
class ReviewResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert ReviewResourceIdentifier $value
     * @psalm-param ReviewResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReviewResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReviewResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?ReviewResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ReviewResourceIdentifier $data */
                $data = ReviewResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
