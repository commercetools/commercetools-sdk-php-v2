<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Common;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Type\CustomFields;

interface Asset extends JsonObject
{
    const FIELD_ID = 'id';
    const FIELD_SOURCES = 'sources';
    const FIELD_NAME = 'name';
    const FIELD_DESCRIPTION = 'description';
    const FIELD_TAGS = 'tags';
    const FIELD_CUSTOM = 'custom';
    const FIELD_KEY = 'key';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return AssetSourceCollection
     */
    public function getSources();

    /**
     * @return LocalizedString
     */
    public function getName();

    /**
     * @return LocalizedString
     */
    public function getDescription();

    /**
     * @return array
     */
    public function getTags();

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @return string
     */
    public function getKey();

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

    /**
     * @param AssetSourceCollection $sources
     * @return $this
     */
    public function setSources(AssetSourceCollection $sources);

    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name);

    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description);

    /**
     * @param array $tags
     * @return $this
     */
    public function setTags($tags);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

}
