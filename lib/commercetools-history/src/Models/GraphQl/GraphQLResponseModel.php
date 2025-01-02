<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\GraphQl;

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
     *
     * @var ?mixed
     */
    protected $data;

    /**
     *
     * @var ?GraphQLErrorCollection
     */
    protected $errors;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
         $data = null,
        ?GraphQLErrorCollection $errors = null
    ) {
        $this->data = $data;
        $this->errors = $errors;

    }

    /**
     * <p>JSON object that contains the results of a GraphQL query.</p>
     *
     *
     * @return null|mixed
     */
    public function getData()
    {
        if (is_null($this->data)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_DATA);
            if (is_null($data)) {
                return null;
            }
            $this->data = $data;
        }

        return $this->data;
    }

    /**
     * <p>Errors that the GraphQL query returns.</p>
     *
     *
     * @return null|GraphQLErrorCollection
     */
    public function getErrors()
    {
        if (is_null($this->errors)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ERRORS);
            if (is_null($data)) {
                return null;
            }
            $this->errors = GraphQLErrorCollection::fromArray($data);
        }

        return $this->errors;
    }


    /**
     * @param mixed $data
     */
    public function setData( $data): void
    {
        $this->data = $data;
    }

    /**
     * @param ?GraphQLErrorCollection $errors
     */
    public function setErrors(?GraphQLErrorCollection $errors): void
    {
        $this->errors = $errors;
    }



}
