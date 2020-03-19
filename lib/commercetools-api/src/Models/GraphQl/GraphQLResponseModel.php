<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQl;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLResponseModel extends JsonObjectModel implements GraphQLResponse
{
    /**
     * @var ?JsonObject
     */
    protected $data;

    /**
     * @var ?GraphQLErrorCollection
     */
    protected $errors;


    public function __construct(
        JsonObject $data = null,
        GraphQLErrorCollection $errors = null
    ) {
        $this->data = $data;
        $this->errors = $errors;
    }

    /**
     * @return null|JsonObject
     */
    public function getData()
    {
        if (is_null($this->data)) {
            /** @psalm-var ?stdClass $data */
            $data = $this->raw(GraphQLResponse::FIELD_DATA);
            if (is_null($data)) {
                return null;
            }
            $this->data = JsonObjectModel::of($data);
        }

        return $this->data;
    }

    /**
     * @return null|GraphQLErrorCollection
     */
    public function getErrors()
    {
        if (is_null($this->errors)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(GraphQLResponse::FIELD_ERRORS);
            if (is_null($data)) {
                return null;
            }
            $this->errors = GraphQLErrorCollection::fromArray($data);
        }

        return $this->errors;
    }

    public function setData(?JsonObject $data): void
    {
        $this->data = $data;
    }

    public function setErrors(?GraphQLErrorCollection $errors): void
    {
        $this->errors = $errors;
    }
}
