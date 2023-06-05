<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ValidFromAndUntilValueModel extends JsonObjectModel implements ValidFromAndUntilValue
{


    /**
     *
     * @var ?string
     */
    protected $validFrom;

    /**
     *
     * @var ?string
     */
    protected $validUntil;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $validFrom = null,
        ?string $validUntil = null
    ) {
        $this->validFrom = $validFrom;
        $this->validUntil = $validUntil;

    }

    /**
     *
     * @return null|string
     */
    public function getValidFrom()
    {
        if (is_null($this->validFrom)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALID_FROM);
            if (is_null($data)) {
                return null;
            }
            $this->validFrom = (string) $data;
        }

        return $this->validFrom;
    }

    /**
     *
     * @return null|string
     */
    public function getValidUntil()
    {
        if (is_null($this->validUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALID_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $this->validUntil = (string) $data;
        }

        return $this->validUntil;
    }


    /**
     * @param ?string $validFrom
     */
    public function setValidFrom(?string $validFrom): void
    {
        $this->validFrom = $validFrom;
    }

    /**
     * @param ?string $validUntil
     */
    public function setValidUntil(?string $validUntil): void
    {
        $this->validUntil = $validUntil;
    }



}
