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
final class GraphQLReferenceExistsErrorModel extends JsonObjectModel implements GraphQLReferenceExistsError
{
    public const DISCRIMINATOR_VALUE = 'ReferenceExists';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?string
     */
    protected $referencedBy;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $referencedBy = null,
        ?string $code = null
    ) {
        $this->referencedBy = $referencedBy;
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
     * <p>Type of referenced resource.</p>
     *
     *
     * @return null|string
     */
    public function getReferencedBy()
    {
        if (is_null($this->referencedBy)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_REFERENCED_BY);
            if (is_null($data)) {
                return null;
            }
            $this->referencedBy = (string) $data;
        }

        return $this->referencedBy;
    }


    /**
     * @param ?string $referencedBy
     */
    public function setReferencedBy(?string $referencedBy): void
    {
        $this->referencedBy = $referencedBy;
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
