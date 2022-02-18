<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypeChangeLabelAction extends TypeUpdateAction
{
    public const FIELD_FIELD_NAME = 'fieldName';
    public const FIELD_LABEL = 'label';

    /**
     * <p>Name of the <a href="ctp:api:type:FieldDefinition">Field Definition</a> to update.</p>
     *
     * @return null|string
     */
    public function getFieldName();

    /**
     * @return null|LocalizedString
     */
    public function getLabel();

    /**
     * @param ?string $fieldName
     */
    public function setFieldName(?string $fieldName): void;

    /**
     * @param ?LocalizedString $label
     */
    public function setLabel(?LocalizedString $label): void;
}
