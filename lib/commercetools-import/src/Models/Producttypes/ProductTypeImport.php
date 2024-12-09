<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Producttypes;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\ImportResource;

interface ProductTypeImport extends ImportResource
{
    public const FIELD_NAME = 'name';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_ATTRIBUTES = 'attributes';

    /**
     * <p>User-defined unique identifier. If a <a href="ctp:api:type:ProductType">ProductType</a> with this <code>key</code> exists, it will be updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getKey();

    /**
     * <p>Maps to <code>ProductType.name</code>.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * <p>Maps to <code>ProductType.description</code>.</p>
     *

     * @return null|string
     */
    public function getDescription();

    /**
     * <p>The <code>attributes</code> of <a href="ctp:api:type:ProductType">ProductType</a>.</p>
     *

     * @return null|AttributeDefinitionCollection
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
     * @param ?AttributeDefinitionCollection $attributes
     */
    public function setAttributes(?AttributeDefinitionCollection $attributes): void;
}
