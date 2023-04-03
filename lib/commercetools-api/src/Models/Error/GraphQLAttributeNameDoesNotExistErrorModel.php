<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLAttributeNameDoesNotExistErrorModel extends JsonObjectModel implements GraphQLAttributeNameDoesNotExistError
{
    public const DISCRIMINATOR_VALUE = 'AttributeNameDoesNotExist';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?string
     */
    protected $invalidAttributeName;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $invalidAttributeName = null,
        ?string $code = null
    ) {
        $this->invalidAttributeName = $invalidAttributeName;
        $this->code = $code ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * <p>Non-existent Attribute name.</p>
     *
     *
     * @return null|string
     */
    public function getInvalidAttributeName()
    {
        if (is_null($this->invalidAttributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INVALID_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->invalidAttributeName = (string) $data;
        }

        return $this->invalidAttributeName;
    }


    /**
     * @param ?string $invalidAttributeName
     */
    public function setInvalidAttributeName(?string $invalidAttributeName): void
    {
        $this->invalidAttributeName = $invalidAttributeName;
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

        return $data;
    }
}
