<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\JsonObject;

interface ProductTypeDraft extends JsonObject {
    const FIELD_KEY = 'key';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_ATTRIBUTES = 'attributes';

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return AttributeDefinitionDraftCollection
     */
    public function getAttributes();

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description);

    /**
     * @param AttributeDefinitionDraftCollection $attributes
     * @return $this
     */
    public function setAttributes(AttributeDefinitionDraftCollection $attributes);

}
