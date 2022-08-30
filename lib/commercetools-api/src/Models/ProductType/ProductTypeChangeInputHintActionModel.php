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
final class ProductTypeChangeInputHintActionModel extends JsonObjectModel implements ProductTypeChangeInputHintAction
{
    public const DISCRIMINATOR_VALUE = 'changeInputHint';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $attributeName;

    /**
     *
     * @var ?string
     */
    protected $newValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $attributeName = null,
        ?string $newValue = null,
        ?string $action = null
    ) {
        $this->attributeName = $attributeName;
        $this->newValue = $newValue;
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
     * <p>Name of the AttributeDefinition to update.</p>
     *
     *
     * @return null|string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->attributeName = (string) $data;
        }

        return $this->attributeName;
    }

    /**
     * <p><code>SingleLine</code> or <code>MultiLine</code></p>
     *
     *
     * @return null|string
     */
    public function getNewValue()
    {
        if (is_null($this->newValue)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NEW_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->newValue = (string) $data;
        }

        return $this->newValue;
    }


    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }

    /**
     * @param ?string $newValue
     */
    public function setNewValue(?string $newValue): void
    {
        $this->newValue = $newValue;
    }
}
