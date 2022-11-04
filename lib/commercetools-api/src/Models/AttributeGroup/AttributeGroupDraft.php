<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AttributeGroupDraft extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_ATTRIBUTES = 'attributes';
    public const FIELD_KEY = 'key';

    /**
     * <p>Name of the AttributeGroup.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>Description of the AttributeGroup.</p>
     *

     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * <p><a href="ctp:api:type:AttributeDefinition">Attributes</a> with unique values.</p>
     *

     * @return null|AttributeReferenceCollection
     */
    public function getAttributes();

    /**
     * <p>User-defined unique identifier for the AttributeGroup.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;

    /**
     * @param ?AttributeReferenceCollection $attributes
     */
    public function setAttributes(?AttributeReferenceCollection $attributes): void;

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;
}
