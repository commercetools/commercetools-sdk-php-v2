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
final class AttributeGroupAddAttributeActionModel extends JsonObjectModel implements AttributeGroupAddAttributeAction
{
    public const DISCRIMINATOR_VALUE = 'addAttribute';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?AttributeReference
     */
    protected $attribute;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AttributeReference $attribute = null,
        ?string $action = null
    ) {
        $this->attribute = $attribute;
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
     * <p>Value to add.</p>
     *
     *
     * @return null|AttributeReference
     */
    public function getAttribute()
    {
        if (is_null($this->attribute)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ATTRIBUTE);
            if (is_null($data)) {
                return null;
            }

            $this->attribute = AttributeReferenceModel::of($data);
        }

        return $this->attribute;
    }


    /**
     * @param ?AttributeReference $attribute
     */
    public function setAttribute(?AttributeReference $attribute): void
    {
        $this->attribute = $attribute;
    }
}
