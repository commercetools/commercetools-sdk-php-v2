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
final class EnumValueModel extends JsonObjectModel implements EnumValue
{


    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $label;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $label = null
    ) {
        $this->key = $key;
        $this->label = $label;

    }

    /**
     * <p>Key of the value used as a programmatic identifier.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Descriptive label of the value.</p>
     *
     *
     * @return null|string
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LABEL);
            if (is_null($data)) {
                return null;
            }
            $this->label = (string) $data;
        }

        return $this->label;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $label
     */
    public function setLabel(?string $label): void
    {
        $this->label = $label;
    }



}
