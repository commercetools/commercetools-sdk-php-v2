<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\VariantAttributes;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantAttributesAttributeMetadata extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_LABEL = 'label';
    public const FIELD_TYPE = 'type';

    /**
     * <p>Name of the Attribute as defined in the <a href="ctp:api:type:ProductType">ProductType</a>.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Localized label of the Attribute as defined in the <a href="ctp:api:type:ProductType">ProductType</a>.
     * Subject to <a href="/../api/projects/productProjections#locales">locale projection</a> if <code>localeProjection</code> is specified.</p>
     *

     * @return null|LocalizedString
     */
    public function getLabel();

    /**
     * <p>Name of the <a href="ctp:api:type:AttributeType">AttributeType</a>, for example <code>boolean</code>, <code>text</code>, <code>ltext</code>, <code>enum</code>, <code>lenum</code>, <code>number</code>, <code>money</code>, <code>date</code>, <code>time</code>, <code>datetime</code>, <code>reference</code>, <code>set</code>, or <code>nested</code>.</p>
     *

     * @return null|string
     */
    public function getType();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?LocalizedString $label
     */
    public function setLabel(?LocalizedString $label): void;

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void;
}
