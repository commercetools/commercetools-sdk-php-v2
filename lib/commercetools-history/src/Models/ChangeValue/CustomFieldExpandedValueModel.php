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
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\LocalizedStringModel;

/**
 * @internal
 */
final class CustomFieldExpandedValueModel extends JsonObjectModel implements CustomFieldExpandedValue
{


    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?mixed
     */
    protected $value;

    /**
     *
     * @var ?LocalizedString
     */
    protected $label;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
         $value = null,
        ?LocalizedString $label = null
    ) {
        $this->name = $name;
        $this->value = $value;
        $this->label = $label;

    }

    /**
     * <p>Name of a custom field.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name =  (string) $data;
        }

        return $this->name;
    }

    /**
     *
     * @return null|mixed
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value =  $data;
        }

        return $this->value;
    }

    /**
     *
     * @return null|LocalizedString
     */
    public function getLabel()
    {
        if (is_null($this->label)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_LABEL);
            if (is_null($data)) {
                return null;
            }

            $this->label =  LocalizedStringModel::of($data);
        }

        return $this->label;
    }


    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $value
     */
    public function setValue( $value): void
    {
        $this->value = $value;
    }

    /**
     * @param ?LocalizedString $label
     */
    public function setLabel(?LocalizedString $label): void
    {
        $this->label = $label;
    }



}
