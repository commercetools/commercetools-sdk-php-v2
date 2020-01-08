<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQL;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class GraphQLVariablesMapModel extends JsonObjectModel implements GraphQLVariablesMap
{
    public function __construct(
    ) {
    }

    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }
        if (1 === preg_match(GraphQLVariablesMap::FIELD_PATTERN0, $key)) {
            // @psalm-var stdClass $data
            return JsonObjectModel::of($data);
        }

        return $data;
    }
}
