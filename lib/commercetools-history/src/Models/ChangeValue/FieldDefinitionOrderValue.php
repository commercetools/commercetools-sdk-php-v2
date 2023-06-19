<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\LocalizedString;

interface FieldDefinitionOrderValue extends JsonObject
{

    public const FIELD_NAME = 'name';
    public const FIELD_LABEL = 'label';

    /**
     * <p>Name of the <a href="ctp:api:type:FieldDefinition">FieldDefinition</a>.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Descriptive label of the field.</p>
     *

     * @return null|LocalizedString
     */
    public function getLabel();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?LocalizedString $label
     */
    public function setLabel(?LocalizedString $label): void;
}
