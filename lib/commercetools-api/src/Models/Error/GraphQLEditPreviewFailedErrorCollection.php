<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\GraphQLErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends GraphQLErrorObjectCollection<GraphQLEditPreviewFailedError>
 * @method GraphQLEditPreviewFailedError current()
 * @method GraphQLEditPreviewFailedError end()
 * @method GraphQLEditPreviewFailedError at($offset)
 */
class GraphQLEditPreviewFailedErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLEditPreviewFailedError $value
     * @psalm-param GraphQLEditPreviewFailedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLEditPreviewFailedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLEditPreviewFailedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLEditPreviewFailedError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLEditPreviewFailedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLEditPreviewFailedError $data */
                $data = GraphQLEditPreviewFailedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
