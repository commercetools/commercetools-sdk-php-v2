<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AttributeGroupSetAttributesActionModel extends JsonObjectModel implements AttributeGroupSetAttributesAction
{
    public const DISCRIMINATOR_VALUE = 'setAttributes';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?AttributeReferenceCollection
     */
    protected $attributes;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AttributeReferenceCollection $attributes = null,
        ?string $action = null
    ) {
        $this->attributes = $attributes;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>New unique values to set.</p>
     *
     *
     * @return null|AttributeReferenceCollection
     */
    public function getAttributes()
    {
        if (is_null($this->attributes)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ATTRIBUTES);
            if (is_null($data)) {
                return null;
            }
            $this->attributes = AttributeReferenceCollection::fromArray($data);
        }

        return $this->attributes;
    }


    /**
     * @param ?AttributeReferenceCollection $attributes
     */
    public function setAttributes(?AttributeReferenceCollection $attributes): void
    {
        $this->attributes = $attributes;
    }
}
