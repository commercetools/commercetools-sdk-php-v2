<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductTypeAddAttributeDefinitionActionModel extends JsonObjectModel implements ProductTypeAddAttributeDefinitionAction
{
    public const DISCRIMINATOR_VALUE = 'addAttributeDefinition';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?AttributeDefinitionDraft
     */
    protected $attribute;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AttributeDefinitionDraft $attribute = null,
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
     * <p>Value to append to <code>attributes</code>.</p>
     *
     *
     * @return null|AttributeDefinitionDraft
     */
    public function getAttribute()
    {
        if (is_null($this->attribute)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ATTRIBUTE);
            if (is_null($data)) {
                return null;
            }

            $this->attribute = AttributeDefinitionDraftModel::of($data);
        }

        return $this->attribute;
    }


    /**
     * @param ?AttributeDefinitionDraft $attribute
     */
    public function setAttribute(?AttributeDefinitionDraft $attribute): void
    {
        $this->attribute = $attribute;
    }
}
