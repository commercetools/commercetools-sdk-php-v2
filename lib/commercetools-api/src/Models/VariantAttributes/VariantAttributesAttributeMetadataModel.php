<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\VariantAttributes;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class VariantAttributesAttributeMetadataModel extends JsonObjectModel implements VariantAttributesAttributeMetadata
{
    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?LocalizedString
     */
    protected $label;

    /**
     *
     * @var ?string
     */
    protected $type;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
        ?LocalizedString $label = null,
        ?string $type = null
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
    }

    /**
     * <p>Name of the Attribute as defined in the <a href="ctp:api:type:ProductType">ProductType</a>.</p>
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
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Localized label of the Attribute as defined in the <a href="ctp:api:type:ProductType">ProductType</a>.
     * Subject to <a href="/../api/projects/productProjections#locales">locale projection</a> if <code>localeProjection</code> is specified.</p>
     *
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

            $this->label = LocalizedStringModel::of($data);
        }

        return $this->label;
    }

    /**
     * <p>Name of the <a href="ctp:api:type:AttributeType">AttributeType</a>, for example <code>boolean</code>, <code>text</code>, <code>ltext</code>, <code>enum</code>, <code>lenum</code>, <code>number</code>, <code>money</code>, <code>date</code>, <code>time</code>, <code>datetime</code>, <code>reference</code>, <code>set</code>, or <code>nested</code>.</p>
     *
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }


    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?LocalizedString $label
     */
    public function setLabel(?LocalizedString $label): void
    {
        $this->label = $label;
    }

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }
}
