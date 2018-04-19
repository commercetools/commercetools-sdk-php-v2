<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\LocalizedString;

interface FieldDefinition extends JsonObject
{
    const FIELD_TYPE = 'type';
    const FIELD_NAME = 'name';
    const FIELD_LABEL = 'label';
    const FIELD_REQUIRED = 'required';
    const FIELD_INPUT_HINT = 'inputHint';

    /**
     * @return object
     */
    public function getType();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return LocalizedString
     */
    public function getLabel();

    /**
     * @return mixed
     */
    public function getRequired();

    /**
     * @return string
     */
    public function getInputHint();

    /**
     * @param object $type
     * @return $this
     */
    public function setType($type);

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param LocalizedString $label
     * @return $this
     */
    public function setLabel(LocalizedString $label);

    /**
     * @param mixed $required
     * @return $this
     */
    public function setRequired($required);

    /**
     * @param string $inputHint
     * @return $this
     */
    public function setInputHint(string $inputHint);

}
