<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductTypeDraft extends JsonObject
{
    public const FIELD_KEY = 'key';
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_ATTRIBUTES = 'attributes';

    /**
     * <p>User-defined unique identifier for the ProductType.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Name of the ProductType.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Description of the ProductType.</p>
     *

     * @return null|string
     */
    public function getDescription();

    /**
     * <p>Attributes to specify for the ProductType. Products of this ProductType have these Attributes available on their <a href="ctp:api:type:ProductVariant">ProductVariants</a>.</p>
     *

     * @return null|AttributeDefinitionDraftCollection
     */
    public function getAttributes();

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $description
     */
    public function setDescription(?string $description): void;

    /**
     * @param ?AttributeDefinitionDraftCollection $attributes
     */
    public function setAttributes(?AttributeDefinitionDraftCollection $attributes): void;
}
