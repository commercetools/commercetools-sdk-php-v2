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
final class GraphQLDuplicateEnumValuesErrorModel extends JsonObjectModel implements GraphQLDuplicateEnumValuesError
{
    public const DISCRIMINATOR_VALUE = 'DuplicateEnumValues';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     *
     * @var ?array
     */
    protected $duplicates;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?array $duplicates = null,
        ?string $code = null
    ) {
        $this->duplicates = $duplicates;
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
     * <p>Duplicate keys.</p>
     *
     *
     * @return null|array
     */
    public function getDuplicates()
    {
        if (is_null($this->duplicates)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_DUPLICATES);
            if (is_null($data)) {
                return null;
            }
            $this->duplicates = $data;
        }

        return $this->duplicates;
    }


    /**
     * @param ?array $duplicates
     */
    public function setDuplicates(?array $duplicates): void
    {
        $this->duplicates = $duplicates;
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
