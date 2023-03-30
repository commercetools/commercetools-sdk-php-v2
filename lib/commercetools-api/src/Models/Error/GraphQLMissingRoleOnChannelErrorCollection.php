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
 * @extends GraphQLErrorObjectCollection<GraphQLMissingRoleOnChannelError>
 * @method GraphQLMissingRoleOnChannelError current()
 * @method GraphQLMissingRoleOnChannelError end()
 * @method GraphQLMissingRoleOnChannelError at($offset)
 */
class GraphQLMissingRoleOnChannelErrorCollection extends GraphQLErrorObjectCollection
{
    /**
     * @psalm-assert GraphQLMissingRoleOnChannelError $value
     * @psalm-param GraphQLMissingRoleOnChannelError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GraphQLMissingRoleOnChannelErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GraphQLMissingRoleOnChannelError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GraphQLMissingRoleOnChannelError
     */
    protected function mapper()
    {
        return function (?int $index): ?GraphQLMissingRoleOnChannelError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var GraphQLMissingRoleOnChannelError $data */
                $data = GraphQLMissingRoleOnChannelErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
